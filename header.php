<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <!-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->

  <link rel="stylesheet" href="<?php echo $rootpath?>/wp-content/themes/lean-wpbs4/bootstrap4/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $rootpath?>/wp-content/themes/lean-wpbs4/style.css">

  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?dd964c74a3611b3cbfb8505ff75dbbc1";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>

  <?php wp_head(); ?>
</head>
<body>

  <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary" id="primary-navbar" role="navigation">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php
          $args = array('theme_location' => 'primary',
                  'container' => '',
                  //'container_class' => 'collapse navbar-collapse',
                  'menu_class' => 'navbar-nav',
                  'fallback_cb' => '',
                              'menu_id' => 'main-menu',
                              'walker' => new Upbootwp_Walker_Nav_Menu());
          wp_nav_menu($args);
      ?>
    </div>
  </nav>

  <!-- 上面是复用的头部 -->
