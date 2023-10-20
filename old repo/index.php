<?
global $Content,$Setting,$SliderImages;
define("PV_Access", 'Ghbf5erT8$j6W@6');
require dirname(__FILE__) . '/' . "config.php";

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" dir="rtl" lang="ar">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" dir="rtl" lang="ar">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" width='device-width' content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1"/>
        <meta name="author" content="Perfect Vision Egypt llt.,perfectvisioneg.com,sales@perfectvisioneg.com"/>

        <title><?=get_setting("site-title")?></title>
        <meta name="description" content="<?=get_setting("meta-des")?>">
        <meta name="keywords" content="<?=get_keywords()?>">
        <meta property="og:url" content="<?=get_setting("home-url")?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?=get_setting("site-name")?>" />
        <meta property="og:description" content="<?=get_setting("meta-des")?>" />
        <meta property="og:image" data-page-subject="true" content="<?=get_setting("home-url")?>style/images/social.jpg" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
            <!-- Twitter Meta Tags -->
        <meta name='twitter:app:country' content='EG'>
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="<?=get_setting("domain")?>">

        <meta property="twitter:url" content="<?=get_setting("home-url")?>">
        <meta name="twitter:title" content="<?=get_setting("site-name")?>">
        <meta name="twitter:description" content="<?=get_setting("meta-des")?>">
        <meta name="twitter:image" content="<?=get_setting("home-url")?>style/images/social.jpg">


        <meta name="generator" content="Perfect Vision EG" />
        <link rel="icon" type="image/png"  href="<?=get_setting("home-url")?>style/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Caveat:wght@400;500;600;700&family=Dancing+Script:wght@400;500;600;700&family=Joan&family=Pacifico&family=Righteous&family=Roboto+Slab:wght@300;400;500;600;700;800;900&family=Tiro+Devanagari+Sanskrit:ital@0;1&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
        
        
        <link href="<?=get_setting("home-url")?>style/css/reset.css?ver=<?=CachVer?>" rel="stylesheet" loading="lazy">
        <link href="<?=get_setting("home-url")?>style/fontawesome-6.2.1/css/fontawesome.css?ver=<?=CachVer?>" rel="stylesheet" loading="lazy">
        <link href="<?=get_setting("home-url")?>style/fontawesome-6.2.1/css/brands.css?ver=<?=CachVer?>" rel="stylesheet" loading="lazy">
        <link href="<?=get_setting("home-url")?>style/fontawesome-6.2.1/css/solid.css?ver=<?=CachVer?>" rel="stylesheet" loading="lazy">

        <link rel="stylesheet" href="<?=get_setting("home-url")?>style/css/flexslider.css" type="text/css" media="screen" loading="lazy" />

        <!-- Modernizr -->
        <script src="<?=get_setting("home-url")?>style/js/modernizr.js"></script>
        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

        <!-- FlexSlider -->
        <script defer src="<?=get_setting("home-url")?>style/js/jquery.flexslider.js"></script>

        <link rel="stylesheet" href="<?=get_setting("home-url")?>style/magnific-popup/magnific-popup.css">
        <script src="<?=get_setting("home-url")?>style/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="<?=get_setting("home-url")?>style/js/jquery.zoom.js"></script>

        
        
        <link href="<?=get_setting("home-url")?>style/css/default.css?ver=<?=CachVer?>" rel="stylesheet" loading="lazy">

        <script src="<?=get_setting("home-url")?>style/js/script.js?ver=<?=CachVer?>"></script>

    </head>

    <body itemscope itemtype="http://schema.org/WebPage">

        <div class="full-viewport">
            <header>
                <div class="side-shape top-area">
                    
                    <div class="logo-group-row">
                        <section class="logo-group">
                            <img src="<?=get_setting("home-url")?>style/images/logo.png?ver=<?=CachVer?>" loading="lazy"/>
                            <div class="logo-text">
                                <h2><?=$Content["logo-name"]?></h2>
                                <p><?=$Content["logo-slug"]?></p>
                            </div>
                            <div class="header-contacts-sep"></div>
                            <div class="header-contacts">
                                <div class="contact-row email-row">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="mailto:<?=$Content["company-email"]?>"><?=$Content["company-email"]?></a>
                                </div>
                                <? 
                                if(is_array($Content["company-phone"]) && count($Content["company-phone"])>0){
                                    //
                                    ?>
                                    <div class="contact-row phone-row hide">
                                        <i class="fa-solid fa-square-phone"></i>
                                        <? 
                                        foreach($Content["company-phone"] as $phone_data){
                                            if(is_array($phone_data) && array_key_exists("code",$phone_data)&& array_key_exists("num",$phone_data)){
                                                $phoneHerf = str_replace(" ","",$phone_data["code"]).str_replace(" ","",$phone_data["num"]);
                                                ?>
                                                <a href="tel:<?=$phoneHerf?>">(<?=$phone_data["code"]?>) <?=$phone_data["num"]?></a>
                                                <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?
                                }
                                ?>
                            </div>
                        </section>
                    </div>
                    <section class="text-container" style="text-align: start;">
                        <h3 style="text-align: center;"><?=$Content["header-text-title"]?></h3>
                        <?
                        $header_text_content=$Content["header-text-content-full"];
                        $header_text_content=str_replace(".",".<br>",$header_text_content);
                        $header_text_content=str_replace(". ",".<br>",$header_text_content);
                        ?>
                        <p><?=$header_text_content?></p>
                        <div class="clr"></div>
                        <div class="video-container" style="padding-bottom: 0px">
                        <video width="400" controls class="master-marine-video" style="width: 100%;">
                            <source src="assets/mastermarinecompany.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </section>
                    
                </div>        
            </header>

            <div class="main-content">

                <div class="side-shape bottom-area">
                    
                    <div class="text-container">
                        <article class="text-col about-col">
                            <h4><?=$Content["about-text-title"]?></h4>
                            <p><?=$Content["about-text-content"]?></p>
                        </article>
                        <article class="text-col services-col">
                            <h4><?=$Content["services-text-title"]?></h4>
                            <p><?=$Content["services-text-content"]?></p>
                        </article>
                        <article class="text-col extra-col">
                            <img src="<?=get_setting("home-url")?>style/images/blue-corner.png?ver=<?=CachVer?>" loading="lazy"/>
                            <h4><?=$Content["extra-text-title"]?></h4>
                            <p><?=$Content["extra-text-content"]?></p>
                        </article>
                        <img src="<?=get_setting("home-url")?>style/images/blue-corner.png?ver=<?=CachVer?>" loading="lazy"/>
                    </div>
                </div>

            </div>
            <div>
            <? 
                getSliderImages();
                $SliderImages=(is_array($SliderImages))?$SliderImages:array();
                if(is_array($SliderImages)&& count($SliderImages)>0){
                    ?>
                    <div class="slide-row">
                        <!-- Slider Start -->
                        <div class="flexslider carousel">
                            <ul class="slides">
                                <!-- items Start -->
                                <? 
                                foreach($SliderImages as $key=>$imagesGroup){
                                    if(is_array($imagesGroup)&&count($imagesGroup)>0){
                                        ?>
                                        <!-- item Group Start -->
                                        <li class="slideImagesGroup" data-key=<?=$key?>>
                                        <?
                                        foreach($imagesGroup as $image_key => $image_url){
                                            if($image_key==1){
                                                ?><div class="small-images-col"><?
                                            }
                                            ?>
                                            <!-- image Start -->
                                            <div class="sideImage"  data-key=<?=$image_key?>>
                                                <div class="image-bg" style="background-image:url('<?=$image_url?>')">
                                                    <img src="<?=$image_url?>"  loading="lazy" />
                                                    <div class="zoom-this-image" href="<?=$image_url?>"><i class="fa fa-search-plus"></i></div>
                                                </div>                                       
                                            </div>
                                            <!-- image End -->
                                            <?
                                            if($image_key>=1 && count($imagesGroup)-1 == $image_key ){
                                                ?></div><?
                                            }
                                            
                                        }
                                        ?>
                                        </li>
                                        <!-- item Group End -->
                                        <?
                                    }
                                }
                                ?>
                                <!-- items End -->
                            </ul>
                        </div>
                        <!-- Slider End -->
                    </div>
                    <?     
                }
                
            ?>
            </div>
        <footer>
            <div class="fix-row"></div>
                <section class="footer-contacts">
                    <div class="contact-row address-row hide">
                        <i class="fa-solid fa-location-dot"></i>
                        <p><?=$Content["company-address"]?></p>
                    </div>
                    <div class="growing-item"></div>
                    <div class="footer-contacts-cols">
                        <div class="contact-row email-row">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?=$Content["company-email"]?>"><?=$Content["company-email"]?></a>
                        </div>
                        <? 
                        if(is_array($Content["company-phone"]) && count($Content["company-phone"])>0){
                            //
                            ?>
                            <div class="contact-row phone-row hide">
                                <i class="fa-solid fa-square-phone"></i>
                                <? 
                                foreach($Content["company-phone"] as $phone_data){
                                    if(is_array($phone_data) && array_key_exists("code",$phone_data)&& array_key_exists("num",$phone_data)){
                                        $phoneHerf = str_replace(" ","",$phone_data["code"]).str_replace(" ","",$phone_data["num"]);
                                        ?>
                                        <a href="tel:<?=$phoneHerf?>">(<?=$phone_data["code"]?>) <?=$phone_data["num"]?></a>
                                        <?
                                    }
                                }
                                ?>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="growing-item"></div>
                </section>
                <section class="footer-copyright" style="justify-content: center; text-align: center;">
                    <div class="site-copyright">
                        <span>Copyright</span><span>&copy;</span><span class="company-name"><?=$Setting["company-name"]?></span> 
                        <span class="company-date">
                            2019:<script type="text/javascript"> document.write(new Date().getFullYear());</script> 
                        </span>
                        <span>All rights reserved</span>
                    </div>
                </section>
        </footer>
        </div>
        <script type="text/javascript">
            /**
            $(function(){
                SyntaxHighlighter.all();
            });
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                    //$('body').removeClass('loading');
                    }
                });
            });
            */
        </script>

    </body>
</html>