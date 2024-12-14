@extends('adminlte::page')

@section('title', 'Data Table with Delete')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Service Table</h1>
        <div>
            <form action="{{ route('services.create') }}" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-dark">
                    Create New
                </button>
            </form>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>City</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $index)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $index->service_name }}</td>
                            <td>{{ $index->location }}</td>
                            <td>{{ $index->country }}</td>
                            <td>$ {{ $index->price }}</td>
                            <td>
                                <!-- Delete Form -->
                                <form action="{{ route('services.destroy', $index->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this job?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="pagination-container mt-5 mb-5 d-flex justify-content-end" >
        {{ $services->links('pagination::bootstrap-4') }}
    </div>
@stop

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            // Confirmation dialog for delete
            $('.delete-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                if (confirm('Are you sure you want to delete this record?')) {
                    this.submit(); // Submit the form if confirmed
                }
            });
        });
    </script>
@stop
