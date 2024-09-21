@extends('frontend.layout')

@section('content')
    <h1>Welcome to Car Rental Service</h1>
    <p>Browse our available cars for rental.</p>
    <a href="{{ route('cars.index') }}" class="btn">View Cars</a>
@endsection
