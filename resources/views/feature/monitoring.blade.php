@extends('layout')
@include('utils.layout.navbar')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Use jQuery 3.5.1 -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/fixedheader/3.2.1/js/dataTables.fixedHeader.min.js"></script>
<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">

<style>
    .table-wrapper {
        margin-top: 5em;
    }

    .progress-bar {
        width: 200px;
        height: 20px;
        background-color: #f0f0f0;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        background-color: #4caf50;
        text-align: center;
        line-height: 20px;
        color: white;
    }
</style>

<div style="margin-top: 5em;">

    <div class="container py-2">
        <h2 class="display-5 fw-bold text-dark">Monitoring</h2>
    </div>

    <main>

        <div class="container mb-4 text-left">
            @if(Auth::guard('admin')->check())

            <div class="card overflow-hidden mb-4">
                <div class="card-body px-3 pt-0 pb-3">
                    <h3 class="mt-2 text-left">Halo, Admin.</h3>

                    <div class="table-responsive p-0">
                        <table id="projectTable" class="display table table-bordered text-center">
                            <thead style="background-color: #5f94ff; color: white;">
                                <tr>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Hasil Diagnosa</th>
                                </tr>
                            </thead>
                            <tbody id="projectTableBody">
                                @foreach($diagnostics as $diagnostic)
                                <tr>
                                    <td>{{ $diagnostic->nama }}</td>
                                    <td>{{ $diagnostic->umur }}</td>
                                    <td>{{ $diagnostic->alamat }}</td>
                                    <td>{{ $diagnostic->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td>{{ $diagnostic->hasil_diagnosa == 0 ? 'Negatif' : 'Positif' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger px-4 py-2" style="font-size: 14px;">
                    Keluar dari Akun Admin
                </button>
            </form>
            @else
            <h3 class="mt-2 text-left">Hanya admin yang bisa mengakses laman ini.</h3>

            <a href="{{ route('admin.login') }}" class="btn btn-outline-warning px-4 py-2" style="font-size: 14px;">
                Masuk sebagai Admin
            </a>
            @endif
        </div>


    </main>
</div>

<script>
    $(document).ready(function() {
            var dataTable = $('#projectTable').DataTable({
                paging: true,
                searching: true,
                language: {
                    paginate: {
                        previous: '<i class="fa fa-angle-left" style="padding-top: 8px;"></i>',
                        next: '<i class="fa fa-angle-right" style="padding-top: 8px;"></i>'
                    },
                    search: "",
                    searchPlaceholder: "Search"
                },
                ordering: true,
                info: true,
                responsive: true,
                // initComplete: function() {
                //     var column = this.api().column(2);
                //     var select = $(
                //             '<select class="form-select form-select-lg"><option value="">All Status</option></select>'
                //         )
                //         .appendTo($('#statusFilterPlaceholder'))
                //         .on('change', function() {
                //             var val = $.fn.dataTable.util.escapeRegex($(this).val());
                //             column.search(val ? '^' + val + '$' : '', true, false).draw();
                //         });

                //     column.data().unique().sort().each(function(d) {
                //         select.append($('<option></option>').attr('value', d).text(d));
                //     });
                // }
            });
        });
</script>
@endsection