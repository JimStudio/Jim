@extends('layout.index')
@section('content')
<style media="screen">

  .a_stly{
  text-decoration: none;
  margin-left: 42%;
  }
  .div_style{
  background-color: #ffffff;
 width: 350px;
  height: 247px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 200px;
 }
  .p_style{
    height: 10px;
    margin-left: 42%;
  }
  .input_style{
   width: 71%;
   margin-left: 43px;
   height: 23px;
  }
  .div_stly_item{
    padding-top: 81px;
  margin-bottom: 13px;
  }
</style>
  <div class="div_style">
    <div class="div_stly_item">
    <p class="p_style">邮箱</p>
    <input class="input_style" type="email"></input>
    </div>
      <a class="a_stly" href="">发送</a>
</div>

@endsection
