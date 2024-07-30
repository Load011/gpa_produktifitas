@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">

                    <div class="card-header">
                        <h3 class="card-title"> Tambah Jabatan </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route ('jabatan.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_jabatan">Nama Jabatan:</label>
                                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="{{ old('nama_jabatan')}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('jabatan.index') }}'">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection