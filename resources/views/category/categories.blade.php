@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Input Kategori</h4>
            <form class="forms-sample" action="{{ route('category.addcategory') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputName1">Nama Kategori</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nama Kategori">
                </div>
                <button type="submit" class="btn btn-primary mr-1" name="submit">Tambah</button>
            </form>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Category</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kategori</th>
                      <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                    @php($no = 1)

                    @foreach ($categories as $category)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <button class="btn btn-light" data-toggle="modal" data-target="#edit"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                            <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                        </td>
                    </tr>
                    @endforeach
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
              <h5 class="modal-title" id="exampleModalLabel-2">Edit Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="#" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Kategori</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nama Kategori">
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
