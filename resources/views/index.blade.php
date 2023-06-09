<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>AR-community</title>
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <!-- CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <body>
        <div class="container">
            <div class="p-3 mb-2 bg-light text-gray d-flex">
                <div class="w-50">
                    <img src="{{url('/img/FKI.png') }}" height="60">
                    <img src="{{url('/img/creativecomputing.png') }}" height="80">
                </div>
                <div class="flex-fill">
                    <h2 class="font-weight-light">FCI | CCRG</h2>
                    <h5 class="text-muted">GRANT | PROJECT</h5>
                </div>
            </div>
            <div class="bg-dark-subtle font-weight-bold p-3 mb-2 text-black">
                <h4>AR with Community</h4>
                <p>Project AR application collaboration with Lembaga Kesenian dan Kebudayaan Negeri Sabah (LKNS)</p>
            </div>
            <hr>
            <div class="p-3 mb-2 row g-2">
                <div class="col-6">
                    <h4>AR DanceSabah</h4>
                    <p><a href="https://drive.google.com/file/d/1X3iN1Z60m7Ohk1YTdaQ7GDv7gORlfiJv/view" class="text-secondary">ARdance Privacy Policy</a></p>
                    <p>Youtube link: <a href="https://www.youtube.com/@lkns.project" class="text-muted">youtube.com/@lkns.project</a></p>
                    <form method="get" action="download/AR.LKNS.apk" >
                            <button type="submit" class="p-2" style=" background-color: DodgerBlue; border: none; color: white">
                            Download APK</button>
                    </form>
                </div>
                <div class="col-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{url('/img/Adai-adai.jpg') }}" class="d-block w-100" alt="Adai-adai">
                        </div>
                        <div class="carousel-item">
                        <img src="{{url('/img/Daling-daling.jpg') }}" class="d-block w-100" alt="Daling-daling">
                        </div>
                        <div class="carousel-item">
                        <img src="{{url('/img/Igal Limbayan Lelang.jpg') }}" class="d-block w-100" alt="Igal Limbayan Lelang">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="">Next</span>
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="p-3 mb-2 row g-2">
                <div class="col-4">
                    <h4>AR art</h4>
                    <form method="get" action="download/HariKaamatanAR.apk" >
                            <button type="submit" class="p-2" style=" background-color: DodgerBlue; border: none; color: white">
                            Download APK</button>
                    </form>
                </div>
                <div class="col-8 d-md-flex ">
                    <img class="w-75" src="{{url('/img/Kerbau.jpeg') }}" >
                    <img class="w-50 px-3" src="{{url('/img/Proboscis.jpeg') }}" >
                </div>

            </div>
            <hr>
            <div class="p-3 mb-2">
                <h4>Kaamatan Gameplay</h4>
                <p>Kaamatan games link: <a href="http://mydiabetic-gamification.com/play" class="text-muted">mydiabetic-gamification.com/play</a></p>
            </div>
            <hr>
            <div class="p-3 mb-2 row g-2">
                <div class="col-6">
                    <h4>Antanom AR Storytelling book</h4>
                    <form method="get" action="download/AR Antanom Storybook.apk" >
                        <button type="submit" class="p-2 mb-2" style=" background-color: DodgerBlue; border: none; color: white;">
                        <i class="fa fa-download"></i> Download APK</button>
                    </form>

                    <form method="get" action="download/antanom.pdf" >
                        <button type="submit" class="p-2" style=" background-color: DodgerBlue; border: none; color: white">
                        <i class="fa fa-download"></i> Download Storybook</button>
                    </form>
                </div>
                <div class="col-6">
                    <img class="w-100" src="{{url('/img/antanom.png') }}" >
                </div>

            </div>
            <div class="p-3 mt-2 bg-dark-subtle text-center text-white">
                <p class="text-hide"></p>
            </div>
        </div>
</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>


</html>


