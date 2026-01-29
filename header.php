<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<style>
/* 簡単なデザイン用CSS */
body { font-family: "Yu Gothic", sans-serif; margin:0; background:#fdfdfd; color:#333; }
header h1 { margin:0; font-size:2em; }
header p { margin:5px 0 15px; font-size:1em; font-weight:400; }
nav ul { list-style:none; margin:0; padding:0; display:flex; justify-content:center; gap:20px; }
nav ul li a { color:#fff; text-decoration:none; font-weight:600; }
nav ul li a:hover { text-decoration:underline; }
header {
    background: linear-gradient(to bottom, #0077ffff, #94c9ffff);
    color: #fff;
    padding: 20px 0;
    text-align: center;
}
</style>

</head>
<body <?php body_class(); ?>>
<header>
    <h1 style="text-align:center; margin:0;">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/math-logo.png" alt="算数・数学プリントの森" style="height:60px;">
        </a>
    </h1>

    <nav>
        <ul style="list-style:none; margin:0; padding:0; display:flex; justify-content:center; gap:20px;">
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">幼児</a></li>
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">小学校</a></li>
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">中学校</a></li>
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">高校</a></li>
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">大学</a></li>
            <li><a href="#" style="color:#fff; text-decoration:none; font-weight:600;">各種資格試験</a></li>
        </ul>
    </nav>
</header>
