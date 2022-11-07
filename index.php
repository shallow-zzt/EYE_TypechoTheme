<?php

/**
 * 没什么好说的，就一垃圾模板
 * 
 * @package EYE
 * @author Erhecy
 * @version 1.0
 * @link https://www.mmcee.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="mubu" style="background-image: url(<?php echo $this->options->toutulink; ?>)">
    <?php $this->need('nav.php') ?>
    <div class="hbg">
        <div class="main">

            <div class="ht">
                <h1 class="bgt" id="post"><?php $this->options->title(); ?></h1>
                <p><?php echo $this->options->jieshao; ?></p>

            </div>
        </div>
    </div>
</div>

<div id="h">
<div class="main">
            <div class="swiper-container tuijian">
                <div class="swiper-wrapper">
                    

                <?php
                $lunbo = $this->options->tuijianid;
                $hang = explode(",", $lunbo);
                $n = count($hang);
                $html = "";
                $loding = $this->options->lodingimg;
                for ($i = 0; $i < $n; $i++) {
                    $this->widget('Widget_Archive@lunbo' . $i, 'pageSize=1&type=post', 'cid=' . $hang[$i])->to($ji);
                    if ($ji->fields->thumb != "") {
                        $img = $ji->fields->thumb;
                    } else {
                        $img = $this->options->morenimg;
                    }
                    $html = $html . '<div class="swiper-slide"><div class="tcgd"><div class="zt-card"> <a href="' . $ji->permalink . '"><img id="zt-img" src="' . $loding . '" ks-original="' . $img . '" alt="' . $ji->title . '"></a><div class="zt-title"><a href="' . $ji->permalink . '">' . $ji->title . '</a></div></div></div></div>';
                }

                if ($lunbo != "") {
                    echo $html;
                }

                ?>


                </div>

                <div class="swiper-scrollbar"></div>
            </div>




</div>


</div>

<div class="main" id="zt">
    <h2>最新文章</h2>

</div>
<div class="main">
    <div class="row ">

        <?php Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize=10')->to($zuix); ?>
        <?php while ($zuix->next()) : ?>
            <div id="hlist" class="col-l-6">
                <div class="card">
                    <div class="row  full">
                        <div class="col-5 " id="yincang">
                            <a href="<?php $zuix->permalink() ?>">
                                <img id="cimg" src="<?php echo $this->options->lodingimg; ?>" ks-original="
                            <?php if ($zuix->fields->thumb != "") {
                                echo $zuix->fields->thumb;
                            } else {
                                echo  $zuix->options->morenimg;
                            } ?>" alt="<?php $zuix->title() ?>"></a>
                        </div>
                        <div id="wzzishiying" class="col-7">
                            <div class="coo">
                                <div class="title"><a href="<?php $zuix->permalink() ?>"><?php $zuix->title() ?> </a></div>
                                <div class="ccontent"><?php $zuix->excerpt(200, '...'); ?></div>
<div  class="shuju">
                                <small>
                                    <i class="fa fa-user-circle"></i> <?php $zuix->author(); ?> <i class="fa fa-calendar"></i> <?php $zuix->date(); ?> <i class="fa fa-eye" ></i> <?php get_post_view($zuix) ?>

                                </small>
</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>


</div>
<?php $this->need('footer.php'); ?>