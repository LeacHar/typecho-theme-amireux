<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($this->is('index')): ?>
        <meta property="og:url" content="<?php $this->options->siteUrl(); ?>"/>
        <meta property="og:type" content="blog"/>
        <meta property="og:title" content="<?php $this->options->title() ?>"/>
        <meta property="og:image" content="<?php $this->options->authorImg() ?>"/>
        <meta property="og:author" content="<?php $this->author() ?>"/>
        <meta property="og:site_name" content="<?php $this->options->title() ?>"/>
        <meta property="og:description" content="<?php $this->options->description() ?>"/>
        <meta property="og:locale:alternate" content="zh_CN"/>
    <?php endif; ?>
    <?php if ($this->is('post') || $this->is('page')) : ?>
        <meta property="og:type" content="blog"/>
        <meta property="og:image" content="<?php echo showThumbnail($this) ?>"/>
        <meta property="article:published_time" content="<?php $this->date('c'); ?>"/>
        <meta property="article:release_date" content="<?php $this->date('c'); ?>"/>
        <meta property="article:author" content="<?php $this->author(); ?>"/>
        <meta property="article:published_first"
              content="<?php $this->options->title() ?>, <?php $this->permalink() ?>"/>
        <meta property="og:title" content="<?php $this->title() ?>"/>
        <meta property="og:url" content="<?php $this->permalink() ?>"/>
        <meta property="og:site_name" content="<?php $this->options->title(); ?>"/>
        <meta property="og:description" content="<?php $this->description(); ?>"/>
        <meta property="og:locale:alternate" content="zh_CN"/>
    <?php endif; ?>
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplelightbox@2.8.0/dist/simple-lightbox.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/style.css'); ?>">
    <?php if ($this->fields->keywords || $this->fields->desc) : ?>
        <?php $this->header('rss1=&rss2=&atom&generator=&xmlrpc=&wlw=&template=keywords=' . $this->fields->keywords . '&description=' . $this->fields->desc); ?>
    <?php else : ?>
        <?php $this->header('rss1=&rss2=&atom&generator=&xmlrpc=&wlw=&template='); ?>
    <?php endif; ?>
    <style type="text/css">
        <?php $this->options->customCSS() ?>
    </style>
</head>
