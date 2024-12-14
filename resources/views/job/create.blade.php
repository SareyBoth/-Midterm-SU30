@extends('adminlte::page')

@section('title', 'Create Job')

@section('content_header')
    <h1>Create New Job</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Job Form</h3>
        </div>
        <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="text" class="form-control" id="logo" name="logo" placeholder="Image" required>
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name" required>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title" required>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" required>
                </div>

                <div class="form-group">
                    <label for="about_job">About the Job</label>
                    <textarea class="form-control" id="about_job" name="about_job" rows="4" placeholder="Enter details about the job" required></textarea>
                </div>

                <div class="form-group">
                    <label for="requirement">Requirements</label>
                    <textarea class="form-control" id="requirement" name="requirement" rows="4" placeholder="Enter job requirements" required></textarea>
                </div>

                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter salary" required>
                </div>

                <div class="form-group">
                    <label for="contact_name">Contact Name</label>
                    <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter contact name" required>
                </div>

                <div class="form-group">
                    <label for="contact_email">Contact Email</label>
                    <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter contact email" required>
                </div>

                <div class="form-group">
                    <label for="contact_phone">Contact Phone</label>
                    <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Enter contact phone" required>
                </div>

                <div class="form-group">
                    <label for="detail_job">Job Details</label>
                    <textarea class="form-control" id="detail_job" name="detail_job" rows="4" placeholder="Enter detailed job description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="detail_company">Company Details</label>
                    <textarea class="form-control" id="detail_company" name="detail_company" rows="4" placeholder="Enter company details" required></textarea>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Job</button>
            </div>
        </form>
    </div>
@stop
