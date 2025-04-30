<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="m-5 gap-5 flex-wrap">
        <div class="list flex gap-2">
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
