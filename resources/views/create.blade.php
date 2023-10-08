@extends('main')

@section('title', 'Tambah Data')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="nama" class="col-4">Nama</label>
                                    <div class="col-8">
                                        <input name="nama" type="text" class="form-control" id="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="merk" class="col-4">Merk</label>
                                    <div class="col-8">
                                        <input name="merk" type="text"   class="form-control" id="merk" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-4">Harga</label>
                                    <div class="col-8">
                                        <input name="harga" type="text"   class="form-control" id="harga" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto" class="col-4">Foto</label>
                                    <div class="col-8">
                                        <input name="foto" type="file" class="form-control" id="foto" required>
                                    </div>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.col -->
        <!-- /.col -->

        <!-- /.row -->
        <!-- /.container-fluid -->

    </section>
@endsection
