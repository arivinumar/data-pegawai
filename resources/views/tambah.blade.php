<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.usm.ac.id</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3 {
            margin-bottom: 20px;
        }
        form {
            width: 400px;
        }
        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h3> <a href="https://www.usm.ac.id">www.usm.ac.id</a></h3>
    <h4>Data Pegawai</h4>

    <a href="/pegawai">Kembali</a>

    <form action="/pegawai/store" method="post">
        {{  csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br/>
        Jabatan <input type="text" name="jabatan" required="required"> <br/>
        Umur <input type="text" name="umur" required="required"> <br/>
        Alamat <textarea name="alamat" required="required"></textarea><br/>
        <input type="submit" value="Simpan Data">    
    </form>
</body>
</html>