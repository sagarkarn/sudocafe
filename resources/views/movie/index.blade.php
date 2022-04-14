@extends('layouts.app')
@section('content')
    <div class="text-right mb-3">
        <a href="{{ route('movie.create') }}" class="btn btn-primary">Create</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="datatable">
                <thead class="table table-responsive">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Rating
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['movies'] as $item)
                        <tr>
                            <td>
                                {{ $item->getName() }}
                            </td>
                            <td>
                                {{ $item->getRating() }}
                            </td>
                            <td>
                                <div style="display: inline">
                                    <a href="{{ route('movie.edit', $item->getId()) }}" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('movie.delete', $item->getId()) }}" class="btn btn-danger">delete</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
