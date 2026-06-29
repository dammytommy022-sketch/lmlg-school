<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- META ============================================= -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />

        <!-- DESCRIPTION -->
        <meta name="description" content="EduChamp : Education HTML Template" />
        
        <!-- OG -->
        <meta property="og:title" content="EduChamp : Education HTML Template" />
        <meta property="og:description" content="EduChamp : Education HTML Template" />
        <meta property="og:image" content="" />
        <meta name="format-detection" content="telephone=no">
        
        <!-- FAVICONS ICON ============================================= -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
        
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- MOBILE SPECIFIC ============================================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        
        <!-- All PLUGINS CSS ============================================= -->
        <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
        
        <!-- TYPOGRAPHY ============================================= -->
        <link rel="stylesheet" type="text/css" href="assets/css/typography.css">
        
        <!-- SHORTCODES ============================================= -->
        <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
        
        <!-- STYLESHEETS ============================================= -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
        
        <!-- REVOLUTION SLIDER CSS ============================================= -->
        <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
        <!-- REVOLUTION SLIDER END -->	


    </head>
    <body id="bg">
        <div class="page-wraper">

            @include('layouts.header')

            <main>
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
        <!-- External JavaScripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
        <script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
        <script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/vendors/switcher/switcher.js') }}"></script>
        <!-- Revolution JavaScripts Files -->
        <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script>
            jQuery(document).ready(function() {
            var ttrevapi;
            var tpj =jQuery;
            if(tpj("#rev_slider_486_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            }else{
                ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"assets/vendors/revolution/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },
                        
                    },
                    viewPort: {
                        enable:true,
                        outof:"pause",
                        visible_area:"80%",
                        presize:false
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[768,600,600,600],
                    lazyType:"none",
                    parallax: {
                        type:"scroll",
                        origo:"enterpoint",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
                        type:"scroll",
                    },
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });	
        </script>
        <style>
            .school-card{
                background:#fff;
                border-radius:15px;
                padding:35px;
                box-shadow:0 8px 25px rgba(0,0,0,.08);
                transition:all .3s ease;
                height:100%;
                border:none;
            }

            .school-card:hover{
                transform:translateY(-8px);
                box-shadow:0 18px 40px rgba(0,0,0,.15);
            }

            .school-card i{
                font-size:42px;
                margin-bottom:20px;
            }

            .school-card h4{
                font-size:22px;
                font-weight:600;
                margin-bottom:15px;
            }

            .school-card p{
                color:#666;
                line-height:1.8;
            }

            .counter-card{
                background:#fff;
                border-radius:15px;
                padding:30px 20px;
                box-shadow:0 10px 25px rgba(0,0,0,.08);
                transition:all .3s ease;
                height:100%;
            }

            .counter-card:hover{
                transform:translateY(-6px);
                box-shadow:0 18px 40px rgba(0,0,0,.15);
            }

            .counter-card h2{
                color:var(--primary);
                font-size:42px;
                font-weight:700;
                margin-bottom:10px;
            }

            .counter-card p{
                font-size:16px;
                color:#666;
                font-weight:500;
                margin:0;
                line-height:1.5;
            }

            .feature-card{
                background:#fff;
                padding:35px 25px;
                border-radius:16px;
                box-shadow:0 8px 25px rgba(0,0,0,.08);
                transition:all .3s ease;
                height:100%;
            }

            .feature-card:hover{
                transform:translateY(-8px);
                box-shadow:0 18px 40px rgba(0,0,0,.12);
            }

            .feature-icon{
                width:70px;
                height:70px;
                margin:0 auto 20px;
                border-radius:50%;
                background:rgba(0,123,255,.08);
                display:flex;
                align-items:center;
                justify-content:center;
            }

            .feature-icon i{
                font-size:32px;
                color:var(--primary);
            }

            .feature-card h5{
                font-weight:700;
                margin-bottom:15px;
            }

            .feature-card p{
                margin:0;
                color:#666;
                line-height:1.7;
            }

            .process-card{
                background:#fff;
                padding:35px 25px;
                border-radius:16px;
                box-shadow:0 8px 25px rgba(0,0,0,.08);
                transition:all .3s ease;
                height:100%;
                position:relative;
            }

            .process-card:hover{
                transform:translateY(-8px);
                box-shadow:0 18px 40px rgba(0,0,0,.15);
            }

            .process-number{
                width:70px;
                height:70px;
                margin:0 auto 25px;
                border-radius:50%;
                background:var(--primary);
                color:#fff;
                font-size:28px;
                font-weight:700;
                display:flex;
                align-items:center;
                justify-content:center;
            }

            .process-card h5{
                font-weight:600;
                margin-bottom:15px;
                color:#222;
            }

            .process-card p{
                margin:0;
                color:#666;
                line-height:1.8;
                font-size:15px;
            }
        </style>

        
    </body>
</html>
