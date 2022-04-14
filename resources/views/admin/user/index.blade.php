@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Role
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->getId() }}
                            </td>
                            <td>
                                {{ $user->getName() }}
                            </td>
                            <td>
                                {{ $user->getEmail() }}
                            </td>
                            <td>
                                {{ $user->getRole() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
