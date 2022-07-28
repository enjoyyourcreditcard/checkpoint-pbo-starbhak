<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="css/cp.css">
</head>

<body>
    <div class="head">
        <div class="gambar"></div>
        <div class="text1">
            <h2>PEDULI DIRI</h2>
            <h5>Catatan Perjalanan</h5>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catatan Perjalanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Isi Data</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <h4>urutkan berdasarkan</h4>
        <select class="form-select" aria-label="Default select example">
            <option value="1">Tanggal</option>
            <option value="2">Waktu</option>
            <option value="3">Lokasi</option>
            <option value="3">Suhu Tubuh</option>
        </select>

        <button>pilih</button>
    </div>

    <div class="container2">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Suhu Tubuh</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

          <button><a href="#">isi catatan perjalanan</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
