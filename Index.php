<!DOCTYPE html>
<!-- this function change the language automatically -->
<html <?php language_attributes(); ?>>
<head>
    <!-- this function change the charset (character set) -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!--out should be above it and our tags are prioritized other than third party -->
    <?php wp_head(); ?>

</head>
<!-- this classes like (we are in home or it has admin bar ) -->
<body <?php body_class(); ?>>
    <!-- plugins to load contant at the Begining of document  -->
    <?php wp_body_open(); ?>
    <p>Hello World</p>
    <!-- plugins to load contant at the end of document  -->
    <?php wp_footer(); ?> 

</body>
</html>