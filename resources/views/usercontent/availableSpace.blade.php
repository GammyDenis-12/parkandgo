@extends('layout/userLayout')

@section('content')

<div class="container">
  <br>
  <br>
      <h1>Available Parking Spaces</h1>
        @foreach ($values as $item)
        <button type="hidden">{{ $item}}</button>
        @endforeach
     <img src="{{asset('parkngo/img/parkingLayout.png')}}" alt="">
</div>
    {{-- <h1>Available Parking Spaces</h1>
@foreach ($values as $item)
 <button type="hidden">{{ $item}}</button>
@endforeach --}}

@endsection