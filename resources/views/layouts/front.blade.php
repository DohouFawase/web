<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{asset('assets/imgs/template/DAHF.png') }}" type="image/x-icon">
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
    @include('container.home.head')
    <title>@yield('title')</title>
</head>
<body class="bg-neutral-0 dark:bg-neutral-dark-0">
    @include('components.frontend.navBar')
    @yield('contente')
    @include('components.frontend.footer')
    
    @include('container.home.foot')
</body>
</html>