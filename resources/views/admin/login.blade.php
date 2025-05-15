<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Panel de Administración</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            background-color: #fff;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #E10600;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            text-align: left;
        }

        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #E10600;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c00500;
        }

        .error {
            color: red;
            margin-bottom: 1rem;
            font-size: 0.95rem;
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
            <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Acceder</button>
        </form>
    </div>
</body>

</html>