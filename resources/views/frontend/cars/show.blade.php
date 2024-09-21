@extends('frontend.layout')

@section('content')
    <h1>{{ $car->name }}</h1>
    <img src="{{ asset($car->image) }}" alt="{{ $car->name }}">
    <p>Brand: {{ $car->brand }}</p>
    <p>Model: {{ $car->model }}</p>
    <p>Year: {{ $car->year }}</p>
    <p>Daily Rent Price: ${{ $car->daily_rent_price }}</p>
    <p>Status: {{ $car->availability ? 'Available' : 'Not Available' }}</p>

    <h3>Book this Car</h3>
    <form action="{{ route('rentals.create', $car->id) }}" method="GET">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>

        <button type="submit">Book Now</button>
    </form>
@endsection
