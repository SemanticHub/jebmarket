<div id="sidebar">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="portlet-title"><span class="glyphicon glyphicon-list"></span> Tags</div>
        </div>
        <div class="portlet-content">
            <ul class="tag_category">
                <?php
                foreach($this->tag as $tag){
                    $tags = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND term_id = '$tag->term_id'"));
                    foreach($tags as $ts){
                        if(!empty($this->user)){
                            echo '<li><a href="'.Yii::app()->baseURL.'/'.$this->user->username.'/blog/tag/view/name/'.$ts->slug.'" class="label label-success"><kbd>'.$ts->name.'</kbd></a></li>';
                        }else{
                            echo '<li><a href="'.Yii::app()->baseURL.'/blog/tag/view/name/'.$ts->slug.'" class="label label-success"><kbd>'.$ts->name.'</kbd></a></li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>