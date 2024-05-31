<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greedy Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }
        button {
            padding: 12px;
            border: none;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
        .error-messages {
            color: #ff0000;
            margin-bottom: 20px;
            text-align: left;
        }
        .error-messages ul {
            padding-left: 20px;
        }
        .error-messages li {
            list-style-type: disc;
        }
        .session-error {
            color: #ff0000;
            margin-bottom: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Greedy Komputer Selection</h1>
        
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div class="session-error">
                <p>{{ session('error') }}</p>
            </div>
        @endif

        <form action="{{ route('search') }}" method="POST" id="greedyForm">
            @csrf

            <!-- Minimum RAM -->
            <div>
                <label for="min_ram">Minimum RAM:</label>
                <input type="number" name="min_ram" id="min_ram" value="{{ old('min_ram') }}">
            </div>
            
            <!-- Minimum Seri Intel -->
            <div>
                <label for="min_seri_intel">Minimum Seri Intel:</label>
                <input type="number" name="min_seri_intel" id="min_seri_intel" value="{{ old('min_seri_intel') }}">
            </div>
            
            <!-- Minimum Generasi -->
            <div>
                <label for="min_generasi">Minimum Generasi:</label>
                <input type="number" name="min_generasi" id="min_generasi" value="{{ old('min_generasi') }}">
            </div>

            <!-- Maximum Price -->
            <div>
                <label for="max_price">Maximum Price:</label>
                <input type="number" name="max_price" id="max_price" value="{{ old('max_price') }}">
            </div>
            
            <!-- Button to submit form -->
            <button type="submit">Select Komputer</button>
        </form>
    </div>
</body>
</html>
