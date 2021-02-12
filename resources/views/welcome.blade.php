


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>


.main_container {
    max-width: 740px;
    height: 100%;
    margin: 10px auto 0px auto;
}

.in_container {
    background: #fff;
    border-radius: 2px;
    box-shadow: 0 0 6px #c9d1de;
    -webkit-box-shadow: 0 0 6px #c9d1de;
    -moz-box-shadow: 0 0 6px #c9d1de;
    -o-box-shadow: 0 0 6px #c9d1de;
}

.back_link {
    display: block;
    text-decoration: none;
    margin-top: 80px;
    text-align: center;
    font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #3E3E3E;
    font-size: 16px;
    letter-spacing: 1px;
}

.back_link .back_arrow_icon {
    vertical-align: middle;
    margin-right: 10px;
}

html {
    width: 100%;
}

body {
    width: 100%;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    mso-margin-top-alt: 0px;
    mso-margin-bottom-alt: 0px;
    mso-padding-alt: 0px 0px 0px 0px;
    background: #fff;


    font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

p,
h1,
h2,
h3,
h4 {
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
}

table {
    font-size: 14px;
    border: 0;
}

img {
    border: none!important;
}

@media only screen and (max-width: 600px) {
body[yahoo] .full_width_600 {
    width: 90% !important;
}
}

@media only screen and (max-width: 700px) {
body[yahoo] .full_width_700 {
    width: 100% !important;
}
body[yahoo] .txt_center {
    text-align: center !important;
}
body[yahoo] .separator {
    height: 40px !important;
}
}

.bg-gradient1 span,
.bg-gradient1:before {
    background: #52a0fd;
    background: -moz-linear-gradient(left, #52a0fd 0%, #00e2fa 80%, #00e2fa 100%);
    background: -webkit-linear-gradient(left, #52a0fd 0%, #00e2fa 80%, #00e2fa 100%);
    background: linear-gradient(to right, #52a0fd 0%, #00e2fa 80%, #00e2fa 100%);
}

.bg-gradient3 span,
.bg-gradient3:before {
    background: #fa6c9f;
    background: -moz-linear-gradient(left, #fa6c9f 0%, #ffe140 80%, #ffe140 100%);
    background: -webkit-linear-gradient(left, #fa6c9f 0%, #ffe140 80%, #ffe140 100%);
    background: linear-gradient(to right, #fa6c9f 0%, #ffe140 80%, #ffe140 100%);
}

.wrapper {
    margin: 0% auto;
    text-align: center;
    transform-style: perserve-3d;
    perspecive: 400px;
}

a {
    text-decoration: none;
}

a:hover,
a:focus,
a:active {
    text-decoration: none;
}

.fancy-button {
    display: inline-block;
    margin: 0px;
    font-family: 'Montserrat', Helvetica, Arial, sans-serif;
    font-size: 5px;
    letter-spacing: 0.03em;
    text-transform: uppercase;
    color: #fff;
    top: 55%;
    margin-top: -6em;
    width: 100%;
    height: 0.199em;
}

.fancy-button:before {
    content: '';
    display: inline-block;
    height: 20px;
    position: absolute;
    z-index: -1;
    border-radius: 30em;
    filter: blur(20px) brightness(0.95);
    transform-style: preserve-3d;
    transition: all 0.3s ease-out;
}

.fancy-button i {
    font-size: 1em;
    vertical-align: middle;
}

.fancy-button span {
    display: inline-block;
    padding: 13px 60px;
    border-radius: 50em;
    position: relative;
    z-index: 2;
    will-change: transform, filter;
    transform-style: preserve-3d;
    transition: all 0.3s ease-out;
}

.fancy-button:focus,
.fancy-button:active {
    color: #fff;
}

.fancy-button:hover {
    color: #fff;
}

.fancy-button:hover span {
    filter: brightness(1.05) contrast(1.05);
    transform: scale(0.95);
}

.fancy-button:hover:before {
    bottom: 0;
    filter: blur(10px) brightness(0.95);
}

.fancy-button.pop-onhover:before {
    opacity: 0;
    bottom: 10px;
}

.fancy-button.pop-onhover:hover:before {
    bottom: -7px;
    opacity: 1;
    filter: blur(20px);
}

.fancy-button.pop-onhover:hover span {
    transform: scale(1.04);
}

.fancy-button.pop-onhover:hover:active span {
    filter: brightness(1) contrast(1);
    transform: scale(1);
    transition: all 0.15s ease-out;
}

.fancy-button.pop-onhover:hover:active:before {
    bottom: 0;
    filter: blur(10px) brightness(0.95);
    transition: all 0.2s ease-out;
}

*,
*:before,
*:after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html,
body {
    width: 100%;
    height: 500%;
    overflow-x: hidden;
}

body {
    background-color: #fff;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-size: 1em;
    color: #696969;
    -webkit-font-smoothing: antialiased;
}

ol,
ul {
list-style: none;
}

a {
text-decoration: none;
color: inherit;
}

h1 {
margin: 1em 0;
}

p {
margin: 0.9em 0;
line-height: 1.5;
}

::selection {
background-color: #e53935;
color: #eee;
}

.menu-toggle {
display: none;
}

.mobile-bar {
z-index: 10;
position: fixed;
top: 0;
left: 0;
padding: 0 25px;
/*BAR HOW MUCH IN RIGHT*/
width: 100%;
height: 65px;
background-color: white;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.menu-icon {
float: right;
display: block;
position: relative;
width: 25px;
height: 100%;
cursor: pointer;
transition: transform 300ms ease-in;
/*the bar to X*/
}

.menu-icon > span {
display: block;
position: absolute;
top: 55%;
margin-top: -0.3em;
width: 100%;
height: 0.199em;
border-radius: 1px;
background-color: #696969;
transition: transform 300ms ease-in;
}

.menu-icon > span:before,
.menu-icon > span:after {
content: "";
position: absolute;
width: 100%;
height: 100%;
border-radius: 1px;
background-color: #696969;
transition: transform 300ms ease;
}

.menu-icon > span:before {
transform: translateY(-0.6em);
}

.menu-icon > span:after {
transform: translateY(0.6em);
}


/*need this for bringing down the examples*/

.menu-toggle:checked + .mobile-bar .menu-icon {
transform: rotate(45deg);
}

.menu-toggle:checked + .mobile-bar span:before,
.menu-toggle:checked + .mobile-bar span:after {
transform: rotate(90deg);
}


/*needed*/

.menu-toggle:checked ~ .header {
visibility: visible;
opacity: 1;
transition-delay: 0s;
}

.header {
visibility: hidden;
opacity: 0;
position: fixed;
top: 0;
left: 0;
padding-top: 60px;
width: 100%;
height: 100%;
background-color: white;
padding-right: 5.7px;
color: #eee;
transition: opacity 300ms ease-in, visibility 0s ease-in 300ms;
}

.header nav,
.header ul {
height: 100%;
}

.header li {
border-bottom: 1px solid #eee;
color: #505050;
/*text on navbar*/
font-weight: 430;
line-height: 2.4;
/*height of the navbar*/
font-size: 15px;
letter-spacing: 0.2px;
font-weight: 600;
}

.header li:hover {
color: #696969;
transition: color 300ms ease-in;
}

.header a {
display: block;
padding: 25px;
transition: background-color 300ms ease-in;
}

.navbar-brand {
padding: 0px;
}

.navbar-brand>img {
height: 40px;
width: auto;
z-index: 10;
position: fixed;
top: 13.45px;
left: 0;
padding: 0 25px;
/*BAR HOW MUCH IN RIGHT*/
background-color: white;
}

.test {
top: 0;
width: 100%;
position: fixed;
}

@media (min-width: 1000px) {
.mobile-bar {
    display: none;
}
.header {
    z-index: 5;
    position: relative;
    left: 0;
    padding-top: 0;
    width: 100%;
    height: auto;
    overflow: auto;
    visibility: visible;
    opacity: 1;
    text-align: right;
}
.header li {
    display: inline-block;
    margin-right: -6px;
    /* fix the inline-block gap */
    border: none;
    text-align: left;
}
.header a {
    padding: 15px 35px;
    /*header height and text spacing*/
}
}




















.main {
  /* background: #fcc; */
  margin-bottom: 10px;
  width:70%;

}
.side {
  background: #fff;
  width:30%;
}
.main,
.side {
  padding: 2%;
  border-radius: 10px;
  margin-left:10px;
}

@media ( min-width : 600px ){
	.flexbox {
    display: -webkit-flex;
    display: flex;
	}
  .main {
    margin: 0 10px 0 0;
  }
}





















#slideshow {
    width:950px;
    margin:0 auto;
    overflow:hidden;
}

.containers {
    width:2800px; /* 300 x 4 */
    position:relative;
    -webkit-animation:slide 8s ease-in-out infinite;
    -moz-animation:slide 8s ease-in-out infinite;
    -ms-animation:slide 8s ease-in-out infinite;
    -o-animation:slide 8s ease-in-out infinite;
    animation:slide 8s ease-in-out infinite;
}

.containers img {
    /* width:700px; */
    height:400px;
    float:left;
}



.containers:hover {
   animation-play-state:paused;
   -webkit-animation-play-state:paused;
}

@-webkit-keyframes slide {
    0% {left:0;}
    25% {left:-300px;}
    50% {left:-600px;}
    75% {left:-900px;}
    100% {left:0;}
}
@-moz-keyframes slide {
    0% {left:0;}
    25% {left:-300px;}
    50% {left:-600px;}
    75% {left:-900px;}
    100% {left:0;}
}
@-ms-keyframes slide {
    0% {left:0;}
    25% {left:-300px;}
    50% {left:-600px;}
    75% {left:-900px;}
    100% {left:0;}
}
@-o-keyframes slide {
    0% {left:0;}
    25% {left:-300px;}
    50% {left:-600px;}
    75% {left:-900px;}
    100% {left:0;}
}
@keyframes slide {
    0% {left:0;}
    25% {left:-300px;}
    50% {left:-600px;}
    75% {left:-900px;}
    100% {left:0;}
}






        </style>
    </head>
    <body style="height:600px;overflow: hidden;" >
        <div class="flex-center position-ref">







  <div>
      <div class="test">
          <input type="checkbox" class="menu-toggle" id="menu-toggle">
          <div class="mobile-bar">
              <label for="menu-toggle" class="menu-icon">
                  <span></span>
              </label>
          </div>

          <header class="header">
              <nav>
                  <ul>
                    @if (Route::has('login'))

                            @auth
                                 <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                                 <li><a href="{{ route('login') }}">Login</a></li>
                                 <li><a href="{{ route('register') }}">Register</a></li>
                            @endauth

                    @endif
                      <!-- <li><a href="#" class="fancy-button pop-onhover bg-gradient3"><span>Sign Up</span></a></li> -->

                  </ul>
              </nav>
          </header>

          <a class="navbar-brand" href="https://codepen.io/conorjmcnamara/" style="padding:0px;">
              <img src="https://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png">
          </a>

      </div>
  </div>


  <div class="content" >


    <div class="flexbox" style="margin-top:40px">
  <article class="main">
    <h1>Posted Demo</h1>


    <div id="slideshow">
    <div class="containers">
      <img src="{{ asset('/images/aa.jpg') }}"  style="margin:0px auto">
          <img src="{{ asset('/images/bb.jpg') }}"  style="margin:0px auto">
            <img src="{{ asset('/images/cc.jpg') }}"  style="margin:0px auto">
            <img src="{{ asset('/images/dd.jpg') }}"  style="margin:0px auto">

    </div>
   </div>
  </article>
  <section class="side">
    <h1>Posted Demo</h1>
    <p>
      A lorem ipsum story to get you started. Get Lorem say noDupe LATEM saro sarum to go market for loko dodo gonosh bu ba rum... hehe!!
    </p>

    <a class="navbar-brand" href="{{ url('/login') }}" >Get Started</a>
  </section>
</div>

  </div>
        </div>
    </body>
</html>
