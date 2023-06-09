<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Api</title>
</head>
<body>
    <form action="/students/store" method="post">
        @csrf
        <input type="number" name="nis" id="" placeholder="NIS">
        <input type="text" name="nama" id="" placeholder="Nama">
        <input type="text" namex="rombel" id="" placeholder="Rombel">
        <input type="text" name="rayon" id="" placeholder="Rayon">
        <input type="date" name="tgl_lahir" id="">
        <input type="file" name="image" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

