<div id="topic-tags">

    <p><?php _e('Tags:'); ?></p>

    <?php if ( bb_get_topic_tags() ) : ?>

        <?php bb_list_tags(); ?>

    <?php else : // bb_get_topic_tags ?>

        <p><?php printf(__('No <a href="%s">tags</a> yet.'), bb_get_tag_page_link() ); ?></p>

    <?php endif; // bb_get_topic_tags ?>

    <?php tag_form(); ?>

</div><!-- /#topics-tags -->