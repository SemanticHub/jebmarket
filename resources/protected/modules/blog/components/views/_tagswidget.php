<div id="sidebar">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="portlet-title"><span class="glyphicon glyphicon-list"></span> Tags</div>
        </div>
        <div class="portlet-content">
            <ul class="tag_category">
                <?php foreach($this->tag as $tag){ ?>
                    <li><a href="#" class="label label-success"><kbd><?php echo $tag->name; ?></kbd></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>