<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Data Form yang Dikirim</h2>
    @if ($data)
        <ul class="list-group">
            @foreach ($data as $key => $value)
                <li class="list-group-item"><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data tersedia.</p>
    @endif
</body>
</html>
