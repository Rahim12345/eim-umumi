<!DOCTYPE html>
<html lang="en">

<head>
    <title>Azərbaycan Respublikasının Prezidenti yanında Elmin İnkişafı Fondu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta http-equiv="author" content="BestComp Group - Baxşaliyev Sərxan" />
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <!-- <link href="assets/css/site.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="https://www.sdf.gov.az/development/img/icon/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/template/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://www.sdf.gov.az/development/css/site.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="assets/template/vendors/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet CSS-->
    <link href="assets/template/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .img > img {
            width: 100%;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu a::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 6px;
            top: .8em;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
        }
    </style>
    <!-- jQuery Libraries -->
    <script src="assets/template/vendors/jQuery/jquery.min.js"></script>
    <!-- Bootstrap Libraries -->
<!--    <script src="assets/template/vendors/bootstrap/bootstrap.min.js"></script>-->

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.sdf.gov.az/development/js/script.js"></script>
    <script type="text/javascript" src="https://www.sdf.gov.az/development/js/vertical.js"></script>
    <!-- Faydali linkler-->
    <script type="text/javascript" src="https://www.sdf.gov.az/development/js/jssor.slider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".bg").mouseover(function () {
                //var test = $(this);
                $(this).addClass('activeColor');
                //$(test).css('background-color', 'yellow');
            }).mouseout(function () {
                //var test = $(this);
                $('.activeColor').removeClass('activeColor');

                //$(test).css('background-color', 'red');
            });



            $("#nav ").mouseout(function () {
                $('.activeColor').removeClass('activeColor');

            });

            $(".subnav").mouseout(function () {
                $('.activeColor').removeClass('activeColor');

            });

            $('#headerCarousel, #centerCarousel,#linkCarousel,#partnerCarousel,textCarousel').carousel({
                vertical: true
            });
            $('#partnerCarousel .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));


            });
        });
    </script>
    <!-- Faydali link -->
    <script>
        jssor_1_slider_init = function () {

            var jssor_1_options = {
                $AutoPlay: true,
                $AutoPlaySteps: 5,
                $SlideDuration: 600,
                $SlideWidth: 214,
                $SlideSpacing: 6,
                $Idle: 8000,
                $Cols: 5,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 5,
                    $ChanceToShow: 2
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 1,
                    $SpacingY: 1
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1097);
                    jssor_1_slider.$ScaleWidth(refSize);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <script src="assets/js/main.js"></script>

</head>

<body style="background: url(https://www.sdf.gov.az//development/img/bg-body.png)">
    <!-- Header Search_Fb_Logo -->
    <div class="container" id="lang-cont-print">
        <div class="col-md-10 offset-md-1 ">
            <div class="float-right">
                <a href="#"><i class="fa fa-flag-en" style="color:#ff0000"></i></a>
                <a href="#" style="font-size: 12px;">ENG</a>

            </div>
        </div>
    </div>

    <div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
        <div class="headerTopp">
            <a href="#"><img class="slide-image" src="assets/images/header-eif1.jpg" style="width: 100%;" alt=""></a>
        </div>
    </div>
    <!-- Header Search_Fb_Logo_END-->


    <?php

        require __DIR__.'/menu2.php';
    ?>





    <!-- Esas Slader -->
    <div class="container" id="slider-cont-print">
        <div class="row carousel-holder">
            <div class="col-md-10 offset-md-1" style="margin-top:14px">
                <div id="carousel-example-generic" class="carousel slide  carousel-fade" data-ride="carousel"
                    data-interval="8000">
                    <div class="carousel-inner">

                        <div class="item active">

                            <img class="slide-image"
                                src="https://www.sdf.gov.az/development/img/fe007c624558fdf2594fc80547c0fa15.jpg" alt=""
                                style="    display: block;
    width: 100%;
    height: auto;">
                            <div class="carousel-caption" style="width:96%;margin:0 10px">
                                <a href="https://www.sdf.gov.az/az/generic/news/Detail/522">
                                    <h5 class="carousel-caption-header">12 Dekabr Ümummilli Lider Heydər Əliyevin anım
                                        günüdür.</h5>
                                </a>
                                <!--<p class="carousel-caption-text hidden-sm hidden-xs"> <a href="https://www.sdf.gov.az/az/generic/news/Detail/522"> <p>12 Dekabr &Uuml;mummilli Lider Heydər Əliyevin anım g&uuml;n&uuml;d&uuml;r.</p></a></p>-->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Esas Slader_END-->

    <div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
        <div class="row">
            <div class="col-sm">


                <div class="shadowboder">

                    <div style="height: 320px;">

                        <div style="float: left;margin-right: 15px;width: 100%;">
                            <div style="display: inline-block;width: 100%;" class="text-right">
                                <div style="float: left;height: 290px;width: 100%;">

                                    <div class="list-group"
                                        style="margin-top: 7px; font-size: 13px;font-weight: bold;text-align: left;width: 100%;">
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/122/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1"
                                            style="margin: 0 15px;">QANUNVERİCİLİK</a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/175/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1"
                                            style="margin: 0 15px;">AZƏRBAYCANDA ELM
                                        </a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/92/menu"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">BÜTÜN
                                            MÜSABİQƏLƏR VƏ
                                            LAYİHƏLƏR</a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/126/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">UĞURLU
                                            QRANT
                                            LAYİHƏLƏRİ</a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/117/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">STATİSTİK
                                            MƏLUMAT
                                        </a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/124/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">SUALLAR VƏ
                                            CAVABLAR
                                        </a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/128/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">QRANTLAR
                                            ÜZRƏ
                                            NƏŞRLƏR</a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/109/menu/galery"
                                            class="list-group-item bg-info mb-1 p-1" style="margin: 0 15px;">FOTO- VƏ
                                            VİDEO-ARXİV
                                        </a>
                                        <a href="https://www.sdf.gov.az/az/generic/menu/Detail/183/baseMenu"
                                            class="list-group-item bg-info mb-1 p-1"
                                            style="margin: 0 15px;">AZƏRBAYCANIN DAHİ
                                            ALİMLƏRİ</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-sm">


                <div class="shadowboder">

                    <div style="height: 320px;">

                        <div style="    margin-bottom: 10px;    margin-top: 4px;">
                            <div style="    display: table;    margin: 0 auto;">
                                <div style="    float: left;"><img
                                        src="https://www.sdf.gov.az/development/img/line-header-left.png"></div>
                                <div class="header-text"> <a
                                        href="https://www.sdf.gov.az/az/generic/collections/Collection/news">XƏBƏRLƏR və
                                        ELMİ YENİLİKLƏR </a></div>
                                <div style="    float: left;">
                                    <img src="https://www.sdf.gov.az/development/img/line-header-right.png">
                                </div>
                            </div>
                        </div>
                        <div style="    clear: both;"> </div>
                        <div style="height: 254px;font-size: 13px;padding: 0 10px;">

                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">12.12.2021</h6>
                                <a href="https://www.sdf.gov.az/az/generic/news/Detail/522/31">12 Dekabr Ümummilli Lider
                                    Heydər Əliyevin anım günüdür.</a>
                            </div>


                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">17.11.2021</h6>
                                <a href="https://www.sdf.gov.az/az/generic/news/Detail/521/31">17 Noyabr Milli Dirçəliş
                                    Günüdür.</a>
                            </div>


                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">12.11.2021</h6>
                                <a href="https://www.sdf.gov.az/az/generic/news/Detail/520/31">12 Noyabr Azərbaycan
                                    Respublikasının Konstitusiya Günüdür.</a>
                            </div>

                        </div>
                        <div class="float-right" style="    padding-right: 10px;">
                            <!-- https://www.sdf.gov.az/az/generic/collections/Collection/news" -->
                            <h5 style="font-size: 1rem;"> <a
                                    href="https://www.sdf.gov.az/az/generic/menu/Detail/194/menu/news"
                                    style="text-decoration: underline;">Bütün xəbərlər və elmi yeniliklər</a></h5>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-sm">
                <div class="shadowboder">

                    <div style="height: 320px;">

                        <div style="    margin-bottom: 10px;    margin-top: 4px;">
                            <div style="    display: table;    margin: 0 auto;">
                                <div style="    float: left;"><img
                                        src="https://www.sdf.gov.az/development/img/line-header-left.png"></div>
                                <div class="header-text"><a
                                        href="https://www.sdf.gov.az/az/generic/collections/Collection/event/29">TƏDBİRLƏR</a>
                                </div>
                                <div style="    float: left;">
                                    <img src="https://www.sdf.gov.az/development/img/line-header-right.png">
                                </div>
                            </div>
                        </div>
                        <div style="    clear: both;"> </div>
                        <div style="height: 254px;font-size: 13px;padding: 0 10px;">
                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">10.12.2018</h6>
                                <a href="https://www.sdf.gov.az/az/generic/event/Detail/322/29">Elmin İnkişafı
                                    Fondu “Davamlı sağlamlıq turizminin ölkənin iqtisadiyyatında rolu”
                                    mövzusunda beynəxalq konfrans keçirir</a>
                            </div>
                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">03.12.2018</h6>
                                <a href="https://www.sdf.gov.az/az/generic/event/Detail/319/29">“Neft və
                                    geoekologiya” mövzusunda gənc tədqiqatçıların və tələbələrin I beynəlxalq
                                    məktəb-seminarı keçirilir</a>
                            </div>
                            <div
                                style="    padding: 0 6px 10px 6px;border-bottom: 1px solid #b5d2d4;margin-bottom: 10px;">
                                <h6 style="margin-top:0px;margin-bottom:2px;font-size: 10px;">12.10.2018</h6>
                                <a href="https://www.sdf.gov.az/az/generic/event/Detail/302/29">Kosmos üzrə
                                    beynəlxalq məktəb öz işini yekunlaşdırıb</a>
                            </div>


                        </div>
                        <div class="float-right" style="    padding-right: 10px;">
                            <!-- /generic/collections/Collection/event/29-->
                            <h5 style="font-size: 1rem;"> <a
                                    href="https://www.sdf.gov.az/az/generic/menu/Detail/107/menu/event/29"
                                    style="text-decoration: underline;">Bütün tədbirlər</a></h5>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide m-auto col-md-12" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="img"><img class="d-block img-fluid" src="assets/images/slider/1.jpg" alt="First slide"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="img"><img class="d-block img-fluid" src="assets/images/slider/2.jpg" alt="Second slide"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="img"><img class="d-block img-fluid" src="assets/images/slider/1.jpg" alt="Third slide"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <!--Menu_News_RightMenu_END-->

    <div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
        <div class="row">
            <div class="col-sm mb-2">
            <img style="width: 100%;height:70px" src="https://www.sdf.gov.az/development/img/e-mur.jpg" class="slider-images" />
            </div>
            <div class="col-sm mb-2">
            <img style="width: 100%;height:70px" src="https://www.sdf.gov.az/development/img/qvaxti.jpg" class="slider-images" />
            </div>
            <div class="col-sm mb-2">
            <img style="width: 100%;height:70px" src="https://www.sdf.gov.az/development/img/khava.jpg" class="slider-images" />
            </div>
        </div>
    </div>


    <!-- Link Slider  -->
    <div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
        <div id="linkCarousel" class="carousel slide m-0" style="width: 100%;" data-ride="carousel" data-interval="10000"
            data-type="multi">
            <div id="jssor_1"
                style="position: relative; margin: 0 auto;    margin-right: -1px; top: 0px; left: 0px; width: 1097px; height: 80px; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div
                        style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div
                        style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
                    </div>
                </div>
                <div data-u="slides"
                    style="cursor: default; position: relative; top: 0px; left: 0px; width: 1097px; height: 80px; overflow: hidden; border-style:solid;border-width:0px;">
                    <div style="display: none;">
                        <a href="http://www.president.az/azerbaijan/leader" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/3e611a0168e2aa5ecb913cc06633455b.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://president.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/dae8d3e4b4785c916fd4254c37c9bbdc.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.heydar-aliyev-foundation.org/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/48453233bc883277e444bf8ac416050f.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.azerbaijan.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/fd73c183c95abbbc39d352b9cfe6c50f.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="https://mehriban-aliyeva.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/2d6f501f089ce00c03103581f208a749.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.president.az/administration" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/db4a542914a3e770df9114b66e400c67.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.cabmin.gov.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/470280ca2c2de51b34b07a03844459f0.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.meclis.gov.az/?/az/content/232" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/693c2e284edee3e496011fd3d6d0a2af.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.science.gov.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/acfb40bdf1b4de66ac91b415cf4b36d4.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://edu.gov.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/1ff4b8b5d20adbdad763c642ee1814c9.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="https://mys.gov.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/9c6dd0d720fac0350e783ebd563979c3.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://mincom.gov.az/" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/f262dad4e833e62ed275cfede421c097.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="https://en.unesco.org/countries/azerbaijan" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/f930e84306804855166792399e324f95.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://www.copag.gov.az/copag/az" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/c76b0bb25759a5e39375165a3424e51e.jpg"
                                class="slider-images" /></a>
                    </div>
                    <div style="display: none;">
                        <a href="http://azertag.az/bolme/science_and_education" target=_blank><img data-u="image"
                                src="https://www.sdf.gov.az/development/img/7618189d146ae5ce99945406063cc6bd.jpg"
                                class="slider-images" /></a>
                    </div>

                </div>

            </div>


        </div>

    </div>
    <!--Link Slider_END-->


    </div>
    </div>

    <div class="mt-2 mb-3 col-md-10 offset-md-1">
        <footer
            style="-moz-box-shadow: 0px 3px 8px #e0e0e0;-webkit-box-shadow: 0px 3px 8px #e0e0e0;box-shadow: 0px 3px 8px #e0e0e0;background-color: #fff;padding: 10px;background-color:#465990;color:white;">
            <div class="row">
                <div class="col-md-2 col-lg-2"><img src="assets/images/footer-eif.jpg" style="width: 100%;" alt=""></div>
                <div class="col-md-2 col-lg-2">Əsas Səhifə</div>
                <div class="col-md-2 col-lg-2">Fond Haqqında</div>
                <div class="col-md-2 col-lg-2">Xəbərlər və Elanlar</div>
                <div class="col-md-2 col-lg-2">Elm və İnkisaf</div>
                <div class="col-md-2 col-lg-2">Əlaqə</div>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3">
                © <?= date('Y') ?> Copyright: Designed by NMR Rabitə və Yeni Texnologiyalar Nazirliyi.
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script>
        jssor_1_slider_init();
    </script>

    <script>
        $('.carousel').carousel({
                interval: 2000,
        })

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
            }
            var $subMenu = $(this).next('.dropdown-menu');
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass('show');
            });


            return false;
        });
    </script>
</body>

</html>