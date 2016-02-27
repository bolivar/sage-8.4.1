<header class="banner">
  <div class="container desktop">
    <div class="row">
      <!-- social media icons -->
      <div class="col-md-4 social-media">
        <ul>
          <li><a class="fa fa-facebook fa-2x" href="#"></a></li>
          <li><a class="fa fa-twitter fa-2x" href="#"></a></li>
          <li><a class="fa fa-instagram fa-2x" href="#"></a></li>
          <li><a class="fa fa-pinterest fa-2x" href="#"></a></li>
        </ul>
      </div>

      <!-- logo -->
      <div class="col-md-4 logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://www.shoplimitededitions.com/v/vspfiles/assets/images/exquisitely_edgy_logo.svg" alt="exquisitely edgy" /></a>
      </div>

      <!-- search bar -->
      <div class="col-md-4 subscribe">
        <!-- <a class="btn btn-default pull-right" href="#" role="button">Subscribe</a> -->
        <!-- <span href="#" id="search" class="fa fa-search fa-2x pull-right"></span> -->
        <div class="search_container">
           <form class="searchbox" method="get" action="<?php bloginfo('home'); ?>/" id="searchform">
             <input type="text"  placeholder="Search......" value="<?php echo wp_specialchars($s, 1); ?>" name="s" class="searchbox-input" id="s" required>
             <input type="submit" class="searchbox-submit" value="GO">
             <span class="searchbox-icon glyphicon glyphicon-search"></span>
           </form>
        </div>
      </div>
    </div>
  </div>


<div class="mobile row">
  <div class="col-xs-3">
    <a id="nav-icon" href="#mobile-menu" class="nav-icon">
       <span></span>
       <span></span>
       <span></span>
   </a>
  </div>

  <!-- <div class="col-xs-6"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/images/blog_logo.png" alt="exquisitely edgy" /></a></div> -->
  <div class="col-xs-6"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://www.shoplimitededitions.com/v/vspfiles/assets/images/exquisitely_edgy_logo.svg" alt="exquisitely edgy" /></a></div>

  <div class="search_container col-xs-3">
     <form class="searchbox" method="get" action="<?php bloginfo('home'); ?>/" id="searchform">
       <input type="text"  placeholder="Search......" value="<?php echo wp_specialchars($s, 1); ?>" name="s" class="searchbox-input" id="s" required>
       <input type="submit" class="searchbox-submit" value="GO">
       <span class="searchbox-icon fa fa-search"></span>
     </form>
  </div>
</div>

 <!-- mobile navigation -->
  <nav class="nav-mobile" id="mobile-menu">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>

  <!-- primary navigation -->
  <nav class="nav-primary">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>
</header>
