<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAKA | Cyber Security Student & Coding Instructor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@700;800&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="--logo-url: url('{{ asset('images/Logo.png') }}'); --partikel-url: url('{{ asset('images/partikel.png') }}');">

    <div class="global-noise"></div>

    @include('sections.navbar')
    @include('sections.hero')
    @include('sections.marque')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.experience')
    @include('sections.projects')
    @include('sections.contact')
    @include('sections.footer')

</body>

</html>