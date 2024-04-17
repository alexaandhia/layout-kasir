@extends('layout.adminpage')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Produk</h4>
            <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Nama Produk <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Gambar Produk <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="file" name="img" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Harga <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="harga" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Stok <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="stok" class="form-control form-control-line ">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection