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
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        textarea {
            height: 80px;
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
    <h3><a href="https://www.usm.ac.id">www.usm.ac.id</a></h3>
    <h4>Edit Data Pegawai</h4>

    <a href="/pegawai">Kembali</a>

        @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br/>
        
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>

        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>

        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>

        Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }} </textarea><br/>

        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>