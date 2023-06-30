<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request)); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Felight | Antibacterial Silverfresh Technology" />
    <meta name="author" content="Pets Choice Ltd" />
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
    <title><?php if (is_front_page()) { bloginfo('name'); ?> | <?php bloginfo('description'); } else { wp_title(''); ?> <?php /* bloginfo('name'); */ } ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <link rel="canonical" href="<?php echo $current_url; ?>" />
	<?php wp_head(); ?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76616144-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-76616144-1');
	</script> -->
</head>