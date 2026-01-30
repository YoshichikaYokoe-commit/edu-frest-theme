<?php
/*
Template Name: FAQ
*/
get_header();
?>

<div class="faq-page">
  <div class="inner" style="text-align:center; padding:60px 20px;">

    <!-- メインタイトル -->
    <h1 style="color:#2E7D32; font-size:42px; margin-bottom:20px;">よくある質問</h1>

    <!-- 説明文 -->
    <p style="color:#555; font-size:16px; margin-bottom:30px; max-width:600px; margin-left:auto; margin-right:auto;">
      利用者の皆さまからよくいただく質問をまとめました。<br>
      困ったときはこちらを参考にしてください。
    </p>

    <!-- FAQリスト -->
    <dl style="text-align:left; max-width:700px; margin:0 auto; font-size:16px; color:#333;">
      <dt style="background-color:#E8F5E9; padding:10px 15px; border-radius:5px; margin-top:10px; font-weight:bold;">
        プリントは印刷できますか？
      </dt>
      <dd style="padding:10px 15px; border-left:4px solid #2E7D32; margin-bottom:10px;">
        はい、PDFをダウンロードして印刷してお使いください。
      </dd>

      <dt style="background-color:#F1F8E9; padding:10px 15px; border-radius:5px; margin-top:10px; font-weight:bold;">
        会員登録は必要ですか？
      </dt>
      <dd style="padding:10px 15px; border-left:4px solid #2E7D32; margin-bottom:10px;">
        いいえ、登録不要で無料で利用できます。
      </dd>

      <dt style="background-color:#E8F5E9; padding:10px 15px; border-radius:5px; margin-top:10px; font-weight:bold;">
        利用料はかかりますか？
      </dt>
      <dd style="padding:10px 15px; border-left:4px solid #2E7D32; margin-bottom:10px;">
        基本的には無料でご利用いただけます。一部コンテンツは有料になる場合があります。
      </dd>
    </dl>

    <!-- イラスト -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/teaching-owl.png" alt="FAQイメージ" style="max-width:300px; margin:30px 0;">

    <!-- メッセージボックス風 -->
    <div class="highlight" style="margin-top:20px; width:80%; max-width:400px; margin-left:auto; margin-right:auto; background-color:#E8F5E9; padding:15px; border-radius:10px; font-weight:bold;">
      🌳 基本的には全部無料だから安心してね 🌳
    </div>

  </div>
</div>

<?php get_footer(); ?>
