<!DOCTYPE html>
<html>
<head>
    <title>Materias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Lista de Materias</h1>
    <a href="{{ route('materias.create') }}" class="btn btn-primary mb-3">Crear Materia</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Créditos</th>
                <th>Tipo</th>
                <th>Valor Hora</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->descripcion }}</td>
                    <td>{{ $materia->creditos }}</td>
                    <td>{{ $materia->tipo }}</td>
                    <td>{{ $materia->valor_hora }}</td>
                    <td>{{ $materia->estado }}</td>
                    <td>
                        <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
