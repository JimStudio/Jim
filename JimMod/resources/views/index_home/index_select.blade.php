
  @extends('layout.index')
  @section('content')
    <style>
    .button {
      position: relative;
      border: 1px solid #00c7ec;
      box-shadow: 0 0 0 0 transparent;
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
}
    .button:hover {
      color: white;
      -webkit-transition: all 0.2s ease-out;
      -moz-transition: all 0.2s ease-out;
      transition: all 0.2s ease-out;
}
    .button:hover:before {
      -webkit-animation: shine 0.5s 0s linear;
      -moz-animation: shine 0.5s 0s linear;
      animation: shine 0.5s 0s linear;
}
    .button:active {
      box-shadow: 0 0 0 0 transparent;
      -webkit-transition: box-shadow 0.2s ease-in;
      -moz-transition: box-shadow 0.2s ease-in;
      transition: box-shadow 0.2s ease-in;
}
    .button:before {
       content: '';
       display: block;
       width: 0px;
       height: 86%;
       position: absolute;
       top: 7%;
       left: 0%;
       opacity: 0;
       background: white;
       box-shadow: 0 0 15px 3px white;
       -webkit-transform: skewX(-20deg);
       -moz-transform: skewX(-20deg);
       -ms-transform: skewX(-20deg);
       -o-transform: skewX(-20deg);
       transform: skewX(-20deg);
}

    @-webkit-keyframes shine {
      from {
       opacity: 0;
        left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}
   @-moz-keyframes shine {
     from {
      opacity: 0;
    left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}
   @keyframes shine {
     from {
       opacity: 0;
    left: 0%;
  }
  50% {
    opacity: 1;
  }
  to {
    opacity: 0;
    left: 100%;
  }
}
    .justify-content-center{
     -webkit-box-pack: center!important;
     justify-content: center!important;
  }

    .page-wrapper{
     -webkit-box-orient: vertical;
     -ms-flex-direction: column;
     flex-direction: column;
     min-height: 100vh;
     display: -webkit-box; */
     display: -ms-flexbox;
     display: flex;
     -webkit-box-direction: normal;
   }
    </style>
    <div class="page-wrapper flex-row align-items-center ">
    <div class="container">
        <form class="row justify-content-center">
            <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <a  class="btn btn-block  btn-xm button" href="/Login">已有帐号</a>
                           <a  class="btn btn-block  btn-xm button" href="/Registered">注册新帐号</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  @endsection
