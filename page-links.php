<?php

/**
 * 友链页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="mubu" style="background-image: url(
    <?php
    if ($this->fields->thumb != "") {

        echo $this->fields->thumb;
    } else {
        echo  $this->options->toutulink;
    }



    ?>
    
    
    )">
    <?php $this->need('nav.php') ?>
    <div class="hbg">
        <div class="main">

            <div class="ht">
                <h1 class="bgt" id="post"><?php $this->title() ?></h1>
                <p> 我的小可爱都会记录在漂流瓶的纸卷里的呢……~</p>

            </div>
        </div>
    </div>
</div>
<div id="h">
    <div class="main">
        <div class="row full">
            <div class="col-l-12" id="postx">
                <div class="col-l-12" id="poslist">

                    <div class="post-card">
                        <article>
                            <div class="row full">
                                <?php
                                if (class_exists("Links_Plugin")) {
                                    $Links = Links_Plugin::output('
        <div class="col-l-3" id="liks-list">
        
        <div class="liks-card">
        <img src="{image}" ks-original="{image}" alt="{name}">
        <a href="{url}" target="_blank">
        <div style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" >{name}</div>
        </a>
        <div style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{description}</div>
        </div>
       
		</div>
	');
                                }
                                ?>
                            </div>



                        </article>
                    </div>

                </div>


            </div>

        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>