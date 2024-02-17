<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }

        td {
            padding-right: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Información de Fabrica: {{$factory->id}}</h1>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Teléfono contacto</th>
                <th>Artículos provistos</th>
                <th>Fecha de adición</th>
                <th>Fecha de modificación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $factory->telefono_contacto }}</td>
                <td>{{ $factory->articulos_provistos }}</td>
                <td>{{ $factory->created_at }}</td>
                <td>{{ $factory->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>

    @if (count((array)($factory->articles())) == 0)
    <p>Esta fábrica no tiene artículos.</p>
    @else
    <h2>Información de artículos</h2>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Fecha de adición</th>
                <th>Fecha de modificación</th>
                <th>Existencias en esta fábrica</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($factory->articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->descripcion }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td>{{ $article->pivot->existencias }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

    <br>
    <a href="{{ route('factories.index') }}"><button>Volver</button></a>
</body>

</html>