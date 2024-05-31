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
            max-width: 800px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Greedy Pencarian Laptop</h1>
        <h2>Selected Laptops:</h2>
        <table>
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>RAM</th>
                    <th>Seri Intel</th>
                    <th>Generasi</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectedLaptops as $laptop)
                    <tr>
                        <td>{{ $laptop->brand }}</td>
                        <td>{{ $laptop->produk }}</td>
                        <td>{{ $laptop->ram }} GB</td>
                        <td>{{ $laptop->seri_intel }}</td>
                        <td>{{ $laptop->generasi }}</td>
                        <td>${{ $laptop->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
