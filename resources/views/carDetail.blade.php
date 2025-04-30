<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Detail</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <section class="flex flex-col items-center justify-center my-10">
        <img class=" w-lg md:w-md sm:w-xs" src="{{ url('img/inova.png') }}" alt="" srcset="">
        <h1 class=" text-4xl font-bold mb-10 md:text-3xl">TOYOTA INNOVA</h1>
        <div class="spesifikasi flex w-2xl justify-between mb-10">
            <img src="{{ url('img/bahan bakar.svg') }}" alt="" class=" w-25">
            <img src="{{ url('img/bahan bakar.svg') }}" alt="" class=" w-25">
            <img src="{{ url('img/bahan bakar.svg') }}" alt="" class=" w-25">
        </div>
        <table class="table-auto w-2xl border-solid mb-8">
            <thead class=" bg-blue-700 text-white border border-solid border-black">
                <tr>
                    <th class="border border-solid border-black text-xl">Price</th>
                    <th class="border border-solid border-black text-xl">Duration</th>
                </tr>
            </thead>
            <tbody class="border border-solid border-black">
                <tr>
                    <td class="border border-solid border-black text-center text-xl">Rp.300.000</td>
                    <td class="border border-solid border-black text-center text-xl">12 Jam</td>
                </tr>
                <tr>
                    <td class="border border-solid border-black text-center text-xl">Rp.1.000.000</td>
                    <td class="border border-solid border-black text-center text-xl">24 Jam</td>
                </tr>
                <tr>
                    <td class="border border-solid border-black text-center text-xl">Rp.1.300.000</td>
                    <td class="border border-solid border-black text-center text-xl">36 Jam</td>
                </tr>
                <tr>
                    <td class="border border-solid border-black text-center text-xl">Rp.2.000.000</td>
                    <td class="border border-solid border-black text-center text-xl">48 Jam</td>
                </tr>
                <tr>
                    <td class="border border-solid border-black text-center text-xl">Rp.2.300.000</td>
                    <td class="border border-solid border-black text-center text-xl">60 Jam</td>
                </tr>
            </tbody>
        </table>
        <div class="flex gap-5">
            <button class="px-25 py-1 border-2 border-blue-700 rounded-4xl text-xl text-blue-700 font-bold">Back</button>
            <button class="px-25 py-1 border-2 bg-blue-700 border-blue-700 rounded-4xl text-xl text-white font-bold">Book a car</button>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
