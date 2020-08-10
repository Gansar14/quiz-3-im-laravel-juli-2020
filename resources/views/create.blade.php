@extends('master')
@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/items">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="nama">nama proyek</label>
                    <input type="text" class="form-control" id= "nama" name="nama" placeholder="tulis isi">
                  
                  </div>
                
                  <div class="form-group">
                    <label for="tanggal_dimulai">tanggal dimulai</label>
                    <input type="date" class="form-control" id ="tanggal_dimulai" name="tanggal_dimulai" placeholder="tanggal di mulai">
                   
                  </div>
                  <div class="form-group">
                    <label for="tanggal_akhir">tanggal berakhir</label>
                    <input type="date" class="form-control"id = "tanggal_akhir" name="tanggal_akhir" placeholder="tanggal berakhir">
                
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">buat pertanyaan</button>
                </div>
              </form>
            </div>
@endsection