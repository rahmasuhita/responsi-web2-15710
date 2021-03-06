@extends('base')
@section('employees','active')
@section('konten')
<form action="{{route('employees.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Jobs</label>
    <select name="job" class="form-control">
      @foreach($jobs as $data)
        <option value="{{$data->id_jobs}}">{{$data->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>E-Mail</label>
    <input type="email" name="email" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Kontak</label>
    <input type="text" name="kontak" class="form-control" placeholder="...">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" placeholder="..."></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection