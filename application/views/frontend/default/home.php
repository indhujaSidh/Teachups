<section class="home-banner-area" style="background-image: url('<?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="home-banner-wrap">
                   <!-- <h2><?php echo get_frontend_settings('banner_title'); ?></h2> -->
                   <h2> <?php echo site_phrase('Learn Anything, Anytime, Anywhere'); ?></h2>
                    <!-- <p><?php echo get_frontend_settings('banner_sub_title'); ?></p> -->
                    <?php echo site_phrase(' We are customized online course provider and overseas educational consultant'); ?></p>
                   
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search" style="color:#4e0742"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-nextto-banner-area">
    <div class="container-lg" style="margin-top:60px">
   
    <h2 class="text-center" style="margin-bottom: 40px;"><?php echo site_phrase('Who we are'); ?> </h2>
            
            <div class="row" style="margin-top:20px" alignment="center" mx-auto >
               
                <div class="col-8" align-middle>
                <p>&nbsp;</p>
                <p class="text-justify text-size:40px">Students can work with us from the comfort and&nbsp; convenience. Online learning at Teachups offers these benefits &amp; more. With an online learning process students can choose to work with Instructors over the phone or via video conference.&nbsp;</p>
                <p class="text-justify">For students LMS portal designed, here students can register themselves and can start learning with instructors as per their choice. If a student chooses a phone, we will call them to clarify their needs. If a students&nbsp; chooses a video conference, we’ll provide a weblink to join video session</p>    
                <p class="text-justify">Students able to select courses as per their reuirements, and they can start courses immediately. This platform is designed for invidual consults and students can clariy doubs and they can learn inependenlty.
                    Here students and teachers are combined together for sharing knowledge through a structured course-based system. Teachers or instructors can create an unlimited number of courses, video lessons and documents according to their expertise and students can enroll in these courses and make themselves skilled anytime and from anywhere.</p>    
            </div>

                <div class="col-4" align-middle>
               
			        <style>
                        .elementor-widget-image{text-align:center}
                        .elementor-widget-image a{display:inline-block}
                        .elementor-widget-image a img[src$=".svg"]{width:48px}
                        .elementor-widget-image img{vertical-align:middle;display:inline-block}
                    </style>											
	                    <img width="440" height="300" src="uploads/system/who_we_are_image.jpg"; 
                        class="attachment-large size-large" alt="" loading="lazy">	
                
                </div>
            </div>
    </div>
</section>
<section class="home-fact-area" style="margin-top:50px">
    <div class="container-lg" >
        <div class="row">
            <?php $courses = $this->crud_model->get_courses(); ?>
            <div class="col-md-3 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fas fa-bullseye float-left"></i>
                    <div class="text-box">
                        <h4><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h4>
                        <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                    <div class="text-box">
                        <h4><?php echo site_phrase('expert_instruction'); ?></h4>
                        <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                    </div>
                </div>
            </div>


            <div class="col-md-3 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-comments float-left"></i>
                    <div class="text-box">
                        <h4><?php echo site_phrase('Easy Communication'); ?></h4>
                        <p><?php echo site_phrase('You_can_interact_with_others_easily'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                    <div class="text-box">
                        <h4><?php echo site_phrase('lifetime_access'); ?></h4>
                        <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-lg" style="margin-top: 80px; margin-bottom: 80px;">
        <h2 class="text-center" style="margin-bottom: 40px;">Popular Categories</h2>
             
              <div class="row my-flex-card justify-content-md-centr">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/hack.jpg" class="card-img-top img-fluid w-100" alt="" width="100%" height="100%">
                                <div class="centered w-100">Hacking</div>  
                            </div>
                            </div>
                        </div>
      
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/design.jpg" class="card-img-top img-fluid w-100" alt="" width="100%">
                                <div class="centered w-100">Designing</div>      
                            </div>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/maths.jpg" class="card-img-top img-fluid w-100" alt="" width="100%">
                                <div class="centered w-100">Mathematics</div>      
                            </div>
                            </div>
                        </div>
                  
                  
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/science.jpeg" class="card-img-top img-fluid w-100" alt="" width="100%">
                                <div class="centered w-100">Science</div>  
                                </div>
                            </div>
                        </div>
            </div>


            <!-- second categry row-->
            <div class="row my-flex-card justify-content-md-centr" style="margin-top :50px;">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/programming.jpg" class="card-img-top img-fluid w-100" alt="" width="100%" height="100%">
                                <div class="centered w-100">Programing</div>  
                            </div>
                            </div>
                        </div>
      
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/yoga.jpg" class="card-img-top img-fluid w-100" alt=""  width="100%">
                                <div class="centered w-100">Yoga</div>  
                            </div>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/architecture.jpg" class="card-img-top img-fluid w-100" alt="" width="100%">
                                <div class="centered w-100">Architecture</div>    
                            </div>
                            </div>
                        </div>
                  
                  
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100">
                                <div class="card-block">
                                <img src="uploads/system/writing.jpg" class="card-img-top img-fluid w-100" alt="" width="100%">
                                <div class="centered w-100">Writing</div> 
                                </div>
                            </div>
                        </div>
                      
                            </div>


      </section>



<script type="text/javascript">
    function handleWishList(elem) {

        $.ajax({
            url: '<?php echo site_url('home/handleWishList'); ?>',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

    function handleCartItems(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });
            }
        });
    }

    function handleEnrolledButton() {
        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn'); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                }
            }
        });
    }

    $(document).ready(function() {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            if ($(window).width() >= 840) {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'horizontal',
                    delay: {
                        show: 500,
                        hide: null
                    },
                    width: 330
                });
            } else {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'vertical',
                    delay: {
                        show: 100,
                        hide: null
                    },
                    width: 335
                });
            }
        }
    });

    $('.course-compare').click(function(e) {
        e.preventDefault()
        var redirect_to = $(this).attr('redirect_to');
        window.location.replace(redirect_to);
    });
</script>