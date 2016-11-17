@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('menu')
            </div>

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">UserInfo</div>

                    <div class="panel-body">
                        UserInfo!{{$users}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
