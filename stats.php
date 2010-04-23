<?php bb_get_header(); ?>

    <div class="bbcrumb">
        <a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a> &raquo; 
        <?php _e('Statistics'); ?>
    </div><!-- /.bbcrumb -->

    <dl role="main">
    	<dt><?php _e('Registered Users'); ?></dt>
    	<dd><strong><?php total_users(); ?></strong></dd>
    	<dt><?php _e('Posts'); ?></dt>
    	<dd><strong><?php total_posts(); ?></strong></dd>
    </dl>

    <?php if ($popular) : ?>
        <h3><?php _e('Most Popular Topics'); ?></h3>
        <ol>
            <?php foreach ($popular as $topic) : ?>
                <li><?php bb_topic_labels(); ?> <a href="<?php topic_link(); ?>"><?php topic_title(); ?></a> &#8212; <?php topic_posts(); ?> posts</li>
            <?php endforeach; //$popular as $topic ?>

            <?php endif; //$popular ?>
        </ol>
        
<?php bb_get_footer(); ?>