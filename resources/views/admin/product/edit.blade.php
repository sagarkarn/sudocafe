@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">

            <ul>
                @foreach ($errors as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="{{ route('admin.product.update', $product->getId()) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product->getId() }}">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $product->getTitle() }}" id="title"
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
                        <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="description"
                            aria-describedby="small-description">{{ $product->getDescription() }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="rate">Rate</label>
                        <input type="number" value="{{ $product->getRate() }}"
                            class="form-control @error('rate') is-invalid @enderror" name="rate" id="rate"
                            aria-describedby="small-rate" placeholder="Rate" value="{{ $product->getRate() }}">
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
                        <select class="form-control" value="{{ $product->getMenu()->getId() }}" name="menu_id"
                            id="menu_id">
                            <option value="">Select Menu</option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->getId() }}"
                                    {{ $product->getMenu()->getId() == $menu->getId() ? 'selected=selected' : '' }}>
                                    {{ $menu->getName() }}</option>
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
