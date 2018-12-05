<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Boostrap, Programación">
    <meta name="description" content="Página oficial de Marcos López">
    <meta name="google-site-verification" content="y9dpW3hRxy-2l74I225jwVp24K89BK48WC97yC5QIGs" />
    <meta name="author" content="Marcos López">

    <title><?php echo bloginfo( 'title' )?></title>

    <?php wp_head(); ?>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8856434002983808",
        enable_page_level_ads: true
      });
    </script>

</head>

<body class="body" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php get_template_part('include/menu'); ?>