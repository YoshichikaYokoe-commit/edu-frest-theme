<?php
/*
Template Name: THANKS
*/
get_header();
?>

<div class="container" style="max-width:700px; margin:50px auto; padding:0 20px; text-align:center;">

    <h1 style="color:#2E7D32; margin-bottom:20px;">お問い合わせありがとうございました</h1>

    <p style="color:#555; font-size:16px; margin-bottom:30px;">
        送信が完了しました。追ってご連絡いたします。<br>
        ご入力いただいたメールアドレスをご確認ください。
    </p>

    <a href="<?php echo site_url('/'); ?>" style="display:inline-block; padding:12px 25px; background-color:#2E7D32; color:#fff; border-radius:5px; text-decoration:none; font-weight:bold;">
        トップページへ戻る
    </a>

</div>

<?php get_footer(); ?>
