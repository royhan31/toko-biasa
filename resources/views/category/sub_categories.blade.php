@extends('layouts.template')

@section('content')

<div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Input Sub Kategori</h4>
                <form class="forms-sample" action="{{ route('category.addsub') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Sub Kategori</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Sub Kategori">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Nama Kategori</label>
                        <select class="form-control"  name=”category_id”>
                            {{-- <option>PILIH KATEGORI</option> --}}
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select >
                    </div>
                    <button type="submit" class="btn btn-primary mr-1" name="submit">Tambah</button>
                </form>
                </div>
            </div>
        </div>


    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Sub Category</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Sub Kategori</th>
                      <th>Kategori</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>$3200</td>
                      <td>$3200</td>
                      <td>
                        <button class="btn btn-light" data-toggle="modal" data-target="#edit"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                        <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel-2">Edit Sub Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="#" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <label for="exampleInputName1">Nama Sub Kategori</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Sub Kategori">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Nama Kategori</label>
                        <select class="form-control"  name=”category_id”>
                            {{-- <option>PILIH KATEGORI</option> --}}
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select >
                    </div>
                    <div class="text-center">
                            <button type="button" class="btn btn-primary mr-1" name="submit">Perbarui</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
  </div>

@endsection
