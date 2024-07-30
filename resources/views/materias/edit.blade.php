<!DOCTYPE html>
<html>
<head>
    <title>Editar Materia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Editar Materia</h1>
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

    <form action="{{ route('materias.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $materia->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required>{{ $materia->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" name="creditos" class="form-control" value="{{ $materia->creditos }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select name="tipo" class="form-control" required>
                <option value="basica" {{ $materia->tipo == 'basica' ? 'selected' : '' }}>Básica</option>
                <option value="formacion" {{ $materia->tipo == 'formacion' ? 'selected' : '' }}>Formación</option>
                <option value="titulacion" {{ $materia->tipo == 'titulacion' ? 'selected' : '' }}>Titulación</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valor_hora">Valor Hora:</label>
            <input type="number" step="0.01" name="valor_hora" class="form-control" value="{{ $materia->valor_hora }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control" required>
                <option value="activo" {{ $materia->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ $materia->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
</body>
</html>
