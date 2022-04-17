@extends('layouts.admin')
@section('content')
    <div class="text-right">
        <a href="{{ route('admin.menu.create') }}" class="btn btn-primary">Add Menu</a>
    </div>
    <div class="card">
        <div class="card body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->getId() }}</td>
                            <td>{{ $menu->getName() }}</td>
                            <td>
                                <a href="{{ route('admin.menu.edit', $menu->getId()) }}" class="btn btn-info"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('admin.menu.delete', $menu->getId()) }}" class="btn btn-danger"><i
                                        class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
