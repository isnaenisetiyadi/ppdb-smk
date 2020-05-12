@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in! -->
                    <p>
                        <router-link to="/foo">Go to Foo</router-link>
                        <router-link to="/bar">Go to Bar</router-link>
                    </p>
                    <!-- route outlet -->
                    <!-- component matched by the route will render here -->
                    <router-view></router-view>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection