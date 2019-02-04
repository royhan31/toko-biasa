@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Input Kategori</h4>
            <form class="forms-sample">
                <div class="form-group">
                <label for="exampleInputName1">Nama Kategori</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
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
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>$3200</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                        <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>2015/04/01</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                        <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>2010/11/21</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                        <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>2016/01/12</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
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

@endsection
