<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen') ?>>
    <?php wp_body_open();
    get_template_part('template-parts/navbar-menu');
    ?>



    <main class="flex-grow">