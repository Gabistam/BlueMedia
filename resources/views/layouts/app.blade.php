<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .min-h-screen-with-footer {
            min-height: calc(100vh - 4rem); /* Adjust based on footer height */
        }
        .bg-gradient-custom {
            background: linear-gradient(135deg, #1E3A8A, #3B82F6, #9333EA);
        }
        .bg-gradient-body {
            background: linear-gradient(135deg, #1E1E2F, #2C2C54);
        }
    </style>
</head>
<body class="bg-gradient-body text-white flex flex-col min-h-screen">
    @include('partials.header')

    <main class="container mx-auto py-8 flex-grow min-h-screen-with-footer">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>