<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页 - 美丽烟台</title>
    <meta name="author" content="Alvaro Trigo Lopez"/>
    <meta name="description" content="fullPage full-screen backgrounds."/>
    <meta name="keywords" content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen"/>
    <meta name="Resource-type" content="Document"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fullPage.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/examples.css')}}"/>
    <style>

        /* Style for our header texts
        * --------------------------------------- */
        h1 {
            font-size: 5em;
            font-family: arial, helvetica;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section {
            text-align: center;
            overflow: hidden;
        }

        #myVideo {
            position: absolute;
            right: 0;
            bottom: 0;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-color: black; /* in case the video doesn't fit the whole page*/
            background-image: /* our video */;
            background-position: center center;
            background-size: contain;
            object-fit: cover; /*cover video background */
            z-index: 3;
            -webkit-filter:blur(3px);
        }

        /* Layer with position absolute in order to have it over the video
        * --------------------------------------- */
        #section0 .layer {
            position: absolute;
            z-index: 4;
            width: 100%;
            left: 0;
            top: 43%;
        }

        /*solves problem with overflowing video in Mac with Chrome */
        #section0 {
            overflow: hidden;
        }

        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
    </style>

    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log: function () {
            }
        };
    </script>
    <![endif]-->

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.fullPage.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/examples.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                verticalCentered: true,
                sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
                anchors: ['firstPage', 'secondPage', '3rdPage','4rdPage'],
                menu: '#menu',
                scrollingSpeed: 1700,
                //右导航
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['First page', 'Second page', 'Third and last page'],
                responsiveWidth: 900,
                //下导航
                slidesNavigation: true
            });
        });
    </script>
</head>
<body>
<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#firstPage">Index</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
    <li data-menuanchor="4rdPage"><a href="#4rdPage">Third slide</a></li>
</ul>
<div id="fullpage">
    <div class="section " id="section0">
        <video autoplay loop muted id="myVideo">
            <source src="{{asset('images/flowers.mp4')}}" type="video/mp4">
            <source src="{{asset('images/flowers.webm')}}" type="video/webm">
        </video>
        {{--<img id="myVideo" src="{{asset('images/53bfb1812d241.jpg')}}" alt="">--}}
        <div class="layer">
            <h1>Love is hard to leave in Yantai</h1>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
        <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
    </div>
    <div class="section" id="section2"><h1>Lovely images <br/>for a lovely page</h1></div>
    <div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>
</body>
</html>