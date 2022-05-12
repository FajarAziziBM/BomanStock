@extends('layouts.main')
@section('title', 'Products')

@section('container')

  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-4">
      @foreach ($shoes as $shoe)
        
      @endforeach
    </div>
  </div>

@endsection
