<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
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
                <p> <i class="fa fa-user-circle"></i> <?php $this->author(); ?> <i class="fa fa-calendar"></i> <?php $this->date(); ?> <i class="fa fa-hashtag"></i> <?php $this->tags(',', false, 'none'); ?></p>

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
                            <?php echo RewriteContent($this->content); ?> </article>
                    </div>

                </div>
                <?php $this->need('comments.php'); ?>

        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>