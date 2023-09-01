<?php
/*
 * Template Name: Journal article
 * Template Post Type: post, page, product
 */
?>

<!DOCTYPE html>
<html data-lt-installed="true" lang="en">

<head>
    <link href="<?php echo get_template_directory_uri(); ?>/css/published.css" rel="stylesheet">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
</head>

<body>
    <div class="published-wrap no-ad-size">
        <div class="wrapper">
            <div class="app">
                <div class="note note-detail-markdown">
                    <meta property="og:type" content="article">
                    <meta property="og:title" content="<?php the_title(); ?>">
                    <meta property="og:site_name" content="Pavel Nakonechnyy Journal">
                    <meta property="article:author" content="Павел Наконечный">
                    <!-- Put this script tag to the <head> of your page -->

                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <!-- .note -->


            </div>
            <!-- .app -->
        </div>

        <div class="published-top">
            <div class="post-links">
                <a href="https://tele.gs/sneakbug8">Обратная связь в Telegram</a>
            </div>

            <a href="/">
                <?php get_bloginfo('name'); ?>
            </a>
        </div>
    </div><!-- .published-wrap -->

</body>

<?php wp_footer(); ?>


</html>