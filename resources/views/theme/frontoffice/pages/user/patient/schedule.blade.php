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
                        <form action="{{route('frontoffice.patient.store_schedule')}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="input-field cols12">
                                    <i class="material-icons prefix">people</i>
                                    <select name="" id="speciality">
                                        <option disabled="" value="" selected="">Selecciona una especialidad</option>
                                        @foreach($specialities as $speciality)
                                            <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="doctor">Selecciona la especialidad </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field cols12">
                                    <i class="material-icons prefix">people</i>
                                    <select name="doctor" id="doctor">

                                        @foreach($specialities as $speciality)
                                            @foreach($speciality->users as $user)
                                                @if($user->has_role(config('app.doctor_role')) )
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                    <label for="doctor">Selecciona al doctor</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="datepicker" type="text" name="date" class="datepicker" placeholder="Selecciona una fecha">

                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">access_time</i>
                                    <input id="timepicker" type="text" name="time" class="timepicker" placeholder="Selecciona una hora">

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
            min: true,
            formatSubmit: 'yyyy-m-d'
        });
        var date_picker = input_date.pickadate('picker');


        var input_time = $('.timepicker').pickatime({
            min: [7,30],
            max: [21,0],
            format: 'HH:i',
        });
        var time_picker = input_time.pickatime('picker');

        var speciality = $('#speciality');
        var doctor = $('#doctor');
        speciality.change(function (){
            $.ajax({
               url: "{{route('ajax.user_speciality')}}",
                method: 'GET',
                data: {
                   speciality: speciality.val(),
                },
                success: function (data){
                   console.log(data);
                }
            });
        });
    </script>
@endsection
