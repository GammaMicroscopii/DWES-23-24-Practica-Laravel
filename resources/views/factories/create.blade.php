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
    <h1>NUEVA FÁBRICA</h1>
    <br><br>
    <form action="{{ route('factories.store') }}" method="post">
        @csrf
        @method('POST')
        <table>

            <tr>
                <td>Teléfono contacto</td>
                <td><input type="text" name="telefono_contacto"></td>
            </tr>
            <tr>
                <td>Artículos provistos</td>
                <td><input type="number" name="articulos_provistos"></td>
            </tr>
        </table>
        <br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('factories.index') }}"><button>Volver</button></a>


</body>

</html>