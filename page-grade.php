<?php
/*
Template Name: 学年ページ
*/
get_header();
?>

<main class="grade-page">
  <div class="inner" style="padding:40px 20px;">

    <h1 style="font-size:36px; color:#2E7D32;">
      <?php the_title(); ?>
    </h1>

    <p style="margin:20px 0; color:#555;">
      <?php the_content(); ?>
    </p>

    <hr style="margin:40px 0;">

    <h2>この学年のプリント</h2>

    <ul>
      <?php
      // 今はダミー。あとで「プリント投稿」に進化させる
      ?>
      <li>たし算プリント</li>
      <li>ひき算プリント</li>
      <li>文章題プリント</li>
    </ul>

  </div>
</main>

<?php get_footer(); ?>