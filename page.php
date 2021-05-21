<?php get_header(); ?>
<div class='main_contents'>
    <section class='single_sec single_1sec'>
        <div class='container'>
            <h1 class='page_heading'>
                <span class='page_heading_txt page_heading_txt--blueLine'>
                    <?php the_title();?>
                </span>
            </h1>
            <div class='meetingChooseDateTopTxt myWysiwyg'>
                <?php the_content()?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();