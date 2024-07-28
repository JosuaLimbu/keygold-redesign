<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Key Gold | Jual Beli Emas Antam EOA Bandung Cimahi</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body class="h-full">

    <div class="min-h-full">
        <x-navbar></x-navbar>

        <main class="pt-16">
            {{ $slot }}

        </main>
    </div>

    <script src="js/script.js"></script>

</body>

</html>
