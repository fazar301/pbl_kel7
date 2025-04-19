<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabySpa - Pengalaman Spa Lembut untuk Si Kecil</title>
    <style>
        html {
        scroll-behavior: smooth;
        }
    </style>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <!-- Tailwind CSS and Flowbite via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script> --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#fdf2f8","100":"#fce7f3","200":"#fbcfe8","300":"#f9a8d4","400":"#f472b6","500":"#ec4899","600":"#db2777","700":"#be185d","800":"#9d174d","900":"#831843"}
                    }
                }
            }
        }
    </script>
</head>
<body class="flex min-h-screen flex-col">
    <x-navbar></x-navbar>
    <main class="flex-1">
        {{ $slot }}
    </main>
    <!-- Footer -->
    <x-footer></x-footer>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
