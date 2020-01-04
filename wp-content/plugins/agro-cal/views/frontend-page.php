<?php
    if (!defined('ABSPATH')) exit;
    global $agroCalPlugin;
?>
<div class="agro-cal-container">
        <div class="container">
        <h2><?php echo $agroCalPlugin->getOption('name_table');?></h2>
        </div>
        <div class="table-info card-body">
            <p><?php echo $agroCalPlugin->getOption('table_info');?></p>
        </div>
        <div class="container">
            <div class="col list-group-item"><?php _e('Plant');?></div>
            <div class="row row-cols-4">       
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('plant');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('plant2');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('plant3');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('plant4');?></div>
            </div>
        </div>
        <div class="container">
            <div class="col list-group-item"><?php _e('Planting time');?></div>
            <div class="row row-cols-4">                
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('pltime');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('pltime2');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('pltime3');?></div>
            <div class="col list-group-item"><?php echo $agroCalPlugin->getOption('pltime4');?></div>
            </div>
        </div>   


 </div>


