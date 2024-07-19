<section class="forum-banner-area" style="background-image: url('../uploads/system/forum_image.jpg');
     background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;"  >
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="home-banner-wrap">
                   <!-- <h2><?php echo get_frontend_settings('banner_title'); ?></h2> -->
                   <h2> <?php echo site_phrase('Clear your doubts with your friends'); ?></h2>
                    <!-- <p><?php echo get_frontend_settings('banner_sub_title'); ?></p> -->
                    <?php echo site_phrase(' Sharing knowledge, will helps to gain more information'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="container-lg" style="margin-top: 80px; margin-bottom: 80px;">
<h2 class="text-center" style="margin-bottom: 40px;"><?php echo site_phrase('Select Category'); ?> </h2>
                <style>
                    body {
            font-family: 'Raleway', sans-serif;
            background-color:  #8186a3;
            }

            .contenedor {
            height: 100%;
            padding: 5% 0;
            }

            h1 {
            color: #FCFBFA;
            }

            .container_foto {
            background-color: rgba(57, 62, 93, 0.7);
            padding: 0;
            overflow: hidden;
            max-width: 330px;
            margin: 5px;
            }

            .container_foto article {
            padding: 10%;
            position: absolute;
            bottom: 0;
            z-index: 1;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            }

            .container_foto h2 {
            color: #fff;
            font-weight: 800;
            font-size: 25px;
            border-bottom: #fff solid 1px;
            }

            .container_foto h4 {
            font-weight: 300;
            color: #fff;
            font-size: 16px;
            }

            .container_foto img {
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.4;
            -webkit-transition: all 4s ease;
            -moz-transition: all 4s ease;
            -o-transition: all 4s ease;
            -ms-transition: all 4s ease;
            transition: all 4s ease;
            }

            .ver_mas {
            background-color: #7c4a69;
            position: absolute;
            width: 100%;
            height: 70px;
            bottom: 0;
            z-index: 1;
            opacity: 0;
            transform: translate(0px, 70px);
            -webkit-transform: translate(0px, 70px);
            -moz-transform: translate(0px, 70px);
            -o-transform: translate(0px, 70px);
            -ms-transform: translate(0px, 70px);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            }

            .ver_mas span {
            font-size: 40px;
            color: #fff;
            position: relative;
            margin: 0 auto;
            width: 100%;
            top: 13px;
            }


            /*hovers*/

            .container_foto:hover {
            cursor: pointer;
            }

            .container_foto:hover img {
            opacity: 0.1;
            transform: scale(1.5);
            }

            .container_foto:hover article {
            transform: translate(2px, -69px);
            -webkit-transform: translate(2px, -69px);
            -moz-transform: translate(2px, -69px);
            -o-transform: translate(2px, -69px);
            -ms-transform: translate(2px, -69px);
            }

            .container_foto:hover .ver_mas {
            transform: translate(0px, 0px);
            -webkit-transform: translate(0px, 0px);
            -moz-transform: translate(0px, 0px);
            -o-transform: translate(0px, 0px);
            -ms-transform: translate(0px, 0px);
            opacity: 1;
            }

            </style>
            <div class="row">
                <div class="col-lg-3 col-sm-6  container_foto">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Architecture<br></h2>
                   
                    </article>
                    <img src="../uploads/system/architecture.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Designing <br></h2>
                  
                    </article>
                    <img src="../uploads/system/design.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Hacking <br></h2>
                   
                    </article>
                    <img src="../uploads/system/hack.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Mathematics <br></h2>
                    
                    </article>
                    <img src="../uploads/system/maths.jpg" alt="">
                </div>
            <!-- second row starts -->
                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Writing <br></h2>
                    
                    </article>
                    <img src="../uploads/system/writing.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Yoga <br></h2>
                    
                    </article>
                    <img src="../uploads/system/yoga.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left" >
                    <h2>Science <br></h2>
                    <h4></h4>
                    </article>
                    <a href="<?php echo site_url('home/science_forum'); ?>"><img src="../uploads/system/science.jpeg" alt="" ></a>
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Programing <br></h2>
                   
                    </article>
                    <img src="../uploads/system/programming.jpg" alt="">
                </div>

                <!-- 3rd row starts here-->
                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Marketing <br></h2>
                    <h4></h4>
                    </article>
                    <img src="../uploads/system/marketing.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Music <br></h2>
                  
                    </article>
                    <img src="../uploads/system/music.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Teaching and Academics <br></h2>
                    
                    </article>
                    <img src="../uploads/system/teaching.jpg" alt="">
                </div>

                <div class="col-lg-3 col-sm-6  container_foto" style="margin-top:30px;">
                    <div class="ver_mas text-center">
                    <span  class="lnr lnr-eye"></span>
                    </div>
                    <article class="text-left">
                    <h2>Photography and Video <br></h2>
                   
                    </article>
                    <img src="../uploads/system/photo.jpg" alt="">
                </div>

            </div>
        </div>
   
</section>

            
