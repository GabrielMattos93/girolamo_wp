<!---
Girolamo by Gabriel Mattos
brutecode.com.br | https://github.com/GabrielMattos93
Template Html5 e CSS
--->
<!DOCTYPE HTML>
<html lang="<?php language_attributes(); ?>">

<head>
 <!--- Meta TAG ---->
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
</head>

<body <?php body_class(); ?>>
