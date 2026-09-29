<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo El Salvador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Destinos Turísticos de El Salvador</h1>
        
        <div class="row g-4">
            @foreach($lugares as $lugar)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $lugar['imagen'] }}" class="card-img-top" alt="{{ $lugar['titulo'] }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $lugar['titulo'] }}</h5>
                            <span class="badge bg-primary mb-2 align-self-start">{{ $lugar['categoria'] }}</span>
                            <p class="card-text text-muted mb-1">{{ $lugar['departamento'] }}</p>
                            <p class="fw-bold text-success mb-3">
                                {{ $lugar['precio'] > 0 ? '$' . number_format($lugar['precio'], 2) : 'Entrada Gratuita' }}
                            </p>
                            <a href="{{ route('lugares.show', $lugar['id']) }}" class="btn btn-outline-primary mt-auto">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>