@extends('layouts.master')

@section('content')
    @yield('header')

    <div id="appCapsule">
        {{ $slot }}

        {{-- <div class="appFooter">
            <div class="footer-title">
                Copyright © Finapp 2021. All Rights Reserved.
            </div>
            Bootstrap 5 based mobile template.
        </div> --}}
    </div>
    @include('layouts.partials.bottom-menu')
@endsection
