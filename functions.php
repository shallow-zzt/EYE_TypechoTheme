<?php
define('Version','1.2.9');

function themeFields($layout) {
    
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('缩略图'), _t(''));
    $layout->addItem($thumb);
	    $wenzhang = new Typecho_Widget_Helper_Form_Element_Select('wenzhang', array(
        'show' => '文章',
        'hide' => '资源'
    ), 'show', _t('类型'), _t(''));
    $layout->addItem($wenzhang); 

	$lianjie = new Typecho_Widget_Helper_Form_Element_Text('lianjie', NULL, NULL, _t('原文链接'), _t('如果填了那将视此文章为【转载】类型如果是文章的话后后面的不用看了'));
    $layout->addItem($lianjie);
	$jiage = new Typecho_Widget_Helper_Form_Element_Text('jiage', NULL, NULL, _t('价格'), _t(''));
    $layout->addItem($jiage);
	$goumai = new Typecho_Widget_Helper_Form_Element_Text('goumai', NULL, NULL, _t('官方下载'), _t(''));
    $layout->addItem($goumai);
	$bendid= new Typecho_Widget_Helper_Form_Element_Text('bendid', NULL, NULL, _t('本地下载'), _t(''));
    $layout->addItem($bendid);
	$beizhu= new Typecho_Widget_Helper_Form_Element_Textarea('beizhu', NULL, NULL, _t('资源备注'), _t(''));
    $layout->addItem($beizhu);
}
function themeConfig($form) {
	$toutulink = new Typecho_Widget_Helper_Form_Element_Text('toutulink', NULL, NULL, _t('大图'), _t('首页大图链接'));
    $form->addInput($toutulink);
    $jieshao = new Typecho_Widget_Helper_Form_Element_Text('jieshao', NULL, NULL, _t('介绍'), _t('也就是首页标题下面的一行小字，您可以写你的座右铭。'));
    $form->addInput($jieshao);
    $tuijianid = new Typecho_Widget_Helper_Form_Element_Text('tuijianid', NULL, NULL, _t('推荐阅读'), _t('输入分类ID【使用英文逗号,分割 例如:1,2,3】在首页偏上位置显示的文字可无限制填写，但是还是少点好（建议不超过4个）不填写则不显示'));
	$form->addInput($tuijianid);
	$morenimg = new Typecho_Widget_Helper_Form_Element_Text('morenimg', NULL, NULL, _t('未定义缩略图时默认显示的图片'), _t('就是你的文章里没有图片就显示一个默认的图片。比如填写https://s2.ax1x.com/2020/03/03/3hJvx1.jpg'));
	$form->addInput($morenimg);
	$lodingimg = new Typecho_Widget_Helper_Form_Element_Text('lodingimg', NULL, NULL, _t('加载时所显示的图片'), _t('填写一个动图(.gif结尾的图片)。比如填写https://s2.ax1x.com/2020/03/04/3oYPJS.gif'));
	$form->addInput($lodingimg);
	$authorimg = new Typecho_Widget_Helper_Form_Element_Text('authorimg', NULL, NULL, _t('站长头像'), _t('填写一个图片链接。'));
	$form->addInput($authorimg);
	$filing = new Typecho_Widget_Helper_Form_Element_Text('filing', NULL, NULL, _t('备案信息'), _t('用于显示网站备案信息，不填则不显示备案信息'));
	$form->addInput($filing);
	$gafiling = new Typecho_Widget_Helper_Form_Element_Text('gafiling', NULL, NULL, _t('公安备案信息'), _t('用于显示网站公安备案信息，不填则不显示公安备案信息'));
	$form->addInput($gafiling);
	$upyuncdn = new Typecho_Widget_Helper_Form_Element_Select('upyuncdn',array(
		'true' => '启用',
		'false' => '不启用'
	),'false',_t('又拍云图标'),_t('在网站下面显示又拍云图标'));
	$form->addInput($upyuncdn->multiMode());
	$fujia = new Typecho_Widget_Helper_Form_Element_Textarea('fujia', NULL, NULL, _t('附加代码'), _t('你可以添加百度统计或者其他统计代码随便你，如果你不知道是啥可以无视'));
	$form->addInput($fujia);
}
function comment_gravatar($comment,$size,$default){
	$mailHash=HashtheMail($comment->mail);
	$url='https://cdn.v2ex.com/gravatar/';if (!empty($comment->mail)) $url.=$mailHash;
	$url.='?s='.$size;$url.='&r='.$rating;$url.='&d='.$default;
	echo '<img class="avatar mdui-chip-icon mdui-color-grey-200" src="'.$url.'" alt="'.$comment->author.'" width="'.$size.'" height="'.$size.'" />';
}
function comment_author($comment){
	if ($comment->url) echo '<a target="_blank" href="',$comment->url,'"',($noFollow?' rel="external nofollow"' : NULL),'>',$comment->author,'</a>'; else echo $comment->author;
}
function post_gravatar($user,$size,$default){
	$mailHash=HashtheMail($user->mail);
	$url='https://cdn.v2ex.com/gravatar/';if (!empty($user->mail)) $url.=$mailHash;
	$url.='?s='.$size;$url.='&r='.$rating;$url.='&d='.$default;
	echo '<img class="avatar mdui-chip-icon mdui-color-grey-200" src="'.$url.'" alt="'.$user->screenName.'" width="'.$size.'" height="'.$size.'" />';
}
//获取头像
function get_co_avatar($moe = NULL){
  $email = strtolower($moe);
  $qq = str_replace('@qq.com','',$email);
  if(strstr($email,"qq.com") && is_numeric($qq) && strlen($qq) < 11 && strlen($qq) > 4){
    $avatar = 'http://q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=100';
  }else{
    $avatar = 'http://res.aquaia.xyz/pics/akarin.jpg';
  }
  echo $avatar;
}
function Table($content){
	return preg_replace('/<\/table>/s','</table></div>',preg_replace('/<table>/s','<div style="overflow-x: auto;"><table class="fill">',$content));
}
function AddImgbox($content){

	return preg_replace('/<img(.*?)src="(.*?)"(.*?)alt="(.*?)">/s','<img${1} src="https://dll.mmcee.cn/ehmcpan/20200307/1/5e6375cb23989CLSUFFbilibili.gif" ks-original="${2}" ${3}alt="${4}">',$content);
}
function RewriteContent($content){
	return Table(AddImgbox($content));
}
function xiaobian($user,$size,$default){
	$mailHash=HashtheMail($user->mail);
	$url='https://cdn.v2ex.com/gravatar/';if (!empty($user->mail)) $url.=$mailHash;
	$url.='?s='.$size;$url.='&r='.$rating;$url.='&d='.$default;
	echo $url;
}
function HashtheMail($mail) {$mailHash = NULL;if (!empty($mail)) $mailHash = md5(strtolower($mail));return $mailHash;}

