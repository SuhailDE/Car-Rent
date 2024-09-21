@extends('frontend.layout')

@section('content')
    <h1>Book Car: {{ $car->name }}</h1>
    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>

        <button type="submit">Confirm Booking</button>
    </form>
@endsection
