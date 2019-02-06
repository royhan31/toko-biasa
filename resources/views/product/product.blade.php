@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Produk</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No. </th>
                      <th>Kategori</th>
                      <th>Sub Kategori</th>
                      <th>Gambar</th>
                      <th>Deskripsi</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>2012/08/03</td>
                      <td>Edinburgh</td>
                      <td>New York</td>
                      <td>$1500</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-eye text-primary"></i> Detail</button>
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
