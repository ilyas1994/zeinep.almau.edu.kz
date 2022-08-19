
@extends('includes.main')

@section('title-block')
    Главная
@endsection



        @section('content')

            <style>
                @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Rubik:ital@0;1&display=swap');
                @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Flex:opsz@8..144&family=Roboto:ital,wght@0,400;1,100&display=swap');
                @import url('https://fonts.googleapis.com/css2?family=Rubik&family=Rubik+Mono+One&display=swap');

                body {
                    background-color: #ffffff;
                    font-family: 'Rubik', sans-serif;

                }


                .textStyle {
                    font-family: inherit;
                    color: #000000;
                }

                .textSpeciality {

                    font-family: 'Roboto Flex', sans-serif;
                    font-weight: 500;
                    font-size: 25px;

                }

                .navTextColor {
                    color: black;
                    font-size: 23px;
                    text-decoration: none
                    font-family: 'Rubik Mono One', sans-serif;
                }

                .animate-reduce {
                    /*animation: animate_reduce 2s infinite;*/
                    animation: none;
                }

                @keyframes animate_reduce {

                    0% {

                        transform: scale3d(1, 1, 1);

                    }

                    50% {

                        transform: scale3d(1.05, 1.05, 1.05);

                    }

                    100% {

                        transform: scale3d(1, 1, 1);

                    }

                }

            </style>

            <div class="row">

                <div class="col-12 ">
                @if(Session::has('success'))
                    @php
                        $success = Session::get('success')
                    @endphp
                    @endif
                    @isset($success)

                        <div class="alert alert-success" role="alert">
                            Отлично, уведомление отправлено Вам на почту.
                        </div>
                    @endisset

                    <div class="alert-danger">
                        @error('email')
                        <h3>Email не должен быть пустым и формат должен быть example@example.com</h3>
                        @enderror

                        <div class="alert-danger">
                            @error('number')
                            <h3>Телефон не должен быть пустым и формат должен быть 87771234567</h3>
                            @enderror
                        </div>
                    </div>

                </div>


                <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 justify-content-center align-items-center d-flex mt-1 pb-5" style="position: relative;z-index: 1">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                        @if($data[0]->lang  == 'ru')
                            <img class="img-fluid col-md-12 col-lg-12 col-sm-12 col-xl-12" src="{{ asset('mainHeader.jpeg') }}" alt="">
                        @elseif($data[0]->lang  == 'kz')
                            <img class="img-fluid col-md-12 col-lg-12 col-sm-12 col-xl-12" src="{{ asset('headerKaz.jpeg') }}" alt="">
                        @endif
                    </div>
                    <div class="col-12 justify-content-end d-flex" id="headerCreateResponse" style="position: absolute; z-index: 2; margin-top: 25%; margin-right: 22%;">
{{--                        <button class="btn btn-outline-success"><a style="font-size: 30px; text-decoration: none; color: black" href="#yakor">Подать заявку</a></button>--}}
                        <a onclick="sendResp()"  style="font-size: 30px; text-decoration: none; color: black" href="#yakor"><button style="width: 120%; height: 130%; border-radius: 12px; font-size: 20px; font-family: 'Roboto Flex', sans-serif;" class="btn btn-dark">{{ $data[0]->buttonSendRequestHeader }}</button> </a>



                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-12 col-lg-12 col-md-12" style="padding-top: 50px;">

                    <h4 class="text-center textStyle">{{ $data[0]->invite }}</h4>
                </div>


                {{--Accorduon--}}
                <div class="accordion mt-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                {{ $data[0]->speciality0114 }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <a style="text-decoration: none" target="_blank" href="{{ asset('0114.pdf') }}"> <button class="btn btn-primary"><strong>Приложение</strong></button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{ $data[0]->speciality0413 }}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <a style="text-decoration: none" target="_blank" href="{{ asset('0413.pdf') }}"> <button class="btn btn-primary"><strong>Приложение</strong></button> </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{ $data[0]->speciality0613 }}
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <a style="text-decoration: none" target="_blank" href="{{ asset('0613.pdf') }}"> <button class="btn btn-primary"><strong>Приложение</strong></button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                {{ $data[0]->speciality1013 }}
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <a style="text-decoration: none" target="_blank" href="{{ asset('1013.pdf') }}"> <button class="btn btn-primary"><strong>Приложение</strong></button> </a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                {{ $data[0]->speciality1015 }}
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-center">
                                <a style="text-decoration: none" target="_blank" href="{{ asset('1015.pdf') }}"> <button class="btn btn-primary"><strong>Приложение</strong></button> </a>
                            </div>
                        </div>
                    </div>


                </div>
                {{--End Accorduion--}}

            </div>

            <div class="row">
                <div class="col-12 text-center mt-5" id="1015">
                    <h3>{{ $data[0]->advantageMainText }}</h3>
                </div>
                <div class="col-12">

                        <ul class="list-group">

                            <li class="list-group-item list-group-item-success">{{ $data[0]->advantage1 }}</li>
                            <li class="list-group-item list-group-item-success">{{ $data[0]->advantage2 }}</li>
                            <li class="list-group-item list-group-item-success">{{ $data[0]->advantage3 }}</li>
                            <li class="list-group-item list-group-item-success">{{ $data[0]->advantage4 }}</li>
                            <li class="list-group-item list-group-item-success">{{ $data[0]->advantage5 }}</li>

                        </ul>


                </div>
                <div class="col-12 text-center mt-3 animate-reduce" id="animState">
                    <h4>{{ $data[0]->price}}</h4>
                </div>
            </div>


            <div class="row mb-5" style="background-color: rgba(215,33,157,0.02); border-radius: 15px; padding-bottom: 30px;">
                <div class="col-12 mt-3">
                    <h3>{{ $data[0]->mission }}</h3>
                </div>
                <div class="col-12">
                    <h3 class="ps-2 pt-2 pb-4" style=" font-style: italic; font-weight: 600; font-family: 'Roboto', sans-serif">
                        {{ $data[0]->missionText }}
                    </h3>
                </div>
                <div class="col-12 col-sm-12 col-lg-12 col-md-12 d-sm-flex justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6  col-lg-6 ps-2 mt-2">
                            <img class="img-fluid " style="border-radius: 22px; box-shadow: 0 0 10px rgba(0,0,0,0.5)" src="{{ asset('image_1.jpg') }}"alt="">
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6 ps-2 mt-2">
                        <img class="img-fluid" style="width: 95%; height: 79%;border-radius: 22px; box-shadow: 0 0 10px rgba(0,0,0,0.5)"
                             src="{{ asset('image2.jpg') }}" alt="">
                    </div>
                </div>


            </div>

            <div class="row mt-5 col-12 col-sm-12 col-md-12">


                <div class="col-12 text-center">
                    <h3>{{ $data[0]->setRequestText }}</h3>
                </div>

                <div class="col-12 justify-content-center d-flex mt-5">
                    <p>
                        <a style="width: 200px; height: 40px;" class="btn btn-outline-success" data-bs-toggle="collapse"
                           href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ $data[0]->buttonSetRequest }}
                        </a>
                    </p>
                </div>

                <div class="collapse" id="collapseExample">
                    <div class="card card-body ">

                        <form action="{{ route('send-message') }}" method="get">


                            <div class="col-12 justify-content-center d-flex">
                                <div class="form-group col-6 justify-content-center">
                                    <label for="exampleInputEmail1">{{ $data[0]->email }}</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>


                            <div class="col-12 justify-content-center d-flex mt-3">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">{{ $data[0]->number }}</label>
                                    <input type="text" name="number" class="form-control" id="exampleInputEmail1"">
                                </div>
                            </div>

                            <div class="col-12 justify-content-center d-flex mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="checkBox" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $data[0]->obwagaCheck }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 justify-content-center d-flex mt-3">
                                <button id="btnSend" onclick="buttonSubit()" type="submit" class="btn btn-success">{{ $data[0]->sendButton }}
                                </button>

{{--                                <div id="spinnerID" class="spinner-grow text-success" style="visibility: collapse"--}}
{{--                                     role="status">--}}
{{--                                    <span class="visually-hidden">Loading...</span>--}}
{{--                                </div>--}}
                            </div>

                        </form>


                    </div>


                </div>

                <div class="col-12" style="margin-bottom: 100px"></div>
            </div>

        @endsection



<script>function sendResp() {
        document.getElementById('collapseExample').setAttribute('class', 'collapsed')
    }


    function buttonSubit() {
     // document.getElementById('btnSend').style.visibility="collapse";
     // document.getElementById('spinnerID').style.visibility="visible";

    }

</script>

