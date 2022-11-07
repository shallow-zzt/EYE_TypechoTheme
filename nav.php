	<div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>

	<div class="layout-right-content">

		<header class="the-header">
			<div class="main">
				<div class="navbar container">

					<!-- Trigger -->
					<a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="javascript:;">
						<span class="icon-bar btn-flyout-trigger"></span>
						<span class="icon-bar btn-flyout-trigger"></span>
						<span class="icon-bar btn-flyout-trigger"></span>
					</a>

					<!-- Structure -->
					<nav class="the-nav nav-collapse clearfix">
						<ul class="nav nav-pill pull-left" style="font-family:'lolita','Microsoft YaHei',tahoma,arial,'Hiragino Sans GB';">
							<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i>首页</a></li>
							<li><a href="https://game.aquarium.moe"><i class="fas fa-dice-six"></i>小游戏站</a></li>
							<li class="dropdown">
								<a href="javascript:void(0);"><i class="fas fa-tools"></i>小工具 <b class="caret"></b></a>
								<ul class="subnav">
                                        <li><a href="http://random.aquarium.moe">随机数生成器</a></li> 
								</ul>
							</li>							
								<?php $this->widget('Widget_Metas_Category_List')->to($category);
								$last = -1; ?>

								<?php while ($category->next()) : ?>
									<?php if ($category->levels == 0) { ?>
										<?php if ($last != -1) { ?>
							</ul>
							</li>
						<?php } ?>
						<li class="dropdown">
							<a href="javascript:void(0);" ><?php $category->name(); ?> <b class="caret"></b></a>
							<ul class="subnav">

								<li><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>


							<?php } else { ?>

								<li><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></li>

							<?php } ?>
							<?php $last = $category->levels; ?>
						<?php endwhile; ?>
							</ul>
						
						</li>




						</ul>
						<ul class="nav nav-pill pull-right" style="font-family:'lolita','Microsoft YaHei',tahoma,arial,'Hiragino Sans GB';">

                <li><a href="/index.php/search.html"><i class="fa fa-search"></i>搜索</a></li>
                <li><a href="/admin/login.php"><i class="fa fa-sign-in-alt"></i>登录</a></li>                
                <li><a href="/index.php/msg.html"><i class="fa fa-edit"></i>留言板</a></li>
                <li><a href="/index.php/links.html"><i class="fa fa-link" ></i>小纸卷</a></li>                
							<li class="dropdown">
								<a href="javascript:void(0);"><i class="fas fa-info-circle"></i>更多 <b class="caret"></b></a>
								<ul class="subnav">
                                        <li><a href="/index.php/aboutme.html">关于</a></li> 
                                        <li><a href="/index.php/donate.html">投食</a></li>  
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


	</div>
