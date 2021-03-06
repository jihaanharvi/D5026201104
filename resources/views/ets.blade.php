<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="D_5026201104_A.css">
    <title>Form Pendaftaran Kuota Internet</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p>Nama Mahasiswa: Jihaan Harvi Habibah<br>
                Nama Panggilan: Jihaan<br>
                NRP: 5026201104</p>
            </div>
            <div class="card-body">
                <div class="row mb-4" style="font-size: 21px">
                    <div class="col-sm-12 text-center">
                        Form Pendaftaran Kuota Internet
                    </div>
                </div>
                <form id="form" action="https://www.youtube.com/">
                    <div class="row mt-3 mb-3">
                        <label for="Name" class="col-sm-6 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <label for="NRP" class="col-sm-6 col-form-label">NRP Mahasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nrp" name="nrp">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <label for="Jurusan" class="col-sm-6 col-form-label">Jurusan</label>
                        <div class="col-sm-6">
                            <select id="jurusan" class="form-select" name="jurusan">
                                <option value="" selected disabled>Pilih Jurusan</option>
                                <option value="1">Sistem Informasi</option>
                                <option value="2">Elektro</option>
                                <option value="3">Informatika</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <label for="Nomor" class="col-sm-6 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nomor" name="nomor">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary my-4 form-control" id="kirim">Kirim</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="reset" class="btn btn-success my-4 form-control" id="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="D_5026201104_A.js"></script>
</body>

</html>
