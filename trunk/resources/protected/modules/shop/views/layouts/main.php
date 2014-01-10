<?php $this->beginContent(Rights::module()->appLayout); ?>

    <div id="rights" class="container">

        <div id="content">

            <?php if( $this->id!=='install' ): ?>

                <div id="menu">
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                    )); ?>
                    <hr />
                    <?php // $this->renderPartial('/_menu'); ?>
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
                </div>
                <hr />

            <?php endif; ?>

            <?php // $this->renderPartial('/_flash'); ?>
            <?php
            $this->widget('ShoppingCartWidget');
            $this->widget('ProductCategoriesWidget');
            if(!Yii::app()->user->isGuest)
                $this->widget('AdminWidget');

            ?>
            <hr />
            <?php echo $content; ?>

        </div><!-- content -->

    </div>

<?php $this->endContent(); ?>