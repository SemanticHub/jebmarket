<?php
/**
 * Created by PhpStorm.
 * User: Emon
 * Date: 1/11/14
 * Time: 4:48 AM
 */
 $this->beginContent(Shop::module()->appLayout); ?>

    <div class="container" id="shop">

        <div id="mainmenu">
            <?php
            $items = array();
            $items[] = array('label'=>'Home', 'url'=>array('/site/index'));
            $items[] = array('label'=>'All', 'url'=>array('/shop/products/index'));
            foreach(Category::model()->findAll() as $category)
                $items[] = array(
                    'label' => $category->title,
                    'url' => array(
                        '//shop/category/view', 'id' => $category->category_id));
            $items[] = array('label'=>'Admin', 'url'=>array('/shop/shop/admin'));

            $this->widget('zii.widgets.CMenu',array(
                'items'=>$items,
            )); ?>
        </div><!-- mainmenu -->

        <div id="content">
            <div style="float: right; max-height: 200px; width: 200px; margin: 5px;">
                <?php
                $this->widget('ShoppingCartWidget');
                $this->widget('ProductCategoriesWidget');
                if(!Yii::app()->user->isGuest)
                    $this->widget('AdminWidget');

                ?>
            </div>

            <div style="width: 700px;">
                <?php echo $content; ?>
            </div>
        </div>

        <div style="clear: both;"></div>

    </div><!-- page -->
<?php $this->endContent(); ?>