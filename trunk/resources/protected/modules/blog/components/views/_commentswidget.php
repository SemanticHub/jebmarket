<div id="sidebar" style="margin-top: 20px;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="portlet-title"><span class="glyphicon glyphicon-list"></span> Categories</div>
        </div>
        <div class="portlet-content">
            <ul class="tag_category">
                <?php
                foreach($this->category as $tsqt){
                    $category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND term_id = '$tsqt->term_id'"));
                    foreach($category as $tst){
                        if(!empty($this->user)){
                            echo '<li><a href="'.Yii::app()->baseURL.'/'.$this->user->username.'/blog/category/view/name/'.$tst->slug.'" class="label label-success"><kbd>'.$tst->name.'</kbd></a></li>';
                        }else{
                            echo '<li><a href="'.Yii::app()->baseURL.'/blog/category/view/name/'.$tst->slug.'" class="label label-success"><kbd>'.$tst->name.'</kbd></a></li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>