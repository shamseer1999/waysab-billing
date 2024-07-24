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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($results))
                    @foreach ($results as $item)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('mngr.users.edit', $item->id) }}" title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No record found</td>
                    </tr>
                @endif
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
