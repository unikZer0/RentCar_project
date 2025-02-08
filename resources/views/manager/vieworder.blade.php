@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="mb-6">order</h1>
@stop

@section('content')
<div class=" mt-3">
    <h2 class="mb-4">Your customer order List</h2>
    <table class="table table-bordered">
        <thead class="table">
            <tr>
                <th>book_id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>phone_number</th>
                <th>email</th>
                <th>car_id</th>
                <th>car_name</th>
                <th>Location</th>
                <th>Pickup</th>
                <th>dropoof</th>
                <th>start</th>
                <th>end</th>
                <th>total day</th>
                <th>total price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($orderdata as $order)
                <tr>
                    <td>{{ $order->booking->book_id}}</td>
                    <td>{{ $order->booking->customer->first_name }}</td>
                    <td>{{ $order->booking->customer->last_name }}</td>
                    <td>{{ $order->booking->customer->phone_number }}</td>
                    <td>{{ $order->booking->customer->email }}</td>
                    <td>{{ $order->booking->car->car_id }}</td>
                    <td>{{ $order->booking->car->car_name }}</td>
                    <td>{{ $order->booking->Location }}</td>
                    <td>{{ $order->booking->Pickup }}</td>
                    <td>{{ $order->booking->dropoof }}</td>
                    <td>{{ $order->booking->start }}</td>
                    <td>{{ $order->booking->end }}</td>
                    <td>{{ $order->days }}</td>
                    <td>{{ $order->total }}</td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>
@stop
    
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
