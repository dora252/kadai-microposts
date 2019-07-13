@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            @include('users.navtabs', ['user' => $user])
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection