<?php get_header(); ?>
<div class='main_contents jq_page_template jq_page_template_blog'>
    <section class='single_sec'>
        <div class='container'>
            <main class='blog_main'>
                <div class='jq_page_template_blog_date'>
                    <?php echo get_the_date(); ?>
                </div>
                <h1 class='jq_page_template_blog_ttl'>
                    <?php the_title();?>
                </h1>
                <?php the_content();?>
            </main>
        </div>
    </section>
</div>
<?php get_footer();?>