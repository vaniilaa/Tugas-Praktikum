@extends('layouts.master')

@section('container')
<h1 class="text-center">Data Dosen</h1>
<div class="mb-4">
<button type="button" class="btn btn-success ">Tambah Data</button>
</div>
<div class="row">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Fakultas</th>
            <th scope="col">NIDN</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dosen as $dsn)
          <tr>
            <th scope="row">{{$dsn->id_dosen}}</th>
            <td>{{$dsn->nama}}</td>
            <td>{{$dsn->matkul}}</td>
            <td>{{$dsn->fakultas}}</td>
            <td>{{$dsn->nidn->nomor_induk}}</td>
            <td>
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection