<!DOCTYPE html>
<html>
<head>
    <title>Crear Materia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Crear Materia</h1>
    <a href="{{ route('materias.index') }}" class="btn btn-primary mb-3">Volver</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" name="creditos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select name="tipo" class="form-control" required>
                <option value="basica">Básica</option>
                <option value="formacion">Formación</option>
                <option value="titulacion">Titulación</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valor_hora">Valor Hora:</label>
            <input type="number" step="0.01" name="valor_hora" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control" required>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
</body>
</html>
