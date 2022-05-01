@extends('theme.frontoffice.layouts.main')
@section('title','Agendar una cita')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/frontoffice/plugins/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontoffice/plugins/pickadate/themes/default.date.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontoffice/plugins/pickadate/themes/default.time.css')}}">
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
                            @yield('title' )
                        </span>
                        <form action="" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field cols12">
                                    <i class="material-icons prefix">people</i>
                                    <select name="doctor" id="doctor">
                                        <option value="1"> Ramirez</option>
                                    </select>
                                    <label for="doctor">Selecciona al doctor</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="datepicker" type="text" name="date" class="datepicker">
                                    <label for="datepicker">Selecciona un fecha</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">access_time</i>
                                    <input id="timepicker" type="text" name="time" class="timepicker">
                                    <label for="timepicker">Selecciona una hora </label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect weves-light doctype" type="submit">Agendar <i class="material-icons right">send</i> </button>
                            </div>
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
        $('select').formSelect();
        var input_date = $('.datepicker').pickadate({
            min: true
        });
        var date_picker = input_date.pickadate('picker');


        var input_time = $('.timepicker').pickatime({
            min: 4
        });
        var time_picker = input_time.pickatime('picker');
    </script>
@endsection
