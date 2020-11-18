@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4>{{ $title }}</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh">
                            <i class="fa fa-refresh"></i>
                            Refresh
                        </button>

                        <a href="{{ url('produk/add') }}" class="btn btn-sm btn-flat btn-primary">
                            <i class="fa fa-plus"></i>
                            Add Product
                        </a>
                    </p>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table table-hover myTable">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>#</th>
                                    <th>Supplier</th>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Stock</th>
                                    <th>Minimal Stock</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $e => $dt)
                                    <tr>
                                        <td>
                                            <div style="width:60px">
                                                <a href="{{ url('produk/' . $dt->id) }}"
                                                    class="btn btn-warning btn-xs btn-edit" id="edit">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>

                                                <button href="{{ url('produk/' . $dt->id) }}"
                                                    class="btn btn-danger btn-xs btn-hapus" id="delete">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>

                                                <a href="{{ url('produk/detail/' . $dt->id) }}"
                                                    class="btn btn-primary btn-xs btn-edit" id="edit">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{ $e + 1 }}</td>
                                        <td>{{ $dt->supplier_r->nama }}</td>
                                        <td>{{ $dt->nama }}</td>
                                        <td>{{ $dt->kode }}</td>
                                        <td>{{ $dt->stock }}</td>
                                        <td>{{ $dt->minimal_stock }}</td>
                                        <td>{{ number_format($dt->buy,0) }}</td>
                                        <td>{{ number_format($dt->harga,0) }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function() {

            // btn refresh
            $('.btn-refresh').click(function(e) {
                e.preventDefault();
                $('.preloader').fadeIn();
                location.reload();
            })

        })

    </script>

@endsection
