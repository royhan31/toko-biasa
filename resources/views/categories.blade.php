@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Input Kategori</h4>
            <form class="forms-sample" action="{{ route('addcategory') }}" method="POST">
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
                            <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
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

@endsection
