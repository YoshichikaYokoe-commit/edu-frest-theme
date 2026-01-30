<?php
/*
Template Name: CONTACT
*/
get_header();

// フォーム送信処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to      = 'yyokoe2208@gmail.com'; // 送信先メールアドレス
    $subject = 'お問い合わせフォームからのメッセージ';
    $body    = "名前: $name\nメール: $email\n\n$message";
    $headers = ['Content-Type: text/plain; charset=UTF-8', "Reply-To: $email"];

    if (wp_mail($to, $subject, $body, $headers)) {
        error_log('メール送信成功');
        wp_redirect(site_url('/thanks'));
        exit;
    } else {
        error_log('メール送信失敗');
        wp_redirect(site_url('/contact')); // 元ページに戻す
        exit;
    }
}
?>

<div class="container" style="max-width:700px; margin:50px auto; padding:0 20px;">

    <h1 style="text-align:center; color:#2E7D32;">お問い合わせ</h1>
    <p style="text-align:center; margin-bottom:30px; color:#555;">
        ご質問やご要望はこちらのフォームからお気軽にお送りください。
    </p>

    <form action="<?php echo esc_url(site_url('/contact')); ?>" method="post" style="display:flex; flex-direction:column; gap:15px;">

        <label for="name">お名前</label>
        <input type="text" id="name" name="name" required style="padding:10px; border-radius:5px; border:1px solid #ccc;">

        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required style="padding:10px; border-radius:5px; border:1px solid #ccc;">

        <label for="message">お問い合わせ内容</label>
        <textarea id="message" name="message" required style="padding:10px; border-radius:5px; border:1px solid #ccc; min-height:150px;"></textarea>

        <button type="submit" style="padding:12px; background-color:#2E7D32; color:#fff; border:none; border-radius:5px; font-weight:bold; cursor:pointer;">
            送信
        </button>
    </form>

</div>

<?php get_footer(); ?>
