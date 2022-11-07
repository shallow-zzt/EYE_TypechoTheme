
<div class="col-l-4" id="postxs">
                <div class="col-l-12" id="poslist">
                    <div class="post-card" id="zuozhe">

                        <img class="zuozhe-touxiang" src="<?php echo $this->options->lodingimg; ?>" ks-original="<?php echo $this->options->authorimg; ?>" alt="">
                        <h2 style="text-align: center; line-height:50px"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> </h2>
                        <p><?php echo $this->options->jieshao; ?></p>
                    </div>
                </div>
                <div class="col-l-12" id="poslist">
                    <div class="post-card">

                        <h3 style="text-align: center; line-height:50px"><i class="fa fa-chart" aria-hidden="true"></i>浏览统计</h3>
                <script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=5ijmh5orm2g&amp;m=7&amp;c=ff0000&amp;cr1=ffffff&amp;f=comic_sans_ms&amp;l=0" async="async"></script>
				

                    </div>
                </div>
                <div class="col-l-12" id="poslist">
                    <div class="post-card" id="zuozhe">
                    <h3 style="text-align: center; line-height:50px"><i class="fa fa-random" aria-hidden="true"></i>随机推荐</h3>
                    <?php theme_random_posts();?>
                    </div>
                </div>





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
                        
                        <h3 style="text-align: center; line-height:50px"><i class="fa fa-link" aria-hidden="true"></i>小纸卷</h3>

                                <?php
                                if (class_exists("Links_Plugin")) {
                                    $Links = Links_Plugin::output('
                <a href="{url}" target="_blank">
                <div class="card" style="height: 50px; width: 100%;margin-bottom: 10px;">
                  <h4 style="text-align: center; line-height:50px">
                  <img class="sidelink-touxiang" src="{image}" ks-original="{image}" alt="{name}">
                {name}</h4>
                </div>
                </a>', 5);
                
                }
             
?>				

                    </div>
                </div>



            </div>
         