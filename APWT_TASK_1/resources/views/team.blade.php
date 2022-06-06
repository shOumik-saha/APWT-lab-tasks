
@extends('layouts.home')
@section('content')

<div class="container ">

    <h1 class="text-success text-center fw-bold">Our Team</h1>
    <br>
    <div class="row ">
     <div class="col">
  <div class="card-body">
  <div class="card mt-5 mx-auto shadow" style="width: 10rem;">
    <img src="{{ URL::asset('/images/Capture2.png') }}" alt="">
</div>
    <h2 class="card-title text-center">Shoumik Saha</h2>
    <p class="card-text text-center">Doctor</p>
  </div>
  </div>
</div>

<div class="col">
  <div class="card-body">
  <div class="card mt-5 mx-auto shadow" style="width: 10rem;">
    <img src="{{ URL::asset('/images/Capture3.png') }}" alt="">
</div>
    <h2 class="card-title text-center">Dip Roy</h2>
    <p class="card-text text-center">Doctor</p>
  </div>
  </div>
</div>

</div>

<div class="row">
     <div class="col">
  <div class="card-body">
  <div class="card mt-5 mx-auto shadow" style="width: 10rem;">
    <img src="{{ URL::asset('/images/Capture4.png') }}" alt="">
</div>
    <h2 class="card-title text-center">Sreejon Roy</h2>
    <p class="card-text text-center">Doctor</p>
  </div>
  </div>
</div>
</div>
<div class="col">
  <div class="card-body">
  <div class="card mt-5 mx-auto shadow" style="width: 10rem;">
    <img src="{{ URL::asset('/images/Capture5.png') }}" alt="">
</div>
    <h2 class="card-title text-center">Mahfuza Sharmili Jui</h2>
    <p class="card-text text-center">Doctor</p>
  </div>
  </div>
</div>


</div>

@endsection