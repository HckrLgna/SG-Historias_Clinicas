@extends('theme.frontoffice.layouts.main')
@section('title','Agendar una cita')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/frontoffice/plugins/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontoffice/plugins/pickadate/themes/default.date.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontoffice/plugins/pickadate/themes/default.time.css)}}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            {{--menu lateral--}}
            @include('theme.frontoffice.pages.user.includes.nav')
            {{--seccion columna principal--}}
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            @yield('title')
                        </span>
                        <form action="" method="POST">
                            <input type="text" name="date" class="datepicker">
                            <input type="text" name="time" class="timepicker">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script src="{{ asset('assets/frontoffice/plugins/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/plugins/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/plugins/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/plugins/pickadate/legacy.js') }}"></script>
    <script>
        $('.datepicker').pickadate({

        });
        $('.timepicker').pickatime({

        });
    </script>
@endsection
