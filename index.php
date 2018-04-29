<?php
include 'includes/Helpers.php';
$test_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if($test_url != $config['base_url'].'/' xor $test_url != $config['base_url'].'/index.php'){} else {
  $config['base_url'] = str_replace('/index.php', '/', $test_url);
  trigger_error($lang['url_not_configured']);
}

$art_array = array_slice(scandir('articles'), 2);
// Only valid articles
$articles = artTrueArray($art_array);

foreach ($articles as $key => $art) {
  $articles[$key] = artInfo($key);
}
// Sort Desc, new-old
$articles = timeSort($articles);

// Set meta
$page = array(
  'title' => $config['blog_name'] . ' &nbsp; • &nbsp; ' . $config['blog_desc'],
  'desc' => $config['blog_desc'],
  'type' => 'website',
  'cover' => $config['base_url'] . '/assets/img/static/bg.jpg'
);

view('index.php');
