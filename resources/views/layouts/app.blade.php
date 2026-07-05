<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'CJ Global Express Group Unlimited')</title>
    <meta name="description" content="@yield('meta_description', 'A diversified global conglomerate driving growth across construction, mining, logistics, properties, hospitality and beyond. Operating in 32+ countries.')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="CJ Global Express Group Unlimited">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', $__env->yieldContent('title', 'CJ Global Express Group Unlimited'))">
    <meta property="og:description" content="@yield('og_description', $__env->yieldContent('meta_description', 'A diversified global conglomerate operating in 32+ countries across 9 divisions.'))">
    <meta property="og:image" content="{{ asset('images/og-preview.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CJ Global Express Group Unlimited">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', $__env->yieldContent('title', 'CJ Global Express Group Unlimited'))">
    <meta name="twitter:description" content="@yield('og_description', $__env->yieldContent('meta_description', 'A diversified global conglomerate operating in 32+ countries across 9 divisions.'))">
    <meta name="twitter:image" content="{{ asset('images/og-preview.jpg') }}">

    {{-- Favicon — all formats for broad browser/device support --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    {{-- Design System CSS --}}
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Font Awesome 6 Free --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('styles')
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Scroll Reveal Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        });
    </script>

    @stack('scripts')
</body>
</html>
