<html lang="en">
<head><title><?php bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php  echo get_template_directory_uri().'/style.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>
<body class="light-grey">


<div class="content" style="max-width:1400px">


    <header class="w3-container w3-center w3-padding-32">
        <h1><a href="<?php bloginfo('url'); ?>"><b><?php bloginfo('name'); ?></b></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <div class="w3-container">

        <div class="w3-bar w3-border w3-card-4 w3-light-grey">
            <a href="<?php bloginfo('url'); ?>" class="w3-bar-item w3-button">Home</a>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {

                echo '<a class="w3-bar-item w3-button" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
            }
            ?>
        </div>


    </div>
    <div class="w3-row">