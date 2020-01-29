@extends('layouts.index')

@section('content')
@auth
    
<form>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" value=" {{ Auth::user() -> name }} ">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" {{ Auth::user() -> email }} ">
    </div>
  </div>
</form>

<form action=" {{ route('userImage.set') }} " method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')
  <input type="file" name="image">
  <input type="submit" value="SAVE IMAGE">
</form>

@endauth
    
@endsection