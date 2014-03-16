<?php
if( $ref){
    $location = Location::model()->findByPk($ref);
    ?>
    <a href="#" id="location" data-toggle="modal" data-target="#location-modal" class="editable editable-click">
        <?php
        echo $location->name;
        while ($location->parent_id) {
            $location = Location::model()->findByPk($location->parent_id);
            echo " ".$location->next_level_name;
            echo ", ".$location->name;
        }
        ?>
    </a>
<?php
} else {
    ?>
    <a id="location" data-toggle="modal" data-target="#location-modal" href="#" class="editable editable-click editable-empty btn btn-sm btn-default" style="border-bottom-style: solid">Click to Add</a>
<?php
}
?>