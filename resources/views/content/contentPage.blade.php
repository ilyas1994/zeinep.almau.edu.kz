{{--@extends('indexMain')--}}

{{--@section('content')--}}




{{--        <div class="row">--}}

{{--            <div class="col-12 mt-5">--}}

{{--                <div class="alert-danger">--}}
{{--                    @error('email')--}}
{{--                    <h3>Email не должен быть пустым и формат должен быть example@example.com</h3>--}}
{{--                    @enderror--}}

{{--                    <div class="alert-danger">--}}
{{--                        @error('number')--}}
{{--                        <h3>Телефон не должен быть пустым и формат должен быть 87771234567</h3>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--            <div class="col-12 text-center">--}}
{{--                <h3 class="mt-4">Высший многопрофильный колледж</h3>--}}
{{--            </div>--}}
{{--            <div class="col-12 justify-content-center align-items-center d-flex mt-3 pb-5">--}}
{{--                <div class="col5">--}}
{{--                    <img style="border-radius: 22px" src="{{ asset('headerimage.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <h1 class="ps-5" style=" font-family: monospace; font-size:62px; font-weight: bold">Зейнеп</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-12 col-lg-12 col-md-12" style="padding-top: 50px;">--}}
{{--                <h4 class="text-center textStyle">Приглашает абитуриентов на базе 9 и 11 классов средней школы для обучения--}}
{{--                    с 1 сентября 2022 года по следующим специальностям:</h4>--}}
{{--            </div>--}}
{{--            <div class="col-12">--}}
{{--                <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">--}}
{{--                <div class="col-12 mt-4 borderStyle">--}}
{{--                    <h5 class="ps-2 textSpeciality">0114 - Подготовка преподавателей начальной школы (педагогика и методика--}}
{{--                        начального обучения)</h5>--}}
{{--                </div>--}}
{{--                <div class="col-12 borderStyle">--}}
{{--                    <h5 class="ps-2 textSpeciality">0413 - Менеджмент и управление</h5>--}}
{{--                </div>--}}
{{--                <div class="col-12 borderStyle">--}}
{{--                    <h5 class="ps-2 textSpeciality">0613 - Разработка и анализ программного обеспечения</h5>--}}
{{--                </div>--}}
{{--                <div class="col-12 borderStyle">--}}
{{--                    <h5 class="ps-2 textSpeciality">1013 - Гостиничное обслуживание, рестораны и сфера питания</h5>--}}
{{--                </div>--}}
{{--                <div class="col-12 borderStyle mb-4">--}}
{{--                    <h5 class="ps-2 textSpeciality">1015 - Путешествие, туризм и досуг</h5>--}}
{{--                </div>--}}
{{--                <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <h3 class="ps-2 pt-4 pb-4" style=" font-style: italic; font-weight: 600; font-family: 'Roboto', sans-serif">--}}
{{--                    Колледж «Зейнеп» обеспечивает абитуриентов государственным грантом и местом в общежитии.--}}
{{--                    Колледж обеспечивает студентов местами профессиональной практики после 1 курса, а также местами работы--}}
{{--                    после окончания колледжа.--}}
{{--                    Для граждан РФ стоимость обучения составляет 33.000 рублей в год с оплатой в тенге, также--}}
{{--                    предоставляется общежитие.--}}
{{--                    Колледж «Зейнеп» располагается в селе Лобаново, Айыртауского района, Северо-Казахстанской области в--}}
{{--                    самом центре живописной Имантау-Шалкарской курортной зоны.--}}
{{--                </h3>--}}
{{--            </div>--}}
{{--            <div class="col-12 d-flex">--}}
{{--                <div class="col-6">--}}
{{--                    <img style="border-radius: 22px; box-shadow: 0 0 10px rgba(0,0,0,0.5)" src="{{ asset('image_1.jpg') }}"--}}
{{--                         alt="">--}}
{{--                </div>--}}
{{--                <div class="col-6">--}}
{{--                    <img style="width: 624px; height: 353px;border-radius: 22px; box-shadow: 0 0 10px rgba(0,0,0,0.5)"--}}
{{--                         src="{{ asset('image2.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="row pt-5">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <h3>Подай заявку для обучения в колледже</h3>--}}
{{--            </div>--}}

{{--            <div class="col-12 justify-content-center d-flex mt-5">--}}
{{--                <p>--}}
{{--                    <a style="width: 200px; height: 40px;" class="btn btn-outline-success" data-bs-toggle="collapse"--}}
{{--                       href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">--}}
{{--                        Подать заявку--}}
{{--                    </a>--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="collapse" id="collapseExample">--}}
{{--                <div class="card card-body ">--}}

{{--                    <form action="{{ route('sendData') }}" method="get">--}}


{{--                        <div class="col-12 justify-content-center d-flex">--}}
{{--                            <div class="form-group col-6 justify-content-center">--}}
{{--                                <label for="exampleInputEmail1">Электронная почта</label>--}}
{{--                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"--}}
{{--                                       placeholder="Введите почту">--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="col-12 justify-content-center d-flex mt-3">--}}
{{--                            <div class="form-group col-6">--}}
{{--                                <label for="exampleInputEmail1">Мобильный номер</label>--}}
{{--                                <input type="text" name="number" class="form-control" id="exampleInputEmail1"--}}
{{--                                       placeholder="Введите мобильный номер телефона">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 justify-content-center d-flex mt-3">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" name="checkBox" id="flexCheckDefault">--}}
{{--                                <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                    Нуждаюсь в общежетии--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 justify-content-center d-flex mt-3">--}}
{{--                            <button id="btnSend" onclick="buttonSubit()" type="submit" class="btn btn-success">Отправить--}}
{{--                            </button>--}}
{{--                            <div id="spinnerID" class="spinner-grow text-success" style="visibility: collapse"--}}
{{--                                 role="status">--}}
{{--                                <span class="visually-hidden">Loading...</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}


{{--                </div>--}}


{{--            </div>--}}

{{--            <div class="col-12" style="margin-bottom: 100px"></div>--}}
{{--        </div>--}}

{{--@endsection--}}
