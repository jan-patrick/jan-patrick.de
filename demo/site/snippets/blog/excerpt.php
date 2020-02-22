<article class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
    <header>
      <figure class="img" style="--w: 16; --h:9">
        <?php if ($cover = $article->cover()): ?>
        <?= $cover->crop(320, 180) ?>
        <?php endif ?>
      </figure>

      <h2 class="blog-article-excerpt-title"><?= $article->title() ?></h2>
      <time class="blog-article-excerpt-date" datetime="<?= $article->date('c') ?>"><?= $article->date() ?></time>
    </header>
    <?php if (($excerpt ?? true) !== false): ?>
    <div class="blog-article-excerpt-text">
      <?= $article->text()->blocks()->excerpt(280) ?>
    </div>
    <?php endif ?>
  </a>
</article>
