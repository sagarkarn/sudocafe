@extends('layouts.admin')
@section('content')
    <div class="text-right">
        <a href="{{route('admin.menu.create')}}" class="btn btn-primary">Add Menu</a>
    </div>
    <div class="card">
        <div class="card body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{$menu->getId()}}</td>
                            <td>{{$menu->getName()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div>
@endsection