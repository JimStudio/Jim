@extends('layout.index')
@section('content')
<style>
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
  .vt-input-box {
    position: relative;
}

  .vt-input-effect {
    padding: 1px;
    border: 1px solid #fff;
    border-radius:3px;
    background: transparent;
    font-size:1.6rem;
    transition:all 0.1s;
    &:focus {
        outline: none;
        border-left: 2px solid transparent;
        border-right: 2px solid transparent;
        border-top: 2px solid transparent;
    }
}

  .vt-input-box label {
    font-size: 1rem;
    display:block;
    margin-bottom:5px;
    font-weight:500;
    text-transform:uppercase;
}


  .vt-input-effect + .animationBar {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    border-radius:3px;
}

  .vt-input-effect + .animationBar:after,
  .vt-input-effect + .animationBar:before {
    content: '';
    height: 2px;
    width: 0;
    bottom: 0px;
    position: absolute;
    background: #fff;
    transition: 0.2s ease all;
}

  .vt-input-effect + .animationBar:after {
    right: 50%;
}

  .vt-input-effect + .animationBar:before {
    left: 50%;
}

  .vt-input-effect:focus + .animationBar:after,
  .vt-input-effect:focus + .animationBar:before,
  .vt-input-effect:valid + .animationBar:after,
  .vt-input-effect:valid + .animationBar:before {
    width: 50%;
}
  .button {
    background-color: Transparent;
    color: white;
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

 </style>
 <div class="page-wrapper flex-row align-items-center ">
    <div class="container">
      @include('shared._errors')
        <form class="row justify-content-center" action="/login" method="post" id="form_login">
          {{csrf_field()}}
             <div class="col-lg-5 ">
                <div class="p-4 " >
                    <div class="py-4">
                      <div class="form-group vt-input-box">
                          <label class="form-control-label text-white ">用户名</label>
                          <input  class="form-control form-control-sm vt-input-effect"type="text"  name="user" value="{{ old('user') }}">
                          <span class="animationBar"></span>
                      </div>
                      <div class="form-group vt-input-box">
                          <label class="form-control-label text-white ">密码</label>
                          <input type="password" class="form-control form-control-sm vt-input-effect"   name="password" value="{{ old('password') }}" >
                          <span class="animationBar"></span>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button  type="submit" class="btn btn-block  btn-xm button" href="/Home" >注册新帐号</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
