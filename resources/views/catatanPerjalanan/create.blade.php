<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="head">
        <div class="gambar"></div>
        <div class="text1">
            <h2>Check Point</h2>
            <h5>Catatan Perjalanan</h5>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catatan Perjalanan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Isi Data</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-body1">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lokasi Yang Dikunjungi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Suhu Tubuh</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <button class="btn btn-primary">Simpan</button>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
