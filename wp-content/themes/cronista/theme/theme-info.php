<?php
// Theme information
function cronista_information_page(){ ?>

    <div class="wrap" id="aletheme-edit-slider-page">
        <h2><?php echo _e('Theme Information','cronista'); ?></h2>
        <div id="optionsframework-metabox" class="metabox-holder">
            <div id="optionsframework" class="postbox">
           		<h3><?php _e('NOMBRE THEME','cronista'); ?></h3>
                <div class="page">
                 	<?php _e('Cronista, plantilla base para el desarrollo de themes wordpress','cronista'); ?>
                </div>
                    
                <h3><?php _e('Informacion General','cronista'); ?></h3>
                <div class="page">
                    <ul>
                        <li><?php _e('WordPress Version','cronista'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
                        <li><?php _e('URL','cronista'); ?>: <b><a href="<?php echo  esc_url(site_url()); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
                        <li><?php _e('Theme Version','cronista'); ?>: <b><?php $lrs_theme = wp_get_theme(); echo $lrs_theme->get( 'Version' ); ?></b></li>
                        <li><?php _e('Theme created date','cronista'); ?>: <b><?php  _e('Septiembre 2015','cronista'); ?></b></li>
                   </ul>
                </div>
              
                <h3><?php _e('Changelog','cronista'); ?></h3>
                <div class="page">
                	<b><i><?php _e('Version 1.0 - Marzo 2016','cronista'); ?></i></b><br />
                    <p class="greycolor">
                        <?php _e('- Final release','cronista'); ?><br />
                    </p>
               		<b><i><?php _e('Version 0.9 - Feberero 2016','cronista'); ?></i></b><br />
                    <p class="greycolor">
                        <?php _e('- Final release','cronista'); ?><br />
                    </p>
                	<b><i><?php _e('Version 0.7 - Feberero 2016','cronista'); ?></i></b><br />
                    <p class="greycolor">
                        <?php _e('- Cambios para adaptar de las normas de WordPress','cronista'); ?><br />
                    </p>
                    <b><i><?php _e('Version 0.1 - Octubre 2015','cronista'); ?></i></b><br />
                    <p class="greycolor">
                       <?php  _e('- Inicio desarrollo theme','cronista'); ?><br />
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
<?php }