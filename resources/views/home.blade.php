@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br><a class="nav-link" href="logout">Logout</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav"> 
	                <ul class="navbar-nav">
	                    <li class="nav-item"> 
		                    <a class="nav-link" href="logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
