<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">


<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <x-header></x-header>
        {{ $slot }}
        <x-footer></x-footer>
    </section>
</body>