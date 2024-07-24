@extends('mngr.layouts.template')

@section('page-title')
    Edit User
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('mngr.users.edit.update', $editdata->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                            value="{{ $editdata->name }}" required>
                            @error('name')
                                <code>{{ $message }}</code>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number"
                            value="{{ $editdata->phone }}" required>
                            @error('phone')
                                <code>{{ $message }}</code>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Edit User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
