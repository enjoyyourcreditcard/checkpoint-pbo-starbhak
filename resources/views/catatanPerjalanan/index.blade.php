@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-body1">
        @if (count($datas))
        <div class="table-responsive" style="height: 60%">
            <table id="tabel-data" class="table">
                <thead style="position: sticky; top: 0; background: white">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Suhu Tubuh</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <th class="tanggal" scope="row">{{ $data->tanggal }}</th>
                        <td class="jam">{{ $data->jam }}</td>
                        <td class="lokasi">{{ $data->lokasi }}</td>
                        <td class="suhu">{{ $data->suhu }}</td>
                        <td>
                            <button class="tombol-edit" type="button" data-bs-toggle="modal" data-bs-target="#editCatatanPerjalanan" data-id="{{ $data->id }}" style="background: none; border: none">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <form action="/catatan-perjalanan/{{ $data->id }}" method="post" style="display: inline">
                                @csrf
                                @method('delete')
                                <button type="submit" style="background: none; border: none;"><i
                                        class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button type="button" class="btn btn-light float-end mt-4" data-bs-toggle="modal" data-bs-target="#tambahCatatanPerjalanan" style="font-size: 2rem">
            <i class="bi bi-plus-lg"></i>
        </button>

        <div class="modal fade" id="tambahCatatanPerjalanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/catatan-perjalanan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam</label>
                                <input type="time" name="jam" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Suhu Tubuh</label>
                                <input type="number" name="suhu" class="form-control" step=any>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control">
                            </div>
                            <button class="btn btn-light float-end" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editCatatanPerjalanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-edit" action="/catatan-perjalanan" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control input-tanggal-edit">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam</label>
                                <input type="time" name="jam" class="form-control input-jam-edit">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Suhu Tubuh</label>
                                <input type="number" name="suhu" class="form-control input-suhu-edit" step=any>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control input-lokasi-edit class="jam"">
                            </div>
                            <button class="btn btn-light float-end" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <p class="text-center">Catatan perjalanan anda masih kosong..</p>

        <center>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tambahCatatanPerjalanan" style="font-size: 2rem">
                <i class="bi bi-plus-lg"></i>
            </button>
        </center>

        <div class="modal fade" id="tambahCatatanPerjalanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/catatan-perjalanan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam</label>
                                <input type="time" name="jam" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Suhu Tubuh</label>
                                <input type="number" name="suhu" class="form-control" step=any>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control">
                            </div>
                            <button class="btn btn-light float-end" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('additionalJs')
<script>
    const tanggal = document.querySelectorAll('.tanggal');
    const inputTanggalEdit = document.querySelector('.input-tanggal-edit');
    const jam = document.querySelectorAll('.jam');
    const inputJamEdit = document.querySelector('.input-jam-edit');
    const suhu = document.querySelectorAll('.suhu');
    const inputSuhuEdit = document.querySelector('.input-suhu-edit');
    const lokasi = document.querySelectorAll('.lokasi');
    const inputLokasiEdit = document.querySelector('.input-lokasi-edit');
    const tombolEdit = document.querySelectorAll('.tombol-edit');
    const formEdit = document.querySelector('.form-edit');

    tombolEdit.forEach((e, i) => {
        e.addEventListener('click', function () {
            inputTanggalEdit.value = '';
            inputTanggalEdit.value = tanggal[i].innerHTML.trim();
            inputJamEdit.value = '';
            inputJamEdit.value = jam[i].innerHTML.trim();
            inputSuhuEdit.value = '';
            inputSuhuEdit.value = suhu[i].innerHTML.trim();
            inputLokasiEdit.value = '';
            inputLokasiEdit.value = lokasi[i].innerHTML.trim();
            formEdit.removeAttribute('action');
            formEdit.setAttribute('action', '/catatan-perjalanan/' + e.getAttribute('data-id'))
        })
    });
</script>
@endsection