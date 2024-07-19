<section class="menu-area">
  <div class="container-xl">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <ul class="mobile-header-buttons">
            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
          </ul>

          <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" height="35"></a>

          <?php include 'menu.php'; ?>

          <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 100%;">
            <div class="input-group search-box mobile-search">
              <input type="text" name = 'query' class="form-control" placeholder="<?php echo site_phrase('search_for_courses'); ?>">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search" style="color:#4e0742"></i></button>
              </div>
            </div>
          </form>

          <?php if ($this->session->userdata('admin_login')): ?>
            <div class="instructor-box menu-icon-box">
              <div class="icon">
                <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 10px 10px; font-size: 14px; width: 100%; border-radius: 0;"><?php echo site_phrase('administrator'); ?></a>
              </div>
            </div>
          <?php endif; ?>
          
           <!-- button more-->
         
        <div class="btn-group">
            <button type="button" class="btn btn btn-sign-in" style="background-color: #f8f9fa; border: 1px solid #f8f9fa; color: #4e0742;">More</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #f8f9fa; border: 1px solid #f8f9fa; color: #4e0742;">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('home/about_us'); ?>">About Us</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/login'); ?>">Resources</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/forum'); ?>">Open Student Forum</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/quiz'); ?>">Quiz</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/kidslearningzone'); ?>">Kids Learning Zone</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/contactus'); ?>">Contact Us</a>  
            </div>
        </div>
         

        <!-- button more end-->


          <div class="cart-box menu-icon-box" id = "cart_items">
            <?php include 'cart_items.php'; ?>
          </div>

          
          <span class="signin-box-move-desktop-helper"></span>
         
          <div class="sign-in-box btn-group">

            <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in" style="margin-right:10px;"><?php echo site_phrase('log_in'); ?></a>

            <a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up"><?php echo site_phrase('sign_up'); ?></a>

          </div> <!--  sign-in-box end -->
       
        </nav>
      </div>
    </div>
  </div>
</section>
