<?php
/*
Template Name: ABOUT
*/
get_header();
?>

<div class="company-page">
  <div class="inner" style="text-align:center; padding:60px 20px;">

    <!-- メインタイトル -->
    <h1 style="color:#2E7D32; font-size:42px; margin-bottom:20px;">運営会社</h1>

    <!-- 会社説明文 -->
    <p style="color:#555; font-size:16px; margin-bottom:30px; max-width:600px; margin-left:auto; margin-right:auto;">
      当サイトは、教育や学習サポートをより身近に感じてもらうために運営されています。<br>
      私たちは「学ぶ楽しさ」を大切に、日々コンテンツを育てています。<br>
      また、最終的にはこのサイトにあるプリントをきちんとやりこめば大学院までイケる！を目指しています。<br>
    </p>

    <!-- 会社情報テーブル -->
    <table style="margin:0 auto 40px auto; border-collapse: collapse; font-size:16px; color:#333;">
      <tr>
        <th style="text-align:left; padding:8px 12px; background-color:#E8F5E9;">会社名</th>
        <td style="padding:8px 12px;">サイマンテクノロジー</td>
      </tr>
      <tr>
        <th style="text-align:left; padding:8px 12px; background-color:#F1F8E9;">所在地</th>
        <td style="padding:8px 12px;">千葉県柏市</td>
      </tr>
      <tr>
        <th style="text-align:left; padding:8px 12px; background-color:#E8F5E9;">設立</th>
        <td style="padding:8px 12px;">2024年3月1日</td>
      </tr>
      <tr>
        <th style="text-align:left; padding:8px 12px; background-color:#F1F8E9;">代表者</th>
        <td style="padding:8px 12px;">横江 誼衡</td>
      </tr>
    </table>

    <!-- イラスト -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/SciMoun-logo.png" alt="会社イメージ" style="max-width:300px; margin-bottom:30px;">

    <!-- メッセージボックス風 -->
    <div class="highlight" style="margin-top:30px; width:80%; max-width:400px; margin-left:auto; margin-right:auto; background-color:#E8F5E9; padding:15px; border-radius:10px; font-weight:bold;">
      🌱 学びを育てる森のような会社です 🌱
    </div>

  </div>
</div>

<?php get_footer(); ?>