<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="container py-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">azienda</th>
                    <th scope="col">stazione_partenza</th>
                    <th scope="col">stazione_arrivo</th>
                    <th scope="col">orario_partenza</th>
                    <th scope="col">orario_arrivo</th>
                    <th scope="col">codice_treno</th>
                    <th scope="col">numero_carrozze</th>
                    {{-- <th scope="col">in_orario</th>
                    <th scope="col">cancellato</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ( $trains as $train )
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    {{-- <td>{{ $train->in_orario }}</td>
                    <td>{{ $train->cancellato }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</body>

</html>