// 分类搜索
function themeInit($archive)
{
if($archive->request->isPost() && isset($archive->request->ss)){
so($archive);//判断为post请求，并且有参数ss,启用so函数
}}
function so($obj){
$url=$obj->options->index;
if (Helper::options()->rewrite==0){$url=Helper::options()->rootUrl.'/index.php/';}
        /** 处理搜索结果跳转 */
        if (isset($obj->request->ss)) {
            $filterKeywords = $obj->request->filter('search')->ss;//获取搜索词
 $cat = $obj->request->filter('search')->cat;//获取分类id
            /** 跳转到搜索页 */
            if (NULL != $filterKeywords) {
                $obj->response->redirect(Typecho_Router::url('search',
                array('keywords' => urlencode($filterKeywords)),$url)."?cat=".$cat);//设置跳转地址
            }
        }
}
//  获取父评论的姓名
function reply($parent) {
    if ($parent == 0) {
        return '';
    }

    $db = Typecho_Db::get();
    $commentInfo = $db->fetchRow($db->select('author,status,mail')->from('table.comments')->where('coid = ?', $parent));
    $link = '<a class="parent" href="#comment-' . $parent . '">@' . $commentInfo['author'] .  '</a>';
    return $link;
}


//随机文章
function theme_random_posts(){
	$defaults = array(
	'number' => 6,
	'before' => '',
	'after' => '',
	'xformat' => '<a href="{permalink}"><div class="card" style="height: 50px; width: 100%;margin-bottom: 10px;"> <h4 style="text-align: center; line-height:50px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{title}</h4>
	 </div></a>'
	);
	$db = Typecho_Db::get();
	$sql = $db->select()->from('table.contents')
	->where('status = ?','publish')
	->where('type = ?', 'post')
	->limit($defaults['number'])
	->order('RAND()');
	$result = $db->fetchAll($sql);
	echo $defaults['before'];
	foreach($result as $val){
	$val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
	echo str_replace(array('{permalink}', '{title}'),array($val['permalink'], $val['title']), $defaults['xformat']);
	}
	echo $defaults['after'];
	}
//阅读次数
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}