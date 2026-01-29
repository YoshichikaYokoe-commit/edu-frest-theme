<?php get_header(); ?>

<div class="site-top">
  <div class="inner" style="text-align:center; padding:80px 20px;">

    <!-- メインタイトル -->
    <h1 style="color:#2E7D32; font-size:48px; margin-bottom:10px;">404</h1>
    <h2 style="color:#388E3C; font-size:28px; margin-bottom:30px;">
      ページはまだ成長中です！
    </h2>

    <!-- 説明文 -->
    <p style="color:#555; font-size:16px; margin-bottom:30px;">
      このページはまだ植樹中です 🌱<br>
      URLが間違っているか、ページがまだ成長していない可能性があります。
    </p>

    <!-- 森っぽいイラスト（任意） -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/fight-removebg-preview.png" alt="植樹中" style="max-width:300px; margin-bottom:30px;">


    <!-- トップページリンク -->
    <p>
      <a href="<?php echo home_url(); ?>" style="color:#2E7D32; text-decoration:underline; font-weight:bold;">
        トップページに戻る
      </a>
    </p>

    <!-- 注目ボックス風 -->
    <div class="highlight" style="margin-top:40px; width:80%; max-width:400px; margin-left:auto; margin-right:auto;">
      🌳 森を育てるには時間が必要です 🌳
    </div>

  </div>
</div>

<?php get_footer(); ?>