@extends('adminlte::page')

@section('title', 'user')

@section('content_header')
@stop

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Car Management Form</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="border p-4 rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="car_name" class="form-label">Car Name</label>
            <input type="text" id="car_name" name="car_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descriptions" class="form-label">Description</label>
            <textarea id="descriptions" name="descriptions" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price_daily" class="form-label">Price Daily</label>
            <input type="number" id="price_daily" name="price_daily" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Car Image</label>
            <input type="file" id="images" name="images" accept="image/*" class="form-control">
        </div>
        <div class="mb-3">
            <label for="car_status" class="form-label">Car Status</label>
            <select id="car_status" name="car_status" class="form-select" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
                <option value="maintenance">Maintenance</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="manager_id" class="form-label">Manager ID</label>
            <input type="number" id="manager_id" name="manager_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="car_type_id" class="form-label">Car Type</label>
            <select id="car_type_id" name="car_type_id" class="form-select" required>
                <option value="">Select Car Type</option>
                @foreach($carTypes as $carType)
                    <option value="{{ $carType->id }}">{{ $carType->car_type_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
