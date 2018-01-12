<?php get_header(); ?>
index
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article>
        <h2><?php the_title();?></h2>
        <div class="description">
            <?php the_content('続きを読む'); ?>
            <?php wp_link_pages(); ?>
        </div>
        <div class="ft">
            <div class="date"><?php the_time('Y.m.d'); ?></div>
        </div>
        <?php edit_post_link(null, '<div class="edit-link">', '</div>'); ?>
    </article>
<?php endwhile; ?>
    <?php
        $pagination_options = [
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        ];
        the_posts_pagination($pagination_options);
    ;?>
<?php else: ?>
    <div>
        <p>見つかりませんでした。</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
