@extends('layouts.master')

@section('content')
    @include('layouts.partials.header')
    <div id="appCapsule">
        {{ $slot }}
    </div>
    @include('layouts.partials.bottom-menu')
@endsection
