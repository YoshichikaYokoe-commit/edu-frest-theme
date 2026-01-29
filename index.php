<?php
// 親テーマ用の最低限のindex.php

get_header(); // header.php を読み込む

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title('<h1>', '</h1>');   // 記事タイトル
        the_content();                // 記事本文
    endwhile;
else : 
?>
<p>記事が見つかりませんでした。</p>
<?php
endif;

get_footer(); // footer.php を読み込む