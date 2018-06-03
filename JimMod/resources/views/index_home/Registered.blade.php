@extends('layout.index')
@section('content')
<style >
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
  .input {
    position: relative;
	  z-index: 1;
	  display: block;
	  vertical-align: top;
}

  .input__field {
    position: relative;
	  display: block;
	  float: right;
	  padding: 0.8em;
	  width: 60%;
	  border: none;
    border-radius: 0;
    background: #f0f0f0;
    color: #aaa;
    font-weight: 400;
    font-family: "Avenir Next", "Helvetica Neue", Helvetica, Arial, sans-serif;
    -webkit-appearance: none; /* for box shadows to show on iOS */
}

  .input__field:focus {
	  outline: none;
}

 .input__label {
	display: inline-block;
	float: right;
	padding: 0 1em;
	width: 40%;
	color: #696969;
	font-weight: bold;
	font-size: 70.25%;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

  .input__label-content {
	position: relative;
	display: block;
	padding: 1.6em 0;
	width: 100%;
}

  .graphic {
	  position: absolute;
	  top: 0;
	  left: 0;
	  fill: none;
}


.input--kozakura {
	overflow: hidden;
	padding-bottom: 1em;
}

.input__field--kozakura {
	padding: 0.25em 0.5em;
	margin-top: 1.25em;
	width: 100%;
	background: transparent;
	color: #2F3238;
	font-size: 1.55em;
	opacity: 0;
}

  .input__label--kozakura {
	  width: 100%;
	  text-align: left;
	  position: absolute;
	  top: 1em;
	  pointer-events: none;
	  overflow: hidden;
	  padding: 0 0.25em;
	  -webkit-transform: translate3d(1em, 2.75em, 0);
	  transform: translate3d(1em, 2.75em, 0);
	  -webkit-transition: -webkit-transform 0.3s;
	  transition: transform 0.3s;
}

  .input__label-content--kozakura {
	  padding: 0.4em 0 0.25em;
    color: #A4A5A6;
	  -webkit-transition: -webkit-transform 0.3s;
	  transition: transform 0.3s;
}

  .input__label-content--kozakura::after {
	  content: attr(data-content);
	  position: absolute;
	  font-weight: 800;
	  top: 100%;
	  left: 0;
	  height: 100%;
	  width: 100%;
	  color: #fff;
	  padding: 0.25em 0;
	  text-transform: uppercase;
	  letter-spacing: 1px;
	  font-size: 0.85em;
}

  .graphic--kozakura {
	  fill: #494E57;
	  pointer-events: none;
	  top: 1em;
	  bottom: 0px;
	  height: 4.5em;
	  z-index: -1;
	  -webkit-transition: -webkit-transform 0.7s, fill 0.7s;
	  transition: transform 0.7s, fill 0.7s;
	  -webkit-transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
	  transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
}

  .input__field--kozakura:focus,
  .input--filled .input__field--kozakura {
	  -webkit-transition: opacity 0s 0.35s;
	  transition: opacity 0s 0.35s;
	  opacity: 1;
}

  .input__field--kozakura:focus + .input__label--kozakura,
  .input--filled .input__label--kozakura {
	  -webkit-transition-delay: 0.15s;
	  transition-delay: 0.15s;
	  -webkit-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
}

  .input__field--kozakura:focus + .input__label--kozakura .input__label-content--kozakura,
  .input--filled .input__label-content--kozakura {
	  -webkit-transition-delay: 0.15s;
	  transition-delay: 0.15s;
	  -webkit-transform: translate3d(0, -100%, 0);
	  transform: translate3d(0, -100%, 0);
}

  .input__field--kozakura:focus ~ .graphic--kozakura,
  .input--filled .graphic--kozakura {
	  fill: #fff;
	  -webkit-transform: translate3d(-66.6%, 0, 0);
	  transform: translate3d(-66.6%, 0, 0);
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
<div class="container ">
      @include('shared._errors')
  <form class="row justify-content-center" action="/Registered" method="post">
    {{csrf_field()}}
    <div class="col-md-6">
      <div class="p-4">
        <div class="py-5">
        <div class="input input--kozakura">
          <input class="form-control form-control-sm input__field input__field--kozakura" type="text"  name="user" value="{{ old('user') }}" />
           <label class="from-control-label input__label input__label--kozakura" >
           <span class="input__label-content input__label-content--kozakura" data-content="用户名">用户名</span>
         </label>
        <svg class="graphic graphic--kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
          <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
        </svg>
        </div>
        <div class="form-group input input--kozakura">
          <input type="password"  class="form-control form-control-sm input__field input__field--kozakura" name="password" value="{{ old('password') }}" >
          <label class="from-control-label input__label input__label--kozakura">
          <span class="input__label-content input__label-content--kozakura" data-content="密码">密码</span>
        </label>
        <svg class="graphic graphic--kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
          <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
        </svg>
        </div>
        <div class="form-group input input--kozakura">
          <input type="password" name="password_confirmation" class="form-control form-control-sm input__field input__field--kozakura"  value="{{ old('password_confirmation') }}">
          <label class="from-control-label input__label input__label--kozakura">
          <span class="input__label-content input__label-content--kozakura" data-content="确认密码">确认密码</span>
        </label>
        <svg class="graphic graphic--kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
          <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
        </svg>
        </div>
        <div class="form-group input input--kozakura">
          <input type="email" class="form-control form-control-sm input__field input__field--kozakura"  name="email" value="{{ old('email') }}">
          <label class="from-control-label input__label input__label--kozakura">
          <span class="input__label-content input__label-content--kozakura" data-content="Email">Email</span>
        </label>
        <svg class="graphic graphic--kozakura" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
          <path d="M1200,9c0,0-305.005,0-401.001,0C733,9,675.327,4.969,598,4.969C514.994,4.969,449.336,9,400.333,9C299.666,9,0,9,0,9v43c0,0,299.666,0,400.333,0c49.002,0,114.66,3.484,197.667,3.484c77.327,0,135-3.484,200.999-3.484C894.995,52,1200,52,1200,52V9z"/>
        </svg>
        </div>
        <div class="row">
           <div class="col-12">
           <button  type="submit" class="btn btn-block  btn-xm button" href="/Login" >注册新帐号</button>

           </div>
         </div>
      </div>
    </div>
  </div>
 </form>
</div>
 </div>
 <script src="js/classie.js"></script>
 <script>
   (function() {
     if (!String.prototype.trim) {
       (function() {
         // Make sure we trim BOM and NBSP
         var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
         String.prototype.trim = function() {
           return this.replace(rtrim, '');
         };
       })();
     }

     [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
       // in case the input is already filled..
       if( inputEl.value.trim() !== '' ) {
         classie.add( inputEl.parentNode, 'input--filled' );
       }

       // events:
       inputEl.addEventListener( 'focus', onInputFocus );
       inputEl.addEventListener( 'blur', onInputBlur );
     } );

     function onInputFocus( ev ) {
       classie.add( ev.target.parentNode, 'input--filled' );
     }

     function onInputBlur( ev ) {
       if( ev.target.value.trim() === '' ) {
         classie.remove( ev.target.parentNode, 'input--filled' );
       }
     }
   })();
 </script>
@endsection
