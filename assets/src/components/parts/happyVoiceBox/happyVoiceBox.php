<div class='happyVoiceBox'>
    <div class='happyVoiceBox_insideBox_headings'>
        <div class='happyVoiceBox_insideBox_headings_thumb'>
            <img src="<?php if($args['thumb']) echo $args['thumb']?>" alt="sample">
        </div>
        <div class='happyVoiceBox_insideBox_headings_ttl'>
            <h6 class=happyVoiceBox_insideBox_headings_ttl_bigTxt>
                <?php if($args['title']) echo $args['title']?>
            </h6>
            <h6 class='happyVoiceBox_insideBox_headings_ttl_smallTxt'>
                お相手：
                <?php if($args['subTitle']) echo $args['subTitle']?>
            </h6>
        </div>
    </div>
    <p class='happyVoiceBox_mainTxt'>
        <?php if($args['contents']) echo $args['contents']?>
    </p>
</div>