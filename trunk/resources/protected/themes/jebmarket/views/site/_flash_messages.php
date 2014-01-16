<?php
/**
 * Created by PhpStorm.
 * User: Emon
 * Date: 1/16/14
 * Time: 9:43 PM
 */
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="alert alert-dismissable alert-' . $key . '"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $message . "</div>\n";
}