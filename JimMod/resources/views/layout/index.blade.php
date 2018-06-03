<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jim Mod</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.js"></script>
</head>
<style>

 body{
   margin: 0 !important;
   padding: 0!important;
 }


 @keyframes move-twink-back {
     from {background-position:0 0;}
     to {background-position:-10000px 5000px;}
 }
 @-webkit-keyframes move-twink-back {
     from {background-position:0 0;}
     to {background-position:-10000px 5000px;}
 }
 @-moz-keyframes move-twink-back {
     from {background-position:0 0;}
     to {background-position:-10000px 5000px;}
 }
 @-ms-keyframes move-twink-back {
     from {background-position:0 0;}
     to {background-position:-10000px 5000px;}
 }

 @keyframes move-clouds-back {
     from {background-position:0 0;}
     to {background-position:10000px 0;}
 }
 @-webkit-keyframes move-clouds-back {
     from {background-position:0 0;}
     to {background-position:10000px 0;}
 }
 @-moz-keyframes move-clouds-back {
     from {background-position:0 0;}
     to {background-position:10000px 0;}
 }
 @-ms-keyframes move-clouds-back {
     from {background-position: 0;}
     to {background-position:10000px 0;}
 }

 .stars, .twinkling, .clouds {
   position:absolute;
   top:0;
   left:0;
   right:0;
   bottom:0;
   width:100%;
   height:100%;
   display:block;
 }

 .stars {
   background:#000 url(https://jim.kidoworkshop.com/imge/stars.png) repeat top center;
   z-index:0;
 }

 .twinkling{
   background:transparent url(https://jim.kidoworkshop.com/imge/twinkling.png) repeat top center;
   z-index:1;

   -moz-animation:move-twink-back 200s linear infinite;
   -ms-animation:move-twink-back 200s linear infinite;
   -o-animation:move-twink-back 200s linear infinite;
   -webkit-animation:move-twink-back 200s linear infinite;
   animation:move-twink-back 200s linear infinite;
 }



</style>
<body>

<div class="row">
    <div class="stars">
     </div>
      <div class="twinkling " >
        @yield('content')
    </div>
</div>


</body>
</html>
