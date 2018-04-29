<?php
include 'includes/Helpers.php';

if(isset($_GET['a'])) {
  $art_name = str_replace('/article/', '', $_GET['a']);

  if(file_exists('articles/'.$art_name.'.md')) {
    $article = file_get_contents('articles/'.$art_name.'.md');
    // Remove meta lines from .md file
    $article = explode("---", $article,2)[1];
    // Parse MD
    $article = mdParser($article);
    // Set title
    $art_info = artInfo($art_name.'.md');
    $app_title = $art_info['title'].' • '. $config['blog_name'];
    $page = array(
      'title' => $art_info['title'].' • '. $config['blog_name'],
      'desc' => $art_info['desc'],
      'type' => 'article',
    );

    if(isset($art_info['cover'])) {
      $page['cover'] = $config['base_url'] . '/' . $art_info['cover'];
    } else {
      $page['cover'] = $config['base_url'] . '/assets/img/static/bg.jpg';
    }

    view('article.php');
  } else {
    trigger_error($lang['no_article_found']);
  }
} else {
  redirect($config['base_url']);
}
