<?php
/* $this yii/web/view */
/* $list []*/
/* $title string */
use vendor\package\widgets\NavigationMenu;
?>

<?
$this->title = $title;
?>
<div class="row">
    <div class="col-xs-3">
        <?=NavigationMenu::widget(['list' => $list])?>
    </div>
    <div class="col-xs-9">
    	
    </div>
</div>