<?php

/**
 * 吐槽页面
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
                <p> 有什么想吐槽的尽管来吧QAQ~~~~</p>

            </div>
        </div>
    </div>
</div>
<div id="h">
    <div class="main">
        <div class="row full">
            <div class="col-l-12" id="postx">
                <div class="col-l-12" id="poslist">

  <?php $this->need('comments.php'); ?>

                </div>



              
            </div>

        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>