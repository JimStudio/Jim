@if (count($errors))
  <div class="container">
  <div class="form-group">
    <div class="alert alert-danger " style="background:rgba(255, 0, 0, 0.2)">
      <ul>
        @foreach ($errors -> all() as $error)
          <li style="color:Red"> {{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  </div>
  @endif
