<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

    <title>@yield('title-block')</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');




    .linkSetting {
        text-decoration: none;
        color: black;
        font-size: 18px;
        font-family: 'Rubik', sans-serif;
        margin-left: -10px
    }

    .ic_logo {
        width: 30px;
        height: 30px;
    }

    a {
        outline: none;
    }

</style>

<body>


<div class="container" style="background-color: #ffffff;">

{{--  БУРГЕР  --}}
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 text-center">
            <h5 class="text-white h4">Меню</h5>
            <div class="col-12  justify-content-center d-flex pe-2">
                <a class="pe-2" href="{{ route('switch-lang', 'ru') }}"><img style="width: 50px;" src="{{ asset('russia.png') }}"></a>
                <a href="{{ route('switch-lang', 'kz') }}"><img style="width: 50px;" src="{{ asset('kazakhstan.png') }}"></a>
            </div>
        </div>

        {{-- О колледже--}}
        <div class="dropdown ps-2 pe-3 bg-dark ">
            <button style="border: 1px solid transparent; background-color: transparent; color: black" class="btn btn-secondary dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                О колледже
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" target="_blank" href="{{asset('Koncepcia.pdf')}}">Концепция развития колледжа</a></li>
                <li><a class="dropdown-item" target="_blank" href="{{asset('AcademPlanZeinep.pdf')}}">Академический план колледжа</a></li>
            </ul>
        </div>
        {{--end--}}

        <div class="dropdown ps-2 pe-3 bg-dark">
            <button style="border: 1px solid transparent; background-color: transparent; color: black" class="btn btn-secondary dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Абитуриенту
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#headerCreateResponse">Специальности</a></li>
                <li><a class="dropdown-item" href="#1015" onclick="function enableAnim() {
                            // let anim =  document.getElementById('animState').style.animation='animate_reduce 2s infinite';
                            let anim =  document.getElementById('animState');
                            anim.style.animation='animate_reduce 2s infinite';
                            anim.style.color='red';
                            }
                            enableAnim()">Стоимость</a></li>
            </ul>
        </div>

        {{--Контакты--}}
        <div class="col-12 bg-dark ps-3">
            <a class="nav-link linkSetting text-white" href="#yakor" onclick="function showFooter() {
                        document.getElementById('yakor').style.border='1px solid red';
                    }
                    showFooter()">Контакты</a>
        </div>
        {{--End --}}

    </div>
    {{-- End Бургер--}}



    <nav class="navbar navbar-dark bg-dark d-sm-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
{{----}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light  d-none d-sm-flex" >
        <div class="container-fluid" style="background-color: #e9e9ea">

            <div class="col-12 d-sm-flex">
                <div class="col-6 d-flex justify-content-start align-items-center ps-3">
                    <img class="ic_logo" src="{{ asset('ic_about.png') }}">

                    <div class="dropdown ps-2 pe-3">
                        <button style="border: 1px solid transparent; background-color: transparent; color: black" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            О колледже
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" target="_blank" href="{{asset('Koncepcia.pdf')}}">Концепция развития колледжа</a></li>
                            <li><a class="dropdown-item" target="_blank" href="{{asset('AcademPlanZeinep.pdf')}}">Академический план колледжа</a></li>
                        </ul>
                    </div>

{{--                    <a class="nav-link linkSetting" aria-current="page" href="#">О колледже</a>--}}
                    <img class="ic_logo" src="{{ asset('ic_student.png') }}">

                    <div class="dropdown ps-2 pe-3">
                        <button style="border: 1px solid transparent; background-color: transparent; color: black" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Абитуриенту
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#headerCreateResponse">Специальности</a></li>
                            <li><a class="dropdown-item" href="#1015" onclick="function enableAnim() {
                            // let anim =  document.getElementById('animState').style.animation='animate_reduce 2s infinite';
                            let anim =  document.getElementById('animState');
                            anim.style.animation='animate_reduce 2s infinite';
                            anim.style.color='red';
                            }
                            enableAnim()">Стоимость</a></li>
                        </ul>
                    </div>
{{--                    <a class="nav-link linkSetting" href="#">Абитуриенту</a>--}}
                    <img class="ic_logo" src="{{ asset('ic_phone.png') }}">
                    <a class="nav-link linkSetting" href="#yakor" onclick="function showFooter() {
                        document.getElementById('yakor').style.border='1px solid red';
                    }
                    showFooter()">Контакты</a>
                </div>
                <div class="col-6  justify-content-end d-flex pe-2">
                        <a class="pe-2" href="{{ route('switch-lang', 'ru') }}"><img style="width: 50px;" src="{{ asset('russia.png') }}"></a>
                        <a href="{{ route('switch-lang', 'kz') }}"><img style="width: 50px;" src="{{ asset('kazakhstan.png') }}"></a>
                </div>
            </div>

        </div>

    </nav>

</div>


<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

<div class="container">
    <div class="row">

        <footer class="bg-light text-center text-lg-start" style="background-color: #E9E9EAFF">
            <!-- Copyright -->
            <div class="col-12">

            </div>
            <div class="text-center justify-content-center p-3" id="yakor" style="background-color: rgba(0,0,0,0.2);">
                <p class="text-dark">
                    {{ $data[0]->footerContact }}
                </p>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
</div>


</body>
</html>
