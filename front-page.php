<?php get_header(); ?>

<main class="site-top">

  <p class="subtitle">
    無料で使える算数・数学プリント教材サイト。<br>
    幼児〜大学レベルまで、基礎からしっかり学べます。
  </p>

  <div class="highlight">
    📌 すべて無料・印刷OK・家庭学習／授業補助に使えます
  </div>
<div class="inner">
    <div class="top-layout">
        

        <!-- 左：固定コンテンツ -->
        <div class="top-left">

        <section class="section">
            <h2>学年別プリント</h2>

            <h3>幼児向け</h3>
            <ul>
            <li><a href="https://mathprint-forest.com/archives/print/pre-3">3歳</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/pre-4">4歳</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/pre-5">5歳</a></li>
            </ul>

            <h3>小学校</h3>
            <ul>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g1">1年</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g2">2年</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g3">3年</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g4">4年</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g5">5年</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/elementary-g6">6年</a></li>
            </ul>

            <h3>中学校</h3>
            <ul>
            <li><a href="https://mathprint-forest.com/archives/print/juniorhigh-g1">中1</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/juniorhigh-g2">中2</a></li>
            <li><a href="https://mathprint-forest.com/archives/print/juniorhigh-g3">中3</a></li>
            </ul>

            <h3>高校・大学</h3>
            <ul>
            <li><a href="#">高校数学　数１</a></li>
            <li><a href="#">大学数学</a></li>
            </ul>
        </section>

        </div>

        <!-- 右：最新記事 -->
        <div class="top-right">

        <section class="section">
            <h2>最新記事</h2>

            <ul>
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 5
            ];
            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
            ?>
                <li>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                </li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </ul>

        </section>

        </div>

    </div>
 </div>

</main>

<?php get_footer(); ?>