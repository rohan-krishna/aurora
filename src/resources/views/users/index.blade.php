@extends('aurora::master')

@section('content')


<div class="container">
    <div class="mt-3">
        <h3>Showing All Users</h3>
        <hr>
        <div class="row">
            <div class="col-md-3">
                @include('aurora::navbar')
            </div>

            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>



@endsection