@extends('frontend.layout')

@section('content')
    <h1>Your Bookings</h1>
    <table>
        <thead>
            <tr>
                <th>Car</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Cost</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->car->name }}</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                    <td>${{ $rental->total_cost }}</td>
                    <td>{{ $rental->status }}</td>
                    <td>
                        @if($rental->status !== 'Ongoing')
                            <form action="{{ route('rentals.cancel', $rental->id) }}" method="POST">
                                @csrf
                                <button type="submit">Cancel</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
