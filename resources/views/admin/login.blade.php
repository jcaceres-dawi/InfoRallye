<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Acceso al Panel de Administración</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h2{
            color: #E10600;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #E10600;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c00500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Panel de Administración</h2>

        <form method="POST" action="{{ url('/admin') }}">
            @csrf
            <label for="password">Contraseña de Administración</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <div style="color: red">{{ $message }}</div>
            @enderror
            <button type="submit">Acceder</button>
        </form>
    </div>
</body>

</html>