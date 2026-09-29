<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lugar['titulo'] }} - Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <a href="{{ route('lugares.index') }}" class="btn btn-secondary mb-4">&larr; Volver al catálogo</a>

        @if(session('exito'))
            <div class="alert alert-success mb-4">{{ session('exito') }}</div>
        @endif

        <div class="row g-4">
            <div class="col-md-6">
                <img src="{{ $lugar['imagen'] }}" class="img-fluid rounded shadow" alt="{{ $lugar['titulo'] }}">
                <h2 class="mt-3">{{ $lugar['titulo'] }}</h2>
                <p><strong>Departamento:</strong> {{ $lugar['departamento'] }}</p>
                <p><strong>Categoría:</strong> {{ $lugar['categoria'] }}</p>
                <p><strong>Precio aproximado:</strong> {{ $lugar['precio'] > 0 ? '$' . number_format($lugar['precio'], 2) : 'Gratis' }}</p>
                <p class="mt-3">{{ $lugar['descripcion'] }}</p>
            </div>

            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h4 class="mb-3">Solicitar información</h4>
                    <form action="{{ route('contacto.enviar') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="mensaje" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar Formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>