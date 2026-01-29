<?php
/*
Template Name: お問い合わせページ
*/
get_header();
?>

<?php get_header(); ?>

<div class="container">
  <h1>お問合せ</h1>
  <p>ご質問やご要望はこちらのフォームからお気軽にお送りください。</p>

  <form action="mailto:you@example.com" method="post" enctype="text/plain">
    <label for="name">お名前</label>
    <input type="text" id="name" name="name" required>

    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" required>

    <label for="message">お問い合わせ内容</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">送信</button>
  </form>
</div>

<?php get_footer(); ?>
