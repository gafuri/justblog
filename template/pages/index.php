<?php global $articles, $config; ?>
<div class="blog">
	<div class="container row">
		<h1 class="blog-title"><?= $config['blog_name'] ?></h1>
		<h5 class="blog-description"><?= $config['blog_desc'] ?></h5>
	</div>
</div>
<?php foreach ($articles as $key => $art) : ?>
<div class="container row">
<div class="article-main">
<div class="raw-header">
  <a href='article/<?=substr($key, 0, -3)?>'>
      <h1><?=$art['title']?></h1>
      	<address class="address-index">
      		<a href="https://t.me/<?php echo $art['author']; ?>">@<?php echo $art['author']; ?></a><?=' &nbsp; • &nbsp; '.strftime("%d %B %Y", $art['timestamp']) ?>
      	</address>
      <!-- <?=$art['desc']?> -->
    </div>
  </a>
</div></div></div>
<?php endforeach; ?>
