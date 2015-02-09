<?php
/**
 * Template will use for load all the information about
 * the parts will conform the website for change the
 * values and can handled the values or make anymore. Also
 * load the libraries in javascript or load the css main styles
 *
 * @createdAt May 20, 2013
 * @author blackfoxgdl <ruben.alonso21@gmail.com>
 **/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
                
        <?php echo link_tag('statics/css/bootstrap/css/bootstrap.css'); ?>
        <?php echo link_tag('statics/css/rhinocss.css'); ?>
        
        <script type="text/javascript" src="<?php echo base_url().'statics/js/libraries/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'statics/js/libraries/confirm.jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'statics/css/bootstrap/js/bootstrap.js'; ?>"></script>
        
         
        <?php if(isset($included_js)): ?>
            <?php foreach($included_js as $files_js): ?>
                <script type="text/javascript" src="<?php echo base_url().$files_js; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </head>
    <body>
        <aside>
            <?php if(isset($aside)): ?>
                <?php echo $aside; ?>
            <?php endif; ?>
        </aside>
        <section>
            <?php if(isset($content)): ?>
                <?php echo $content; ?>
            <?php endif; ?>
        </section>
    </body>
</html>
