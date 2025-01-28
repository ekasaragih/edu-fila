@extends('layout')
@include('utils.layout.navbar')

@section('content')

<div style="margin-top: 5rem;">
    <div class="container py-2 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="fw-bold text-dark text-center mb-4">Diagnostic</h2>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Umur</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apakah Anda Sekarang Punya Gejala;</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">DEMAM BERULANG</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">PEMBENGKAN DI LEHER, KETIAK, DAN SELANGKANGAN</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                        <label class="form-check-label" for="exampleCheck3">NYERI DAERAH PEMBENGKAN</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                        <label class="form-check-label" for="exampleCheck4">NYERI OTOT DAN SENDI</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                        <label class="form-check-label" for="exampleCheck5">RUAM KULIT ATAU GATAL-GATAL</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                        <label class="form-check-label" for="exampleCheck6">LELAH DAN LEMAS TANPA AKTIVITAS</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                    <br></br>
                    <p>APABILA MEMPUNYAI GEJALA SEPERTI DIATAS SILAHKAN LAPORAN KE PELAYANAN
                    KESEHATAN TERDEKAT.</p>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
