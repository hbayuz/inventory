@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4>{{ $title }}</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh</button>
                    </p>
                </div>
                <div class="box-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" accept="{{ url('produk/add') }}" method="POST">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Supplier</label>
                                <select class="form-control select2" name="supplier">
                                    @foreach ($supplier as $sp)
                                        <option value="{{ $sp->id }}">{{ $sp->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nama Produk">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode</label>
                                <input type="text" name="kode" value="{{ $kode }}" class="form-control"
                                    id="exampleInputPassword1" placeholder="Kode Produk">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Minimal Stock</label>
                                <input type="number" name="minimal_stock" class="form-control" id="exampleInputEmail1"
                                    placeholder="Minimal Stock">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Beli Produk</label>
                                <input type="number" name="buy" class="form-control" id="exampleInputEmail1"
                                    placeholder="Harga Produk">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Jual Produk</label>
                                <input type="number" name="harga" class="form-control" id="exampleInputEmail1"
                                    placeholder="Harga Produk">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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
