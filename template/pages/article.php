<?php global $article, $art_info, $config, $lang; ?>

<?php if(isset($art_info['cover'])): ?>
  <header class="cover-header parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <h1 class="center white-text"><?= $art_info['title'] ?></h1>
      <address><a href="https://t.me/<?php echo $art_info['author']; ?>">@<?php echo $art_info['author']; ?></a><?=' &nbsp; • &nbsp; '.strftime("%d %B %Y", $art_info['timestamp']) ?></address>
    </div>
    <div class="parallax"><img src="<?= $page['cover'] ?>"></div>
  </header>
  <div class="container row">
    <div class="article-main">
      <article>
        <?= $article ?>
        <br>
      </article>
    </div>
  </div>

<?php else: ?>
  <div class="container row">
    <div class="article-main">
      <header class="raw-header">
        <h1><?= $art_info['title'] ?></h1>
        <address><a href="https://t.me/<?php echo $art_info['author']; ?>">@<?php echo $art_info['author']; ?></a><?=' &nbsp; • &nbsp; '.strftime("%d %B %Y", $art_info['timestamp']) ?></address>
      </header>
      <article>
        <?= $article ?>
        <br>
      </article>
    </div>
  </div>
<?php endif; ?>
