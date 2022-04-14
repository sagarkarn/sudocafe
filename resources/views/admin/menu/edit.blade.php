@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <form action="{{ route('admin.menu.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-12 col-form-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Menu Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class=" col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
