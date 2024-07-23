@extends('mngr.layouts.template')

@section('page-title')
    Admin Users
@endsection

@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-header">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-row">
                <td>1</td>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
                <td>Admin</td>
                <td><span class="badge bg-success status-badge">Active</span></td>
                <td>
                    <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                </td>
            </tr>
            <tr class="table-row">
                <td>2</td>
                <td>Jane Smith</td>
                <td>jane.smith@example.com</td>
                <td>User</td>
                <td><span class="badge bg-secondary status-badge">Inactive</span></td>
                <td>
                    <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection
