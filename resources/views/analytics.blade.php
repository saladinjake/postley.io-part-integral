@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('/css/application.css')}}" rel="stylesheet">
 <style>
 .product{
   width:300px;
 }


 div.my_wrapper{
   max-width: 1100px;
   margin: 0 auto;
 }

 h1,h2,h3,h4,h5,h6{
   font-weight: bold;
   margin: 0;
   margin-bottom: 20px !important;
 }

 h1,h2,h3,h4,h5,h6,p{
   margin-bottom: 10px !important;
 }

 p, ul, li,dl, dt, dd, fieldset, input, label{
   font-size: 14px !important;
   line-height: 1.5;
 }

 h1 {
   font-size: 26px !important;}

 h2 {
   font-size: 22px !important;}

 h3 {
   font-size: 20px !important;}

 abbr[title] {
   border: none;}

 a.navbar-brand img{
   display: inline-block !important;
   vertical-align: top;
 }

 a.navbar-brand strong{
   display: inline-block !important;
   vertical-align: center ;
   color: #333;
   line-height: 2;
   font-size: 22px;
 }
 a.navbar-brand strong:hover{
   color: #BF3604
 }
 div.navbar-inner .container{
   padding: 10px 0;
 }

 /*section{
   padding: 40px 0 !important;
 }*/

 section div{
   padding-top: 10px!important;
   padding-bottom: 10px!important;
   text-align: left;
 }
 section#mean_stack{
   color: #f3f4f5;
   padding-top: 0px !important;
   padding-bottom: 0px !important;
 }
 section#mean_stack h2{
   color: #f3f4f5;
 }
 section#mean_stack div.col_content{
   border: 1px solid white;
   -webkit-border-radius: 5px;
           border-radius: 5px;
   padding: 25px;
   min-height: 340px;
 }

 section h2{
   text-shadow: 0px 1px 1px #666;
   text-align: center;
   text-transform: uppercase;
 }

 section#about{
   /* background: #102078 url(../img/bg3.jpg) no-repeat top left; */
   background-size: cover;
 }

 html.test .header{
   /* background: url('../img/testbg.jpg') no-repeat scroll center center / cover transparent !important; */
 }
 html.test3 .header{
   /* background: url('../img/testbg2.jpg') no-repeat scroll center center / cover transparent !important; */
 }

 html.test3 .header{
   display: block;
   position: static;
   width: 100%;
   box-sizing: border-box;
   padding: 0px;
   margin: 0px;
   /* background: url('../img/img_hero.jpg') no-repeat scroll center center / cover transparent; */
   height: 600px;
 }




 .navbar-simple .brand {
 padding-top: 15px;
 padding-bottom: 15px;
 }
 .navbar-simple .navbar-inner {
 background: #fff;
 background: rgba(255, 255, 255, 1);
 filter: none !important;
 box-shadow: 0 2px 15px rgba(0,0,0,0.25);
 -moz-box-shadow: 0 2px 15px rgba(0,0,0,0.25);
 -webkit-box-shadow: 0 2px 15px rgba(0,0,0,0.25);
 border-bottom: 1px solid rgba(0,0,0,0.2);
 }
 .navbar-simple .navbar-inner .nav {
 float: right;
 }
 .navbar-simple .navbar-inner .nav li a {
 background: none;
 -webkit-box-shadow: none;
 -moz-box-shadow: none;
 box-shadow: none;
 color: #777;
 font-size: 13px;
 padding-top: 15px;
 padding-bottom: 15px;
 font-weight: 600;
 }
 .navbar-simple .navbar-inner .nav li a:hover {
 background: none;
 -webkit-box-shadow: none;
 -moz-box-shadow: none;
 box-shadow: none;
 color: #bf3604;
 }
 .navbar-simple .navbar-inner .nav li.active a {
 color: #bf3604;
 }


 .navbar-harvest .navbar-inner {
 background: #f36c00;
 background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #f68a28), color-stop(100%, #f36c00));
 background: -webkit-linear-gradient(top, #f68a28,#f36c00);
 background: -moz-linear-gradient(top, #f68a28,#f36c00);
 background: -o-linear-gradient(top, #f68a28,#f36c00);
 background: -ms-linear-gradient(top, #f68a28,#f36c00);
 background: linear-gradient(top, #f68a28,#f36c00);
 }
 .navbar-harvest .navbar-inner .nav {
 float: right;
 }
 .navbar-harvest .brand {
 color: #fff;
 text-shadow: none;
 padding-top: 20px;
 padding-bottom: 20px;
 }
 .navbar-harvest .navbar-inner .nav li a {
 color: #fff;
 padding-top: 20px;
 padding-bottom: 20px;
 text-shadow: none;
 background: none;
 -webkit-box-shadow: none;
 -moz-box-shadow: none;
 box-shadow: none;
 -webkit-transition: background 0.1s linear,opacity 0.1s linear;
 -moz-transition: background 0.1s linear,opacity 0.1s linear;
 -ms-transition: background 0.1s linear,opacity 0.1s linear;
 -o-transition: background 0.1s linear,opacity 0.1s linear;
 transition: background 0.1s linear,opacity 0.1s linear;
 -webkit-font-smoothing: antialiased;
 opacity: .9;
 font-weight: 600;
 }
 .navbar-harvest .navbar-inner .nav li a:hover {
 background: #f67d0f;
 -webkit-box-shadow: none;
 -moz-box-shadow: none;
 box-shadow: none;
 color: #fff;
 opacity: 1;
 }


 .fixed-bg-div {
   padding-top: 15px !important;
   background-color: transparent;
   background-image: -webkit-linear-gradient(#800b36, rgba(128, 11, 54, 0.50) 56%);
   background-image: -o-linear-gradient(#800b36, rgba(128, 11, 54, 0.50) 56%);
   background-image: linear-gradient(#800b36, rgba(128, 11, 54, 0.50) 56%);
 }
 .fixed-bg-image {
   padding-top: 5px !important;
   background-color: tomato;
   background-image: url('../img/parlex.png') !important;
   background-size: cover !important;
   background-repeat: no-repeat !important;
   background-attachment: fixed !important;
 }

 #_fellow .card{
   height: 450px !important;
 }

 /*#andela_fellow .card*/
 {
   background: -moz-linear-gradient(top,  rgba(128,11,54,0.56) 0%, rgba(171,52,125,0.48) 47%, rgba(218,97,203,0.68) 99%, rgba(219,98,205,0.68) 100%); /* FF3.6+ */
   background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(128,11,54,0.56)), color-stop(47%,rgba(171,52,125,0.48)), color-stop(99%,rgba(218,97,203,0.68)), color-stop(100%,rgba(219,98,205,0.68))); /* Chrome,Safari4+ */
   background: -webkit-linear-gradient(top,  rgba(128,11,54,0.56) 0%,rgba(171,52,125,0.48) 47%,rgba(218,97,203,0.68) 99%,rgba(219,98,205,0.68) 100%); /* Chrome10+,Safari5.1+ */
   background: -o-linear-gradient(top,  rgba(128,11,54,0.56) 0%,rgba(171,52,125,0.48) 47%,rgba(218,97,203,0.68) 99%,rgba(219,98,205,0.68) 100%); /* Opera 11.10+ */
   background: -ms-linear-gradient(top,  rgba(128,11,54,0.56) 0%,rgba(171,52,125,0.48) 47%,rgba(218,97,203,0.68) 99%,rgba(219,98,205,0.68) 100%); /* IE10+ */
   background: linear-gradient(to bottom,  rgba(128,11,54,0.56) 0%,rgba(171,52,125,0.48) 47%,rgba(218,97,203,0.68) 99%,rgba(219,98,205,0.68) 100%); /* W3C */
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8f800b36', endColorstr='#addb62cd',GradientType=0 ); /* IE6-9 */
 }

 #andela_fellow p{
   padding: 0 15px !important;
 }

 .blue-btn-custom {
  background-color: hsl(216, 97%, 42%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0356d2", endColorstr="#0356d2"); background-image: -khtml-gradient(linear, left top, left bottom, from(#0356d2), to(#0356d2)); background-image: -moz-linear-gradient(top, #0356d2, #0356d2); background-image: -ms-linear-gradient(top, #0356d2, #0356d2); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0356d2), color-stop(100%, #0356d2)); background-image: -webkit-linear-gradient(top, #0356d2, #0356d2); background-image: -o-linear-gradient(top, #0356d2, #0356d2); background-image: linear-gradient(#0356d2, #0356d2); border-color: #0356d2 #0356d2 hsl(216, 97%, 42%); color: #fff !important; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.00); -webkit-font-smoothing: antialiased;
 }

 .btn-custom{
   background-color: hsl(293, 97%, 30%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#850296", endColorstr="#850296"); background-image: -khtml-gradient(linear, left top, left bottom, from(#850296), to(#850296)); background-image: -moz-linear-gradient(top, #850296, #850296); background-image: -ms-linear-gradient(top, #850296, #850296); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #850296), color-stop(100%, #850296)); background-image: -webkit-linear-gradient(top, #850296, #850296); background-image: -o-linear-gradient(top, #850296, #850296); background-image: linear-gradient(#850296, #850296); border-color: #850296 #850296 hsl(293, 97%, 30%); color: #fff !important; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.00); -webkit-font-smoothing: antialiased;
 }

 .btn-plain{
   border: 1px solid #fff;
   color: #fff;
 }
 .btn-plain:hover{
   color: #fff;
   font-weight: bold;
   text-decoration: none;
 }





 .icon {
     font-size: 24px;
     width: 100px; padding: 20px;
     color: #fff;
     margin-right: 10px;
     background-color: rgba(255, 255, 255, .7);
     text-align: center;
     display: inline-block;
     border-radius: 100%;
     margin-bottom: 10px;
 }

 .icon img{
     width: 100%;
 }

 .icon-color1 {
   background-color: #2c3e50;;
 }

 section#apply{
     color: white !important;
 }

 .fixed-bg-apply {
   padding-top: -5px !important;
   background-color: tomato;
   /* background-image: url('../img/fellow.jpg') !important; */
   background-size: cover !important;
   background-repeat: no-repeat !important;
   background-attachment: fixed !important;
 }

 .fixed-bg-divapply {
   padding-top: 15px !important;
   background-color: transparent;
   background-image: -webkit-linear-gradient(#B2B2B2, rgba(128, 11, 54, 0.50) 56%);
   background-image: -o-linear-gradient(#B2B2B2, rgba(128, 11, 54, 0.50) 56%);
   background-image: linear-gradient(#B2B2B2, rgba(128, 11, 54, 0.50) 56%);
 }









 /*
 *@description: landing css file
 *
 *@author: Saladin Jake
 *
 */


 a.clicker,a.clicker:focus,a.clicker:hover {color: #000;padding:20px;background-color: #ccc;font-size:10px;border-radius: 50px}
 .btn-default,.btn-default:hover,.btn-default:focus {color: #333;text-shadow: none; background-color: #fff;border: 1px solid #fff;}
 .column input[type="text"], .column select{width:100%; padding: 8px 12px;color: #000;border-radius: 5px;border: 0;
 height: 41px;}

 .mt-20{margin-top:20px;}
 .site-wrapper {width: 100%;float: left;padding: 170px 0 40px;}
 .cover-container {margin-right: auto;margin-left: auto;}
 .form-control{height:41px;}
 .header {position: fixed;top: 0;left: 0;width: 100%; z-index: 10;}
 .header .inner{padding-bottom: 0; text-align: left;}
 .inner {padding:0 30px 30px;}
 .masthead-brand {margin-top: 10px;margin-bottom: 10px;}.masthead-nav > li {display: inline-block;}
 .imageSec {float: left;width: 100%;position: relative;height: 176px;overflow: hidden;margin: 0 0 27px;}
 .imageSec img {height: 100%;width: 100%;}
 .lb-loader,.lightbox{text-align:center;line-height:0}.lb-dataContainer:after,.lb-outerContainer:after{content:"";clear:both}


 .content {
 position: relative;
 min-height: 300px;
 margin: 0 0 0 300px;
 }

 .content--loading {
 background: url(./loading.svg) no-repeat 50% 50%;
 }

 .products {
 margin: 0;
 padding: 2em;
 text-align: center;
 }

 .product {
 display: inline-block;
 width: 300px;
 height: 200px;
 margin: 10px;
 border-radius: 5px;
 background: #fafafa;
 }


 .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;

 }
 .avatar-edit     input {
        display: none;
 }
 .delete {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;

            border-radius: 100%;
            background: #FFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all .2s ease-in-out;
 }

 .selected, .deselected {
          display: inline-block;
          width: 84px;
          height: 44px;
          margin-bottom: 40px;
          border-radius: 10px;
          text-align:center;
          color:#fff;
          padding:20px;

          margin-bottom:180px;
          margin-right:7px;

          background: darkblue;
          border: 1px solid transparent;
          box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
          cursor: pointer;
          font-weight: normal;
          transition: all .2s ease-in-out;
 }
 .deselected{
 background: #ccc;
 opacity:0;
 }




 </style>
  </head>
    <!-- Styles -->






<body class="antialiased">
<div>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

      <section id="about" class="about" >
      <div class="my_wrapper" id="pageupload">
      <div class="container-fluid" style="">
          <div class="row">
              <h2>My page Analytics</h2>
              <div class="row"  id="imageView">


                @foreach($analytics as $post)
                  @if( $post)
                    <?php   $likesObject = $post['likes'];
                            $likesCount = $likesObject['summary']['total_count'];

                            $commentsObject = $post['comments'];
                            $commentsCount = $commentsObject['summary']['total_count'];

                       ?>
                      <div style="height:200px" class="col-sm-4 col-md-4 col-lg-4 product" id="{{time()}}">
                          <div class="card cardbox " >
                             <div class="image-wrapper">
                                  <p>post ID: {{ $post['id'] }}</p>
                              </div>
                              <div class="card-body">
                                  <div class="card-content">
                                    <h3 class="main">likes count(s) {{ $likesCount }}</h3>
                                    <p>comments count(s) {{ $commentsCount  }}</p>

                                  </div>
                                  <div class="">






                                  </div>
                              </div>
                          </div>
                      </div>
                  @endif



                @endforeach

                @if(count($analytics) < 0)
                <div class="col-sm-4 col-md-4 col-lg-4 product" id="{{time()}}">
                    <div class="card cardbox " >

                        <div class="card-body">
                            <div class="card-content">
                              <h3 class="main">No analytics for this page uploaded yet!!</h3>
                              <p>Upload one by creating a page or post to the page and get some user engagements.</p>

                            </div>

                        </div>
                    </div>
                </div>
                @endif


              </div>
          </div>
      </div>
  </div>
  <div id="paginationContainer"></div>
</section>





    @endsection
