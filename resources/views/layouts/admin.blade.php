<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="keywords" content="Fabrication d'amulettes et de talismans,Rituels de protection et de guérison,Bénédiction ,Exorcismes
    ,Traitement des maladies chroniques,Problèmes de couple,Difficultés financières,Malchance,Stress, Géomancien expérimenté
    ,Féticheur traditionnel compétent,Résultats garantis,Discrétion assurée,Prix abordables,Consultations en ligne
    ,Livraison à domicile">
    <meta name="description" content="écouvrez le pouvoir de la géomancie et du fétichisme traditionnel pour résoudre vos problèmes et améliorer votre vie, Résoudre vos problèmes personnels et professionnels
    ,Vous protéger contre les mauvais esprits et les énergies négatives, Attirer la chance, l'amour et la prospérité, Guérir vos maladies physiques et spirituelles">
    {{-- <meta name="robots" content="index,follow "> --}}
    <meta name="google" content="nositelinkssearchbox">
    <meta name="googlebot" content="notranslate">
    <meta name="google" content="nopagereadaloud">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex, nofollow" />. 
    <meta name="og:title" content="@yield('title')">
    <meta name="coverage" content="Worldwide">
    <meta name="distrubition" content="Global">
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css
    ">


<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="https://unpkg.com/slim-select@latest/dist/slimselect.min.js"></script>
    <link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet"></link>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
<!-- include summernote css/js -->
{{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
    @include('container.backend.head')
</head>
<body>
    @include('components.backend.prealode')
    @include('components.backend.sidebar')

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            @include('components.backend.header')

                @yield('content')

        </div>
    </div>

    @include('container.backend.foot')
<script>
//     $(document).ready(function() {
 
//         $('#summernote').summernote({
//         placeholder: 'Hello stand alone ui',
//         tabsize: 2,
//         height: 400,
//         toolbar: [
//           ['style', ['style']],
//           ['font', ['bold', 'underline', 'clear']],
//           ['color', ['color']],
//           ['para', ['ul', 'ol', 'paragraph']],
//           ['table', ['table']],
//           ['insert', ['link', 'picture', 'video']],
//           ['view', ['fullscreen', 'codeview', 'help']]
//         ]
//       });

// })



</script>
</body>
</html>