@extends('layouts.template')

@section('content')

<div class="content-wrapper">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data User</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama Lengkap</th>
                      <th>No. HP</th>
                      <th>Alamat</th>
                      <th>Terakhir Login</th>
                      <th>Status</th>
                      <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>1</td>
                      <td>$3200</td>
                      <td>1</td>
                      <td>$3200</td>
                      <td>$3200</td>
                      <td>
                        <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                        <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                      </td>
                  </tr>
                  <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>$3200</td>
                        <td>1</td>
                        <td>$3200</td>
                        <td>$3200</td>
                        <td>
                          <button class="btn btn-light"><i class="mdi mdi-tooltip-edit text-primary"></i> Edit</button>
                          <button class="btn btn-light"><i class="mdi mdi-close text-danger"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                            <td>3</td>
                            <td>1</td>
                            <td>$3200</td>
                            <td>1</td>
                            <td>$3200</td>
                            <td>$3200</td>
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
