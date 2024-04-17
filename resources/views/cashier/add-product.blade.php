@extends('layout.cashierpage')
@section( 'content' )

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Transaksi</h4>
            <form action="" method="post">
                @csrf
                <div id="produk-list">
                    <div class="produk-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Produk <span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <select name="produk_id[]" class="form-control">
                                            <option value="" selected disabled>Pilih Produk</option>
                                            <option value="">Air Minum</option>
                                            <option value="">Roti</option>
                                            <option value="">Telur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="col-md-12">Qty <span class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="number" name="qty[]" class="form-control form-control-line">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger remove-btn">Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" id="add-btn">+</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">Nama Pelanggan <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" name="nama" class="form-control form-control-line">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">Alamat <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" name="alamat" class="form-control form-control-line">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-12">No. Telepon <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" name="telepon" class="form-control form-control-line">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <script>
    
    function addProduk() {
        var produkList = document.getElementById('produk-list');
        var produkItem = document.createElement('div');
        produkItem.classList.add('produk-item');
        produkItem.innerHTML = `
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-12">Produk <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <select name="produk_id[]" class="form-control">
                                <option value="" selected disabled>Pilih Produk</option>
                                @foreach($produk as $pdk)
                                <option value=""></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-md-12">Qty <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" name="qty[]" class="form-control form-control-line">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger remove-btn">Hapus</button>
                </div>
            </div>
        `;
        produkList.appendChild(produkItem);
    }

    // Fungsi untuk menghapus baris input produk
    function removeProduk(event) {
        var produkItem = event.target.closest('.produk-item');
        produkItem.remove();
    }

    // Menangani klik tombol "Tambah Produk"
    document.getElementById('add-btn').addEventListener('click', addProduk);

    // Menangani klik tombol "Hapus"
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-btn')) {
            removeProduk(event);
        }
    });
</script> -->

@endsection
