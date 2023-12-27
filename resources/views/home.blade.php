@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-6">
   <div class="card border border-primary">
    @if (session('pesan'))
    <div class='alert alert-info text-center text-bold' style="font-weight: bolder" >{{ session('pesan') }}
    {{-- <button type='button' class='close btn btn-danger' data-dismiss='alert' aria-label='Close'> --}}
    {{-- <span aria-hidden='true'>&times;</span> --}}
    </button>
    </div>
    @endif
    <div class="card-header" align="center" id="hdr" style="background-color: transparent">{{ __('Halaman Utama') }}</div>
    <div class="card-body border-top border-primary">
     <form class="row g-3" action="" method="POST">
      <div class="col-md-12">
       @csrf
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <label for="nama-menu" class="form-label">Nama Menu</label>
       <input type="text" class="form-control border border-primary" id="nama_menu" placeholder="Masukkan Nama Menu" name="nama_menu" >
       <div class="col-md-12">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control border border-primary">
         <option value="#">-- pilih status Menu --</option>
         <option value="Aktif">Aktif</option>
         <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
       </div>
       <div class="col-md-12">
        <label for="" class="form-label">URL</label>
        <input type="text" class="form-control border border-primary" placeholder="Masukkan URL" id="url" name="url">
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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">URL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
  </div>
 </div>
</div>
</div>



@endsection
