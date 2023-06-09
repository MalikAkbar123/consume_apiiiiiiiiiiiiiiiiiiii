<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="/students/update/{{$students ['id']}}" method="POST">
    @csrf
    @method('PATCH')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">NIS</label>
          <input type="text" class="form-control" name="nis" id="exampleInputEmail1" value="{{$students['nis']}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">NAMA</label>
          <input type="text" class="form-control" name="nama" id="exampleInputPassword1" value="{{$students['nama']}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rombel</label>
            <input type="text" class="form-control" name="rombel" id="exampleInputPassword1" value="{{$students['rombel']}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Rayon</label>
            <input type="text" class="form-control" name="rayon" id="exampleInputPassword1" value="{{$students['rayon']}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir"   id="exampleInputPassword1" value="{{$students['tgl_lahir']}}">
            <div class="mb-3">
              <label for="" class="form-label">Image</label>
              <input type="file" id="" name="file" class="form-control" placeholder="Masukan Foto">
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
     </body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>