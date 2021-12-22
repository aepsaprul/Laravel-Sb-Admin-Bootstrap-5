@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <h1 class="">{{ __('Dashboard') }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Home</li>
        </ol>
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in!') }},
                <a href="https://github.com/sponsors/taylorotwell" target="_blank">
                    Github
                </a>.
            </div>
        </div>
    </div>
</div>
@endsection