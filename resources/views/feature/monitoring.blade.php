@extends('layout')
@include('utils.layout.navbar')

@section('content')
    <div style="margin-top: 5em;">

        <div class="container py-2">
            <h2 class="display-5 fw-bold text-dark">Monitoring</h2>
        </div>

        <main>
            <div class="card col-8 mt-4"
                style="order: 1px solid #e0e0e0; margin-left: 60px; padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
                <h3>Monitoring Detail</h3>
                <table class="mt-4" style="width: 100%; border-spacing: 0 15px; border-collapse: separate;">
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Nama</td>
                        <td style="padding: 10px 0;">Guest</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Usia</td>
                        <td style="padding: 10px 0;">21</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Alamat</td>
                        <td style="padding: 10px 0;">AAA</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Jenis Kelamin</td>
                        <td style="padding: 10px 0;">Prefer not to say</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Hasil Diagnosa</td>
                        <td style="padding: 10px 0;">N/A</td>
                    </tr>
                </table>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
