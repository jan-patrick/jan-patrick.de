<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<header class="social">
  <h1><?= $page->title() ?></h1>
  <section>
        <h2>On the web</h2>
        <div class="text">
          <ul>
            <?php foreach ($page->social()->toStructure() as $social): ?>
            <li><?= html::a($social->url(), $social->platform()) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </section>
</header>
