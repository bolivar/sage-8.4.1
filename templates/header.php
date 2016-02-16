<header class="banner">
  <div class="container desktop">
    <div class="row">
      <!-- social media icons -->
      <div class="col-md-4 social-media">
        <ul>
          <li><a class="fa fa-facebook-official fa-2x" href="#"></a></li>
          <li><a class="fa fa-twitter fa-2x" href="#"></a></li>
          <li><a class="fa fa-instagram fa-2x" href="#"></a></li>
          <li><a class="fa fa-pinterest fa-2x" href="#"></a></li>
        </ul>
      </div>

      <!-- logo -->
      <div class="col-md-4 logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/images/blog_logo.png" alt="exquisitely edgy" /></a>
      </div>

      <!-- search bar -->
      <div class="col-md-4 subscribe">
        <!-- <a class="btn btn-default pull-right" href="#" role="button">Subscribe</a> -->
        <!-- <span href="#" id="search" class="fa fa-search fa-2x pull-right"></span> -->
        <div id="sb-search" class="sb-search">
        	<form>
        		<input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
        		<input class="sb-search-submit" type="submit" value="">
        		<span class="sb-icon-search"></span>
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

  <div class="col-xs-6"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/images/blog_logo.png" alt="exquisitely edgy" /></a></div>

  <div class="col-xs-3">
  <span class="fa fa-search fa-2x pull-right"></span>
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

  <!-- primary nabigation -->
  <nav class="nav-primary">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>
</header>
