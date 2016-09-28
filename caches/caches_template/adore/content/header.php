<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo IMG_PATH;?>ab/star.png" type="favicon/ico" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/owl.theme.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/animate.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>ab/style.css">
    <style>
        .cont{background: url('<?php echo IMG_PATH;?>ab/logo.png') no-repeat #353243;background-size: 75px;background-position: 5% 0;}
        .nav{width: 80%;float: right;margin-top: 15px;}
        .nav ul li{margin-right: 20px;}
        .nav ul li a{color:#fec4ac;font-size: 18px;padding: 0.5em 0.7em;}
        .top-nav{height: 78px;}
        .header-description{background: url('<?php echo IMG_PATH;?>ab/banner1_2.jpg') no-repeat;background-size: 100% 100%;}
        /*.top-nav{height:150px;}*/
        @media screen and (max-width:480px) {
            .cont{background:#353243;background-size: 50px;}
            .nav{width:100%;padding:0px;}
            .nav ul{width: 100%}
            .header-description{height:60vh;}
            .heading img{width: 120px;}
            .heading-subtitle{letter-spacing:5px;}
            .center{width: 20px;}
        }
    </style>
    <script src="<?php echo JS_PATH;?>ab/jquery-1.11.2.min.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
    </script>
  </head>
  <body>
    <!--== 4. Header ==-->
        <section class="header" id="header">
           <!--top-nav-->
                <div class="top-nav">
                     <div class="container cont">
                         <div class="nav">
                             <span class="menu"> </span> 
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                             <ul class="nav nav-pills pull-right">
                                 <li role="presentation"><a href="index.html">首页</a></li>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                 <li role="presentation"><a  href="photo_list.html"><?php echo $r['catname'];?></a></li>
                             <?php $n++;}unset($n); ?>
                                 <!-- <li role="presentation"><a  href="photos.html">SERVICE</a></li>
                                 <li role="presentation"><a  href="#works">VENUE</a></li>
                                 <li role="presentation"><a  href="#meet">COUTURE</a></li>
                                <li role="presentation"><a  href="#testimonial">GIFT</a></li>
                                <li role="presentation"><a  href="#contact">GALLERY</a></li>
                                <li role="presentation"><a  href="#contact">CONTACT</a></li> -->
                                 <div class="clearfix"> </div>
                             </ul>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                         </div>
                         <!--script-nav-->
                         <script>
                         $("span.menu").click(function(){
                         $(".nav ul").slideToggle("slow" , function(){
                         });
                         });
                         </script>
                         <!--script-nav-->

                     </div>
                </div>
                <!--top-nav ends-->
            <div class="header-description text-center">
                <div class="header-content wow bounce animated">
                    <h1 class="heading">
                        <img src="<?php echo IMG_PATH;?>ab/adore_1.png" alt="" width="200px">
                    </h1>
                    <p class="heading-subtitle">
                        ADORE THE ADORABLE
                    </p> 
                </div> <!-- /.header-content -->   
            
                <div class="wow zoomIn button-down" data-wow-duration="1s" data-wow-offset="100">
                  <div class="wow tada" data-wow-delay="1s" data-wow-duration="1s">
                    <div class="wow rubberBand" data-wow-delay="2000ms" data-wow-duration="1s">
                      <div class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s">
                        <a href="#service" title="Go down">
                          <img src="<?php echo IMG_PATH;?>ab/button_downr.png" alt="MaterialUp" class="center">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div> <!-- /.header-description -->
        </section> <!-- /#header -->