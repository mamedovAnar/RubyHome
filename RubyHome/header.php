<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="" rel="stylesheet" />

   <title>RubyHome</title>
   <?php wp_head(); ?>
</head>



<body>
   <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
         <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
               <img src="image/site-logo.png" alt="RubyHome" class="w-100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
               <?php wp_nav_menu([
                  'theme_location' => 'header',
                  'container' => null,
                  'menu_class'      => 'navbar-nav',

               ]); ?>

               <button class="btn btn-primary header_button" type="submit">Contact us</button>
            </div>
         </div>
      </nav>
   </header>