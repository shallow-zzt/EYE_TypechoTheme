# EYE_TypechoTheme
制作的第一个比较完整的Typecho主题，虽然说很菜。

# EYE
为啥起这个名字？其实这个名字是群友起的……起的也是很随便，因为在制作的时候测试用的缩略图是

![logo200x200.jpg][1]

所以就叫`EYE`了

# 功能

 - 懒加载
 - 图片灯箱
 - 资源评论后下载
 - 平滑滚动

之后好像没啥可说的了，直接看图把

# 食用教程
这是一个`Typecho`的主题
你需要下载后解压后放在`usr/themes`目录下
然后在后台启用主题即可

新建搜索页面
在`撰写>创建页面`里进行创建
自定义模板选择`搜索页面`链接名要写成soso。这里建议把公开度选为隐藏（当然其他的也可以，前提是你会改）

### 启用后404？
你需要在模板的`index.php`文件下修改分类ID,标题个跳转链接
步骤1
找到`<h2 class="flbt">Bukkit <a href="https://www.mmcee.cn/bukkit/" class="juyou">更多</a> </h2>`
把Bukkit换成你想展示分栏的分类标题 把`https://www.mmcee.cn/bukkit/`换成这个分类的链接

步骤2
找到`<?php $this->widget('Widget_Archive@index', 'pageSize=4&type=category', 'mid=33')->to($list1); ?>`
把`mid=33`里的33换成你想展示的分类ID

照做后还是这样？
因为后面还有个类似的按照这样的方式改就行

~~至于为啥这么多要改的，因为我懒所以就…… 嘛大家多多动手也好233~~

# 截图

![EYE1.png][2]

首页

![首页][3]

文章页

![文章页][4]


# 用到的资源

[Kico Style][5]

[swiper][6]

jquery.cbFlyout

[jquery][7]


  [1]: https://dll.mmcee.cn/typecho/uploads/2020/03/2622403560.jpg
  [2]: https://dll.mmcee.cn/typecho/uploads/2020/03/2000398634.png
  [3]: https://dll.mmcee.cn/typecho/uploads/2020/03/3781857118.png
  [4]: https://dll.mmcee.cn/typecho/uploads/2020/03/1360944093.png
  [5]: https://works.paugram.com/style/
  [6]: https://www.swiper.com.cn/
  [7]: https://jquery.com/
