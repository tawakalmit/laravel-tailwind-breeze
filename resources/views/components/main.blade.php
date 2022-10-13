<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <livewire:styles />
    <title>{{ $title }}</title>
</head>
<body class="bg-[#ecf0f1] min-h-screen">

<x-navbar></x-navbar>

{{ $content }}

    
<livewire:scripts /> 
</body>
</html>