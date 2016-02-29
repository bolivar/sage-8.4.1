<header class="banner">
  <div class="container desktop">
    <div class="row banner-container">
      <!-- social media icons -->
      <div class="col-md-4 social-media">
        <ul>
          <li><a class="fa fa-facebook fa-2x" target="_blank" href="https://www.facebook.com/Eccoci-Official-201920033314097/"></a></li>
          <li><a class="fa fa-twitter fa-2x" target="_blank" href="https://twitter.com/shop_limitededs"></a></li>
          <li><a class="fa fa-instagram fa-2x" target="_blank" href="https://www.instagram.com/shop_limited/"></a></li>
          <li><a class="fa fa-pinterest fa-2x" target="_blank" href="https://www.pinterest.com/ShopLimited/shop-limited-editons/"></a></li>
        </ul>
      </div>

      <!-- logo -->
      <div class="col-md-4 logo">
        <div class="logo-container">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="http://blog.shoplimitededitions.com/wp-content/uploads/2015/09/blog_logo1.png" alt="blog limited editions" /></a>
        </div>
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


  <div class="col-xs-6 logo">
    <div class="logo-container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="http://blog.shoplimitededitions.com/wp-content/uploads/2015/09/blog_logo1.png" alt="blog limited editions" />
    </a>
    </div>
  </div>

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
