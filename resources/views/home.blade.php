@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



<div class="panel-body">

        <div class="alert alert-success">
            <h1>Go to Analytics page <a href="{{  url('/user/company/metadata') }}" />Click Here</a></h1>
        </div>



</div>



@endsection
