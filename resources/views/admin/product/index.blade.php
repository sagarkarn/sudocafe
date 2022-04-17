@extends('layouts.admin')
@section('content')
    <div class="text-right mb-2">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <div class="card">
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-danger">
                    {{ session('msg') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif



            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Menu</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>

                            <td>{{ $product->getTitle() }}</td>

                            <td>{{ $product->getDescription() }}</td>
                            <td>₹{{ $product->getRate() }}</td>
                            <td>{{ $product->getMenu()->getName() }}</td>

                            @if ($product->getImageUrl())
                                <td><img height="50" width="50" src="/storage/{{ $product->getImageUrl() }}" /></td>
                            @else
                                <td></td>
                            @endif
                            <td>
                                <div style="display: inline-block;" class="nowrap">
                                    <a class="btn btn-sm btn-info"
                                        href="{{ route('admin.product.edit', $product->getId()) }}"><i
                                            class="fas fa-edit    "></i></a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('admin.product.delete', $product->getId()) }}"><i
                                            class="fas fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
