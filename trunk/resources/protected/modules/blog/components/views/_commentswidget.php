<div id="sidebar" style="margin-top: 20px;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="portlet-title"><span class="glyphicon glyphicon-list"></span> Categories</div>
        </div>
        <div class="portlet-content">
            <ul class="tag_category">
                <?php foreach($this->category as $category){ ?>
                    <li><a href="#" class="label label-success"><kbd><?php echo $category->name; ?></kbd></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>