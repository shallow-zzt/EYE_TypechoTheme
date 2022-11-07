<div class="show-on-mobile">
<div class="col-l-4" id="postx">
                <div class="col-l-12" id="poslist">
                    <div class="post-card" id="zuozhe">

                        <img class="zuozhe-touxiang" src="<?php echo $this->options->lodingimg; ?>" ks-original="<?php echo $this->options->authorimg; ?>" alt="">
                        <h2 style="text-align: center; line-height:50px"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> </h2>
                        <p><?php echo $this->options->jieshao; ?></p>
                    </div>
                </div>
                <?php if ($this->fields->wenzhang == 'hide') : ?>
                    <div class="col-l-12" id="poslist">
                        <div class="post-card">
                            <article>
                                <div style="overflow-x: auto;">
                                    <table class="fill">
                                        <thead>
                                            <tr>
                                                <th>原资源链接</th>
                                                <th>
                                                    <?php if ($this->fields->lianjie == '') : ?>

                                                        <a style="color:#fff; " href="<?php $this->permalink() ?>">
                                                            <?php $this->permalink() ?>
                                                        </a>
                                                    <?php else : ?>
                                                        <a style="color:#fff; " target="_blank" href="<?php $this->fields->lianjie(); ?> ">
                                                            <?php $this->fields->lianjie(); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <th>标签/关键字</th>
                                                <th><?php $this->tags(',', true, '无'); ?></th>
                                            </tr>
                                            <tr>
                                                <th>分类</th>
                                                <th><?php $this->category(','); ?></th>
                                            </tr>
                                            <tr>
                                                <td>价格</td>
                                                <td>
                                                    <?php $this->fields->jiage(); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>下载</td>
                                                <td>

                                                    <?php
                                                    $db = Typecho_Db::get();
                                                    $sql = $db->select()->from('table.comments')
                                                        ->where('cid = ?', $this->cid)
                                                        ->where('mail = ?', $this->remember('mail', true))
                                                        ->limit(1);

                                                    $result = $db->fetchAll($sql);
                                                    if ($this->user->hasLogin() || $result) {
                                                        echo "<button class='btn blue'><a target='_blank' style='color: #fff;'  href='";
                                                        $this->fields->goumai();
                                                        echo "' >官方下载<b>";
                                                        echo " </b></a></button>";


                                                        echo "  <button class='btn green'>";
                                                        echo "<a target='_blank' style='color: #fff;' href='";
                                                        $this->fields->bendid();
                                                        echo " '>本地下载</a></button>";
                                                    } else {
                                                        echo "<a  href='#comments' style='color: #fff;'><button class='btn red'>需要评论刷新后获取链接</button></a>";
                                                    }

                                                    ?>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <h4 style="text-align: center; line-height:15px">备注</h4>
                                <blockquote>
                                    <p><?php $this->fields->beizhu(); ?> |推荐使用官方下载 本地下载可能不会经常更新且版本不全</p>
                                </blockquote>

                            </article>
                        </div>
                    </div>
                <?php endif; ?>




                <div class="col-l-12" id="poslist">
                    <div class="post-card">

                        <h3 style="text-align: center; line-height:50px"><i class="fa fa-book" aria-hidden="true"></i>归档</h3>
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年n月')->parse('
                    <a href="{permalink}">
                    <div class="card" style="height: 50px; width: 100%;margin-bottom: 10px;">
                    <h4 style="text-align: center; line-height:50px">{date}</h4>
                </div>
					</a>
				'); ?>

                    </div>
                </div>
		<div class="col-l-12" id="poslist">
                    <div class="post-card">

                        <h3 style="text-align: center; line-height:50px"><i class="fa fa-bar-chart" aria-hidden="true"></i>浏览统计</h3>
<script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=5ijmh5orm2g&amp;m=7&amp;c=ff0000&amp;cr1=ffffff&amp;f=comic_sans_ms&amp;l=0" async="async"></script>
				

                    </div>
                </div>




            </div>
   </div>      