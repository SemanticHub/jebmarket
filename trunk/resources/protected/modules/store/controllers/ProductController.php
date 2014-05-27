<?php

class ProductController extends StoreBaseController {

	public $layout='main';
	public $defaultAction = 'admin';

	public function filters() {
		return array(
            'storeRights', // rights module impl for store
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules() {
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				//'actions'=>array('index','view'),
				//'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'new', 'discard', 'edit'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionView($id) {
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

    public function actionNew() {
        $product=new Product;
        $product->store_id = Store::model()->getUserStoreId();
        $product->status = 0;
        $product->added = date("Y-m-d H:i:s");
        if(Yii::app()->request->getParam('type')) $product->type_id = Yii::app()->request->getParam('type');

        $product->productDetail = new ProductDetail;

        if(isset($_POST['Product'])) {

            // product
            $product->attributes=$_POST['Product'];
            $product->productDetail->attributes = $_POST['ProductDetail'];
            $product->validate();
            $product->productDetail->validate();

            if($product->save()) {

                // product detail
                $product->productDetail->product_id = $product->id;
                $product->productDetail->save();

                // product categories
                foreach ($product->productCategories as $categoryId) {
                    $productToCategory = new ProductToCategory();
                    $productToCategory->product_id = $product->id;
                    $productToCategory->category_id = $categoryId;
                    $productToCategory->validate();
                    $productToCategory->save();
                }

                // product image
                foreach ($product->productImages as $mediaId) {
                    $productImage = new ProductImage();
                    $productImage->product_id = $product->id;
                    $productImage->media_id = $mediaId;
                    $productImage->image_file = Media::model()->findByPk($mediaId)->url;
                    $productImage->validate();
                    $productImage->save();
                }
                $this->redirect($this->actionAdmin());

            }
        }

        $this->render('create', array( 'product'=>$product ));
    }

    public function actionDiscard() {
        $this->redirect("admin");
    }

	public function actionEdit($id) {
        $product = Product::model()->findByPk($id);
        $product->productDetail = ProductDetail::model()->find(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        $product->productImages = ProductImage::model()->findAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        $productCategories = [];
        $productToCategory = ProductToCategory::model()->findAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        foreach($productToCategory as $k => $v) {
            array_push($productCategories, $v->category_id);
        }
        $product->productCategories = $productCategories;
        $product->productManufacture = ProductManufacture::model()->findAll();

        if(isset($_POST['Product'])) {

            // product
            $product->attributes=$_POST['Product'];
            $product->productDetail->attributes = $_POST['ProductDetail'];

            if($product->save()) {

                // product detail
                $product->productDetail->save();

                // product categories
                ProductToCategory::model()->deleteAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
                foreach ($product->productCategories as $categoryId) {
                    $productToCategory = new ProductToCategory();
                    $productToCategory->product_id = $product->id;
                    $productToCategory->category_id = $categoryId;
                    $productToCategory->validate();
                    $productToCategory->save();
                }

                // product image
                /*foreach ($product->productImages as $mediaId) {
                    $productImage = new ProductImage();
                    $productImage->product_id = $product->id;
                    $productImage->media_id = $mediaId;
                    $productImage->image_file = Media::model()->findByPk($mediaId)->url;
                    $productImage->validate();
                    $productImage->save();
                }*/
                $this->redirect($this->actionAdmin());

            }

        }

        $this->render('update',array('product'=>$product));
	}

    public function actionUpdate() {
        $es = new EditableSaver('Product');
        $es->update();
    }

	public function actionDelete($id) {
        // load core product
        $product = $this->loadModel($id);
        // delete all productDetail if variations available
        ProductDetail::model()->deleteAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        // delete all product to category reference but categories will still there for other products
        ProductToCategory::model()->deleteAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        // delete all productImage but medias will still there for other products
        ProductImage::model()->deleteAll(array('condition'=> 'product_id=:product_id', 'params'=> array(':product_id'=>$product->id)));
        // delete the actual product
        $product->delete();

        //Yii::app()->user->setFlash('success', 'Product successfully deleted.');
        $this->setLiveFlashes('Product successfully deleted.');

		if(!isset($_GET['ajax'])) $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex() {
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin() {
        $model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel($id) {
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	protected function performAjaxValidation($model) {
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}