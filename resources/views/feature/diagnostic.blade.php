@extends('layout')
@include('utils.layout.navbar')

@section('content')

<div style="margin-top: 5rem;">

    <div class="container py-2 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2 class="fw-bold text-dark text-center mb-4">Diagnostik</h2>
                <form id="diagnosticForm">
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
                    <button type="button" id="cekHasilButton" class="btn btn-primary w-100">Cek Hasil</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Button Section: Display based on admin status -->
    <div class="container mb-4 text-left">
        @if(Auth::guard('admin')->check())
        <!-- Check if admin is logged in -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger px-4 py-2" style="font-size: 14px;">
                Keluar dari Akun Admin
            </button>
        </form>
        @else
        <a href="{{ route('admin.login') }}" class="btn btn-outline-warning px-4 py-2" style="font-size: 14px;">
            Masuk sebagai Admin
        </a>
        @endif
    </div>
</div>

<!-- Modal for Displaying Result -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultModalLabel">Hasil Diagnosa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Hasil Diagnosa akan tampil di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="ulangCekButton">Ulangi Cek</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.getElementById('cekHasilButton').addEventListener('click', function() {
        const cekHasilButton = document.getElementById('cekHasilButton');
        cekHasilButton.disabled = true;
        cekHasilButton.innerText = "Sedang Proses...";
        
        const formData = new FormData(document.getElementById('diagnosticForm'));
        
        $.ajax({
            url: '{{ route('diagnostic.store') }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                const nama = response.nama;
                const umur = response.umur;
                const alamat = response.alamat;
                const jenisKelamin = response.jenis_kelamin;
                const gejala = response.gejala;

                const hasilDiagnosa = gejala.length > 0 ? 'Positif' : 'Negatif';

                let modalBody = `
                    <div class="p-3 mb-3 bg-light rounded">
                        <h5 class="fw-bold text-primary"><i class="bi bi-person-circle"></i> Informasi Pasien</h5>
                        <p><strong>Nama:</strong> ${nama}</p>
                        <p><strong>Umur:</strong> ${umur} tahun</p>
                        <p><strong>Jenis Kelamin:</strong> ${jenisKelamin}</p>
                        <p><strong>Alamat:</strong> ${alamat}</p>
                    </div>

                    <div class="p-3 mb-3 ${hasilDiagnosa === 'Positif' ? 'bg-danger text-white' : 'bg-success text-white'} rounded">
                        <h5 class="fw-bold"><i class="bi ${hasilDiagnosa === 'Positif' ? 'bi-exclamation-triangle-fill' : 'bi-check-circle-fill'}"></i> Hasil Diagnosa</h5>
                        <p class="fs-5 fw-bold">${hasilDiagnosa}</p>
                    </div>

                    <div class="p-3 mb-3 bg-light rounded">
                        <h5 class="fw-bold text-secondary"><i class="bi bi-clipboard-check"></i> Gejala yang Dipilih</h5>
                        <ul class="mb-0">
                            ${gejala.length > 0 ? gejala.map(g => `<li>${g}</li>`).join('') : '<li class="text-muted">Tidak ada gejala</li>'}
                        </ul>
                    </div>
                `;

                // Tambahkan peringatan jika hasilnya positif
                if (hasilDiagnosa === 'Positif') {
                    modalBody += `
                        <div class="alert alert-warning text-dark fw-bold d-flex align-items-center mt-3" role="alert">
                            <i class="bi bi-hospital fs-4 me-2"></i> SILAHKAN KUNJUNGI PELAYANAN KESEHATAN TERDEKAT SECEPATNYA.
                        </div>
                    `;
                }

                document.getElementById('modalBody').innerHTML = modalBody;

                var myModal = new bootstrap.Modal(document.getElementById('resultModal'), {
                    keyboard: false
                });
                myModal.show();

                cekHasilButton.disabled = true;
                cekHasilButton.innerText = "Data Sudah Tersubmit";
            },
            error: function(xhr, status, error) {
                console.error('Terjadi kesalahan: ', error);

                cekHasilButton.disabled = false;
                cekHasilButton.innerText = "Cek Hasil";
            }
        });
    });

    document.getElementById('ulangCekButton').addEventListener('click', function() {
        location.reload();
    });

</script>

@endsection