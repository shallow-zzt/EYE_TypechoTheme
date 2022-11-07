<?php

/**
 * 搜索页面
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
        echo $this->options->toutulink;
    }



    ?>
    
    
    )">
    <?php $this->need('nav.php') ?>
    <div class="hbg">
        <div class="main">

            <div class="ht">
                <h1 class="bgt" id="post"><?php $this->title() ?></h1>
                <p> 也许标签和分类也能帮你快速找到你想要的哦！</p>

            </div>
        </div>
    </div>
</div>
<div id="h">
    <div class="main">
        <div class="row full">
            <div class="col-l-12" id="postx">
                <div class="col-l-12" id="poslist">

                    <div class="post-card" style="text-align: center;">
                        <article>
                            <h1 style="text-align: center; line-height:50px">分类搜索</h1>
                            <form class="ks-form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                                <select class="mdui-select" name="cat">
                                    <option value="0" selected>全部</option>

                                </select>
                                <input style="width: 60%;"  type="text" name="ss" placeholder="输入关键字以回车开始搜索">
                            </form>



                            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=name&ignoreZeroCount=1&desc=0')->to($tag);
                            $total = 0;
                            $max = 0; ?>
                            <?php while ($tag->next()) {
                                $total++;
                                if ($tag->count > $max) $max = $tag->count;
                            } ?>
                            <div>
                                <h1 style="text-align: center; line-height:50px">TAG/标签</h1> 共计<?php echo $total; ?>个标签
                            </div>
                    
                    <div style="line-height: 30px;">
                        <?php while ($tag->next()) : ?>
                            <a href="<?php $tag->permalink(); ?>" class="tag-card" style="    margin-bottom: 2em; padding: 5px;font-size: <?php echo round($tag->count/$max*1+1,2); ?>em;color: #<?php $color = sprintf('%02s', base_convert(round(119 - 85 * $tag->count / $max), 10, 16));
                                                                                                                                                                                echo $color . $color . $color; ?>"><?php $tag->name(); ?></a>
                        <?php endwhile; ?>
                    </div>
                        </article>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>