<!DOCTYPE html>
<html>
<head>
    <title>Valor UF</title>
</head>
<body>
    <h1>Valor de la UF</h1>
    @if(isset($ufValue))
        <p>El valor de la UF hoy es: {{ $ufValue }}</p>
    @else
        <p>No se pudo obtener el valor de la UF.</p>
    @endif
</body>
</html>