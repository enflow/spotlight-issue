<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="m-12">
    <h1 class="text-2xl mb-3">Spotlight testing</h1>

    <button class="bg-gray-500 p-2 rounded text-white" x-data="{}" @click.prevent="$dispatch('toggle-spotlight')">Toggle Spotlight</button>

    @livewire('livewire-ui-spotlight')
    </body>
</html>
