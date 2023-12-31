@extends('layout.app')

@section('title', 'login')
@section('content')

<div class="row">
    <div class="col-md-4 mx-auto">

        <div class="card">
            <div class="card-header text-center">
                Login
            </div>

            <div class="card-body">

                <form method="POST" action=" {{ url("login") }} ">
                    @csrf

                    @if(session()->has('error_messenge'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_messenge') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
