@extends('main')

@section('title', 'List')

@push('style')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Merk</th>
                                        <th>Harga</th>
                                        <th>Tanggal Di Publish</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Handphone as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->merk}}</td>
                                            <td>{{"Rp ".$item->harga}}</td>
                                            <td>{{$item->tanggal_publish}}</td>
                                            <td>
                                                @if($item->foto)
                                                    <img src="{{ asset($item->foto)}}" style="height: 50px; width: 100px;"  alt="image">
                                                @else
                                                    <span>No Image Found</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm"><i class="nav-icon fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Ingin menghapus data?')"><i class="nav-icon fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
@endpush
