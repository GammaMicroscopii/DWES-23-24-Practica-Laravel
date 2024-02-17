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
    <h1>CRUD DE FÁBRICAS</h1>
    <br>
    <br>
    <a href="factories/create"><button>Añadir fábrica</button></a>
    <br>
    <br>
    <table>
        <thead>
            <tr style="font-weight: 700;">
                <th>Identidad</th>
                <th>Teléfono de contacto</th>
                <th>Artículos provistos</th>
                <th>Fecha creación</th>
                <th>Fecha modificación</th>
                <th>Mostrar</th>
                <th>Modificar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($factories as $factory)
            <tr>
                <td>{{ $factory->id }}</td>
                <td>{{ $factory->telefono_contacto }}</td>
                <td>{{ $factory->articulos_provistos }}</td>
                <td>{{ $factory->created_at }}</td>
                <td>{{ $factory->updated_at }}</td>
                <td>
                    <a href="/factories/{{ $factory->id }}"><button>Mostrar</button></a>
                </td>
                <td>
                    <a href="/factories/{{ $factory->id }}/edit"><button>Modificar</button></a>
                </td>
                <td>
                    <form action="{{ route('factories.destroy', $factory->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Deseas borrarlo en serio?');" type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @empty
            <div>
                No hay nada que mostrar.
            </div>
            @endforelse
        </tbody>
    </table>

    

</body>

</html>