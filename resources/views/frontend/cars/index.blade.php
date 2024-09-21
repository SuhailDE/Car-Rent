@extends('frontend.layout')

@section('content')
    <h1>Available Cars</h1>
    <div class="car-list">
        @foreach($cars as $car)
            <div class="car-item">
                <h2>{{ $car->name }}</h2>
                <p>Brand: {{ $car->brand }}</p>
                <p>Model: {{ $car->model }}</p>
                <p>Year: {{ $car->year }}</p>
                <p>Daily Rent Price: ${{ $car->daily_rent_price }}</p>
                <p>Status: {{ $car->availability ? 'Available' : 'Not Available' }}</p>
                <a href="{{ route('cars.show', $car->id) }}" class="btn">View Details</a>
            </div>
        @endforeach
    </div>
@endsection
