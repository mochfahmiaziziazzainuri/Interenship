@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-6">
   <div class="card border border-primary border-3">
    <div class="card-header bg-primary fw-bold text-light" align="center" id="hdr" >{{ __('Halaman Utama') }}</div>
    <div class="card-body border-top border-primary border-5 border-opacity-50">
     <form class="row g-3" action="{{ route('createadmin') }}" method="POST">
      <div class="col-md-12">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <label for="nama-menu" class="form-label">Nama Menu</label>
       <input type="text" class="form-control border border-primary bg-info bg-opacity-10 border-2 fw-semibold " id="menu" placeholder="Masukkan Nama Menu" name="menu" >
       <div class="col-md-12">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control border border-primary bg-info bg-opacity-10 border-2 fw-semibold">
         <option value="#">-- pilih status Menu --</option>
         <option value="Aktif">Aktif</option>
         <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
       </div>
       <div class="col-md-12">
        <label for="" class="form-label">URL</label>
        <input type="text" class="form-control border border-primary bg-info bg-opacity-10 border-2 fw-semibold" placeholder="Masukkan URL" id="url" name="url">
       </div>
      </div>
      <div class="col-md-6">
       <button type="Submit" href="#" class="form-control text-bg-primary p-2 btn" id="submit">Save</button>
      </div>
      <div class="col-md-6">
       <button type="reset" class="form-control text-bg-danger p-2 btn" id="reset">Reset</button>
      </div>
     </form>
    </div>
   </div>
  </div>
  <div class="col-6">
    <div class="card  list-group list-group-flush  border border-primary border-3 rounded">
      <table class="table" >
        <thead class="card-header">
          <tr class="border-bottom border-primary">
            <th scope="col">NO</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">URL</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $dt)  
          <tr class="border-bottom border-primary card-body fw-medium">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $dt->menu}}</td>
            <td>{{ $dt->status}}</td>
            <td>{{ $dt->url}}</td>
            <td>
              <div  class="d-grid gap-2 d-md-block">
                <a href="{{ route('editadmin', $dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ route('deleteadmin', $dt->id) }}" class="btn btn-sm btn-danger">Delete</a>
              </div>
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



@endsection
