<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://res.aquaia.xyz/pics/frame5.ico" type="image/x-icon" />
    <title>    <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header(); ?>
    <link rel="stylesheet" href="<?php Helper::options()->themeUrl(); ?>css/kico.css">
    <link rel="stylesheet" href="<?php Helper::options()->themeUrl(); ?>css/style.css">

    <script src="<?php Helper::options()->themeUrl(); ?>/js/kico.js"></script>
    <link href="https://cdn.bootcss.com/font-awesome/5.12.1/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/blueimp-md5@2.10.0/js/md5.min.js"></script>
    <link rel="stylesheet" href="<?php Helper::options()->themeUrl(); ?>/css/nav.css">
    <link rel="stylesheet" href="<?php Helper::options()->themeUrl(); ?>css/swiper.min.css" />
    <script src="<?php Helper::options()->themeUrl(); ?>js/swiper.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
    <script src="<?php Helper::options()->themeUrl(); ?>/js/jquery.cbFlyout.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

</style>
</head>
<body>

<button class="btn yellow small" onclick="topFunction()" id="myBtn" title="回顶部">TOP</button>