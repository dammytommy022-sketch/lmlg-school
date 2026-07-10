<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('assets/admin/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/style-mob.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/theme-sync.css') }}" rel="stylesheet" />

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    @include('layouts.admin.topbar')

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            @include('layouts.admin.sidebar')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                @yield('content')

            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('assets/admin/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
</body>


</html>