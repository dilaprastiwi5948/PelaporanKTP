@extends('template.admin')

@section('content')
<div class="panel panel-default">
    {{-- <div class="panel-heading">
        <div class="card-title">
            <div class="title">{{$title}}</div>
        </div>
    </div> --}}
    <div class="panel-body">
        <div class="container-fluid">
            <div>
                <label>Nama</label>
                <small>: {{$data->name}}</small>
            </div>
            <div>
                <label>Nomor Induk Kependukan</label>
                <small>: {{$data->nik}}</small>
            </div>
            <div>
                <label>Tempat, Tanggal lahir</label>
                <small>: {{$data->birthplace}}, {{$data->birthdate}} </small>
            </div>
            <div>
                <label>Alamat</label>
                <small>: {{$data->address}}</small>
            </div>
            <div>
                <label>Kelurahan</label>
                <small>: {{$data->sub_districts}}</small>
            </div>
            <div>
                <label>Kecamatan</label>
                <small>: {{$data->districts}}</small>
            </div>
            <div>
                <label>Kota</label>
                <small>: {{$data->city}}</small>
            </div>
            <div>
                <label>Province</label>
                <small>: {{$data->province}}</small>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Pelaporan</label>
                        <small>{{$data->reportingtype->name}}</small>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <small>{{$data->submissiontype->name}}</small>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Pengajuan</label>
                        <small>{{$data->explanationtype->name}}</small>
                    </div>
                </div>
            </div>
            <a class="btn btn-default" href="{{route($baseroute.'index')}}">Kembali</a>
        </div>

    </div>
</div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('.dataTables').dataTable();
        });
    </script>
@endpush
