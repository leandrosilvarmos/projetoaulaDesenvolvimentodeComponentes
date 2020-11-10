<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/condominio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3 class="mb-0"><i class="fas fa-fire-alt"></i></h3>
            </a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto ">
                    <a href="" class="nav-link text-white p-2 font-weight-bold">
                        <p>Bem vindo - {{ Auth::user()->name }}</p>
                    </a>

                </ul>

                <a class="nav-link text-white p-2 font-weight-bold" href="{{ route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>


            </div>
        </div>
    </nav>
    <!-- nav bar ends -->


    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Post-->
            <section class="mt-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Featured Image-->
                        <div class="card mb-4 wow fadeIn">

                            <img src="https://sigaofisco.com.br/wp-content/uploads/2020/05/COVID-19-SP-FLEXIBILIZA%C3%87%C3%83O-DA-QUARENTENA-DECRETO-64994-2020.png" class="img-fluid" alt="">

                        </div>
                        <!--/.Featured Image-->

                        <!--Card-->



                        <div class="container mt-5">
                            <h3 class="pt-4 d-inline latest-news">Ultimas Noticias</h3>

                            <!--  <p class="h5 text-center text-muted">Awesome featured templates</p> -->
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="images/jelly-pro-3.jpg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-dark">
                                                <a href="#" class="text-decoration-none text-dark font-weight-bold">
                                                    Title of a blog post
                                                </a>
                                            </h4>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>

                                        </div>
                                        <div class="card-footer text-muted border-0 bg-white">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="images/jelly-pro-2.jpeg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-dark">
                                                <a href="#" class="text-decoration-none text-dark font-weight-bold">
                                                    Title of a blog post
                                                </a>
                                            </h4>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>

                                        </div>
                                        <div class="card-footer text-muted border-0 bg-white">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="images/jelly-pro-1.jpeg" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3 text-dark">
                                                <a href="#" class="text-decoration-none text-dark font-weight-bold">
                                                    Title of a blog post
                                                </a>
                                            </h4>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>

                                        </div>
                                        <div class="card-footer text-muted border-0 bg-white">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4 wow fadeIn">

                            <div class="card-header font-weight-bold">
                                <span> Regras do condominio </span>

                            </div>

                            <!--Card content-->
                            <div class="card-body">

                                <div class="media d-block d-md-flex mt-3">
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">

                                        @foreach($regras as $regra)

                                        <p>{{$regra->descricao}}</p>
                                        <hr>
                                        @endforeach
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body">

                                <p class="h5 my-4"> Fique por dentro... </p>


                                <blockquote class="blockquote">
                                    <footer class="blockquote-footer">Qualquer duvida
                                        <cite title="Source Title">Entre em contato na administraçõ do condominio</cite>
                                    </footer>
                                </blockquote>

                                @foreach($noticias as $noticia)

                                <p class="h5 my-4">{{$noticia->titulo}} </p>

                                <p>{{$noticia->plubicacao}}</p>
                                <hr>
                                @endforeach


                            </div>

                        </div>



                        <div class="card mb-4 wow fadeIn">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <p class="h5 my-4">Parcerias do Condominio</p>

                                <p> Conheça alguns de nossos parceiros, que estão junto nessa luta contra a COVID-19.</p>



                                <!-- Logo carousel -->
                                <div id="carouselExampleSlidesOnly" class="carousel slide mt-2" data-ride="carousel" data-interval="1800">
                                    <div class="carousel-inner">
                                        <!-- First slide -->
                                        <div class="carousel-item">
                                            <!--Grid row-->
                                            <div class="row">

                                                <!--First column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://e7.pngegg.com/pngimages/723/118/png-clipart-unilever-business-logo-dove-management-business-blue-text.png" class="img-fluid px-4" alt="Nike - logo" style="max-height: 40px">
                                                </div>
                                                <!--/First column-->

                                                <!--Second column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://sp156.s3-sa-east-1.amazonaws.com/logo_cidadeSP.png" class="img-fluid px-4" alt="Amazon - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Second column-->

                                                <!--Third column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://logodownload.org/wp-content/uploads/2017/03/ministerio-da-saude-logo-2.png" class="img-fluid px-4" alt="Sony - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Third column-->

                                                <!--Fourth column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/samsung.png" class="img-fluid px-4" alt="Samsung - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Fourth column-->

                                            </div>
                                            <!--/Grid row-->
                                        </div>
                                        <!-- First slide -->

                                        <!-- Second slide -->
                                        <div class="carousel-item active carousel-item-left">
                                            <!--Grid row-->
                                            <div class="row">

                                                <!--First column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://img2.gratispng.com/20180910/kyo/kisspng-logo-sabesp-vector-graphics-font-brand-clientes-5b96dc80bfafd6.1718647715366135047852.jpg" class="img-fluid px-4" alt="Airbus - logo" style="max-height: 40px">
                                                </div>
                                                <!--/First column-->

                                                <!--Second column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://seeklogo.com/images/Y/ype-logo-3DD4C4D655-seeklogo.com.png" class="img-fluid px-4" alt="Yahoo - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Second column-->

                                                <!--Third column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://i.pinimg.com/originals/a1/2e/c3/a12ec3e5b9496e9ce5088a287720644a.png" class="img-fluid px-4" alt="Deloitte - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Third column-->

                                                <!--Fourth column-->
                                                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
                                                    <img src="https://mdbootstrap.com/img/logo/brands/ge.png" class="img-fluid px-4" alt="GE - logo" style="max-height: 40px">
                                                </div>
                                                <!--/Fourth column-->

                                            </div>
                                            <!--/Grid row-->
                                        </div>
                                        <!-- Second slide -->


                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4 mb-4">



                        <!--Card : Dynamic content wrapper-->
                        <div class="card mb-4 text-center wow fadeIn">

                            <div class="card-header">Entre em contato conosco, que iremos lhe retornar em breve</div>

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Default form login -->
                                <form>

                                    <!-- Default input email -->
                                    <label for="defaultFormEmailEx" class="grey-text"> Seu Nome</label>
                                    <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                                    <br>

                                    <!-- Default input password -->
                                    <label for="defaultFormNameEx" class="grey-text">Deixe seu E-mail</label>
                                    <input type="text" id="defaultFormNameEx" class="form-control">

                                    <label for="defaultFormNameEx" class="grey-text mt-2">Deixe seu E-mail</label>
                                    <textarea name="" id="" cols="40" rows="5"></textarea>

                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md" type="submit">Enviar</button>
                                    </div>
                                </form>
                                <!-- Default form login -->

                            </div>

                        </div>
                        <!--/.Card : Dynamic content wrapper-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Post-->

        </div>
    </main>

</body>

</html>