@extends('layout')
@include('utils.layout.navbar')

@section('content')

<div style="margin-top: 5rem;">
    <div class="container py-2 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="fw-bold text-dark text-center mb-4">Diagnostik</h2>
                <form method="POST" action="{{ route('diagnostic.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="umur" class="form-control" id="umur" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                            <option value="0">Laki-laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3 mt-5">
                        <label for="gejala" class="form-label">Apakah Anda Sekarang Punya Gejala:</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]" value="DEMAM BERULANG"
                            id="demam_berulang">
                        <label class="form-check-label" for="exampleCheck1">DEMAM BERULANG</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]"
                            value="PEMBENGKAN DI LEHER, KETIAK, DAN SELANGKANGAN" id="pembengkakan">
                        <label class="form-check-label" for="exampleCheck2">PEMBENGKAKAN DI LEHER, KETIAK, DAN
                            SELANGKANGAN</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]"
                            value="NYERI DAERAH PEMBENGKAKAN" id="nyeri_pembengkakan">
                        <label class="form-check-label" for="exampleCheck3">NYERI DAERAH PEMBENGKAKAN</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]" value="NYERI OTOT DAN SENDI"
                            id="nyeri_otot">
                        <label class="form-check-label" for="exampleCheck4">NYERI OTOT DAN SENDI</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]"
                            value="RUAM KULIT ATAU GATAL-GATAL" id="ruam">
                        <label class="form-check-label" for="exampleCheck5">RUAM KULIT ATAU GATAL-GATAL</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="gejala[]"
                            value="LELAH DAN LEMAS TANPA AKTIVITAS" id="lelah">
                        <label class="form-check-label" for="exampleCheck6">LELAH DAN LEMAS TANPA AKTIVITAS</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Cek Hasil</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection