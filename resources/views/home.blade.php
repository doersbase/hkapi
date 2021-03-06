@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <passport-clients></passport-clients>

                    <!-- list of clients people have authorized to access our account -->
                    <passport-authorized-clients></passport-authorized-clients>

                    <!-- make it simple to generate a token right in the UI to play with -->
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                <div class="panel-body">
                    <passport-clients></passport-clients>
                    <passport-authorized-clients></passport-authorized-clients>
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                </div>
            </div>
            <!-- let people make clients -->

        </div>
    </div>
</div>

@endsection
