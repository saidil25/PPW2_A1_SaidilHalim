<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>id_supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->id_suplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>