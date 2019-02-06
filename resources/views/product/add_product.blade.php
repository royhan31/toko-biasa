@extends('layouts.template')

@section('content')

<div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Produk</h4>
                <form class="form-sample">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga Satuan</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                            <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga 1/2 Lusin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sub Kategori</label>
                        <div class="col-sm-9">
                        <select class="form-control">
                            <option>Category1</option>
                            <option>Category2</option>
                            <option>Category3</option>
                            <option>Category4</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Lusinan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga 1/2 Grosir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gambar</label>
                        <div class="col-sm-9">
                            <input type="file" class="dropify" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Grosir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deskripsi Produk</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Trim</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                                <button type="button" class="btn btn-primary">Tambah Produk</button>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
</div>

@endsection
