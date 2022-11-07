<?php function threadedComments($comments, $options)
{
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

    <li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
                                                                if ($comments->levels > 0) {
                                                                    echo ' comment-child';
                                                                    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
                                                                } else {
                                                                    echo ' comment-parent';
                                                                }
                                                                $comments->alt(' comment-odd', ' comment-even');
                                                                echo $commentClass;
                                                                ?>">
        <div id="<?php $comments->theId(); ?>">
            <div id="comments">
                <div id="commentauthor">
                    <img class="commentimg"  <?php if ($comments->authorId == $comments->ownerId) {echo "style=\"border: 5px solid rgb(103, 179, 231);\"";}?> src="<?php if ($comments->authorId == $comments->ownerId) {echo "http://res.aquaia.xyz/pics/head.png";} 
                    else{get_co_avatar($comments->mail);}?>" ks-original="<?php if ($comments->authorId == $comments->ownerId) {echo "http://res.aquaia.xyz/pics/head.png";} else{get_co_avatar( $comments->mail);} ?>" alt="">
                    <cite class="fn"><?php $comments->author(); ?></cite>



                </div>
                <div>

                    <div class="biaoshi">
                        <?php if ($comments->authorId == $comments->ownerId) { ?>

                            <em>水母</em>
                        <?php } else { ?>

                            <em style='background:#A8DADF;'>纸卷</em>
                        <?php } ?>
                    </div>

                    <div class="commentcont">
                        <?php $comments->content(); ?>

                        <div><a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a> <?php $comments->reply(); ?></div>
                    </div>


                </div>

            </div>

        </div>
        <?php if ($comments->children) { ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>



<?php } ?>
<div id="comments" class="comments-area">


    <?php $this->comments()->to($comments); ?>

    <?php if ($this->allow('comment')) : ?>

        <div class="comment-respond" id="<?php $this->respondId(); ?>">
            <div class="col-l-12" id="poslist">

                <div class="post-card">

                    <fieldset>
                        <h3 id="reply-title" class="comment-reply-title">
                            发表评论
                            <small>
                                <?php $comments->cancelReply('<span id="cancel-comment-reply-link">取消回复</span>'); ?>
                            </small>
                        </h3>
                        <form method="post" οnsubmit="return check(this)" action="<?php $this->commentUrl() ?>" id="commentform" class="comment-form ks-form">
                            <?php if ($this->user->hasLogin()) : ?>
                                <p>您以<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>的身份登录。<a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('登出？'); ?></a></p>
                                <p class="comment-form-comment">
                                    <label for="comment">评论</label>
                                    <textarea id="comment" name="text" cols="45" rows="8" aria-required="true"><?php $this->remember('text'); ?></textarea>
                                </p>
                                <p class="form-submit">
                                    <!--<p style="float:right;"><?php //Captcha_Plugin::output(); 
                                                                ?></p>-->
                                    <input class="btn yellow small" name="submit" type="submit" id="submit" value="发表评论">
                                </p>
                            <?php else : ?>
                                <div class="row">
                                    <div class="col-l-6" style="padding: 20px;">
                                        <p class="comment-form-author">
                                            <label for="author">name <span class="required">*</span></label>
                                            <input id="author" name="author" type="text" value="<?php $this->remember('author'); ?>" aria-required="true">
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">e-mail<?php if ($this->options->commentsRequireMail) : ?><span class="required">*</span><?php endif; ?></label>
                                            <input id="email" name="mail" type="text" value="<?php $this->remember('mail'); ?>" aria-required="true">
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">website<?php if ($this->options->commentsRequireURL) : ?><span class="required">*</span><?php endif; ?></label>
                                            <input id="url" name="url" type="text" value="<?php $this->remember('url'); ?>">
                                        </p>
                                    </div>
                                    <div class="col-l-6" style="padding: 20px;">
                                        <p class="comment-form-comment">
                                            <label for="comment">评论</label>
                                            <textarea id="comment" name="text" cols="45" rows="8" aria-required="true"><?php $this->remember('text'); ?></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <!--<p style="float:right;"><?php //Captcha_Plugin::output(); 
                                                                        ?></p>-->
                                            <input class="btn yellow small" name="submit" type="submit" id="submit" value="发表评论">
                                        </p>
                                    </div>
                                </div>


                            <?php endif; ?>


                        </form>
                    </fieldset>
                </div>
            </div>
        </div>

        <?php if ($comments->have()) : ?>
            <div class="col-l-12" id="poslist">
                <h3 class="comments-title">
                    《<span><?php $this->archiveTitle('', '', ''); ?></span>》上<?php $this->commentsNum(_t('暂无评论'), _t('有一条评论'), _t('有 %d 条评论')); ?>
                </h3>
                <div class="post-card">
                    <?php $comments->listComments(); ?>
                    <div class="lol-l-12">
                        <?php $comments->pageNav('前一页', '后一页', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'juzhong commentnext')); ?>

                    </div>
                </div>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <div class="col-l-12" id="poslist">
                <?php _e('<div class="post-card juzhong">
                    <h2>评论功能已经关闭了喵~</h2>
                </div>'); ?>
            </div>
        <?php endif; ?>
            </div>
