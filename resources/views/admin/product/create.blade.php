@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">

            <ul>
                @foreach ($errors as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" id="title"
                            class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                            aria-describedby="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{ old('description') }}" id="description"
                            class="form-control @error('description') is-invalid @enderror" placeholder="description"
                            aria-describedby="small-description">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="rate">Rate</label>
                        <input type="number" value="{{ old('rate') }}"
                            class="form-control @error('rate') is-invalid @enderror" name="rate" id="rate"
                            aria-describedby="small-rate" placeholder="Rate" value="{{old('rate')}}">
                        @error('rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="Image"
                            aria-describedby="imageId">
                        <small id="imageId" class="form-text text-muted">image icon</small>
                    </div>

                    <div class="form-group">
                      <label for="menu_id">Menu</label>
                      <select class="form-control" name="menu_id" id="menu_id">
                        <option value="">Select Menu</option>
                        @foreach ($menus as $menu)
                        <option value="{{$menu->getId()}}">{{$menu->getName()}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
