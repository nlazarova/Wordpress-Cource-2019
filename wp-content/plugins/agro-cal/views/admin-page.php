<?php
if (!defined('ABSPATH')) exit;
global $agroCalPlugin;
?>

<div class="wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 


        <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="agro-cal-admin-form" value="1" />
            
                        <h2><?php _e('Information'); ?></h2>
            <p>
                <label><?php _e('Name table'); ?></label><br />
                <input type="text" name="name_table" value="<?php echo $agroCalPlugin->getOption('name_table'); ?>" />
            </p>
            <div class="table-info">
            <p>
                <label><?php _e('Table info'); ?></label><br />
                <textarea name="table_info" style="min-width: 400px;min-height:100px;"><?php echo $agroCalPlugin->getOption('table_info'); ?></textarea>
            </p>
            </div>
            <div class="information">
            <p>
                <label><?php _e('Plant'); ?></label><br />
                <input type="text" name="plant" value="<?php echo $agroCalPlugin->getOption('plant'); ?>" />
            </p>
            <p>
                <label><?php _e('Planting time'); ?></label><br />
                <input type="text" name="pltime" value="<?php echo $agroCalPlugin->getOption('pltime'); ?>" />
            </p>
            <p>
                <label><?php _e('Plant 2'); ?></label><br />
                <input type="text" name="plant2" value="<?php echo $agroCalPlugin->getOption('plant2'); ?>" />
            </p>
            <p>
                <label><?php _e('Planting time 2'); ?></label><br />
                <input type="text" name="pltime2" value="<?php echo $agroCalPlugin->getOption('pltime2'); ?>" />
            </p>
            <p>
                <label><?php _e('Plant 3'); ?></label><br />
                <input type="text" name="plant3" value="<?php echo $agroCalPlugin->getOption('plant3'); ?>" />
            </p>
            <p>
                <label><?php _e('Planting time 3'); ?></label><br />
                <input type="text" name="pltime3" value="<?php echo $agroCalPlugin->getOption('pltime3'); ?>" />
            </p>
            <p>
                <label><?php _e('Plant 4'); ?></label><br />
                <input type="text" name="plant4" value="<?php echo $agroCalPlugin->getOption('plant4'); ?>" />
            </p>
            <p>
                <label><?php _e('Planting time 4'); ?></label><br />
                <input type="text" name="pltime4" value="<?php echo $agroCalPlugin->getOption('pltime4'); ?>" />
            </p>
            
        </div><!-- .information -->
        
        <?php
        wp_nonce_field('agro-cal-save', 'agro-cal-message');
        submit_button(); ?>  
    </form>
</div><!-- .wrapper -->

