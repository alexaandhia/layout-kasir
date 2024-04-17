@extends('layout.cashierpage')

@section( 'content' )

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Produk</h4>
            <div class="table-responsive">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <a href="assets/images/products/water.jpeg" target="_blank">
                                    <img src="{{ asset('assets/images/products/water.jpeg') }}" width="120">
                                </a>
                            </td>
                            <td>Air Mineral</td>
                            <td>Rp. 5000</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <a href="assets/images/products/detergent.jpeg" target="_blank">
                                    <img src="{{ asset('assets/images/products/detergent.jpeg') }}" width="120">
                                </a>
                            </td>
                            <td>Detergent</td>
                            <td>Rp. 15.000</td>
                            <td>27</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection