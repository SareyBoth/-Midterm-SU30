@extends('adminlte::page')

@section('title', 'Create Service')

@section('content_header')
    <h1>Create New Service</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Service Form</h3>
        </div>
        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="text" class="form-control" id="logo" name="logo" placeholder="Image" required>
                </div>
                
                <div class="form-group">
                    <label for="service_name">Service Name</label>
                    <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter service name" required>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" required>
                </div>

                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea class="form-control" id="detail" name="detail" rows="4" placeholder="Enter service details" required></textarea>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Service</button>
            </div>
        </form>
    </div>
@stop
