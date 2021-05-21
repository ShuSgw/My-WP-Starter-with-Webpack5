<?php global $dataSource; ?>

<?php get_header(); ?>
<div class='main_contents'>
    <div class='container'>
        <section>
            <div class='imgBox'>
                <img src="<?php echo $dataSource['imagePath'].'sample/test.png';?>" alt="">
            </div>
            <div class='boxWrap boxWrap--happyVoice'>
                <div class='boxWrap_item'>
                    <?php 
                        get_template_part($dataSource['partsPath'].'happyVoiceBox/happyVoiceBox', 
                        null,
                        [
                            'title'=>'test',
                            'subTitle'=>'test',
                            'thumb'=>$dataSource['imagePath'].'sample/test.png',
                            'contents'=>'test',
                        ]); 
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>