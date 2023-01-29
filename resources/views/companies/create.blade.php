@extends('layout.app')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
                </div>
                <center class="pull-left mb-2">
                    <h2>Insert a  Company</h2>
                </center>

            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-2">
                    <label><strong>Company Name:</strong></label>
                    <div class="form-group ">
                        <input type="text" name="name" class="form-control" placeholder="Company Name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="ol-md-12 mb-2">
                <div class="form-group">
                    <strong>Company Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Company Email">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="ol-md-12 mb-2">
                <div class="form-group">
                    <strong>Company Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Company Address">
                    @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success mt-0">Add Company</button>
    </div>
    </form>
    </div>
@endsection
