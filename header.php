<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>

    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fontawesome/css/all.css">    


    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, right); } ?></title>

    <?php wp_head(); ?> 
  </head>
  <body>


<header>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light">
   <a class="navbar-brand" href="<?php bloginfo('home') ?>"><?php bloginfo( 'name' ); ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <?php
   wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'top',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav ml-auto',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
</nav>
  </div>
</header>


  



  <?php if ( is_single()){ ?>


<section class="menu-blog">

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eu quero aprender
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/gestao-escolar">Redes Sociais</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/marketing-educacional">Produção de Conteúdo</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/gestao-escolar">Automação de Marketing</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/tecnologias-educacionais">Estratégias em Marketing Digital</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/contato">Materiais Gratuitos</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>

</section>

<?php 
  } ?>