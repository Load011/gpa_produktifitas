@extends('layout.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Tambah Perkebunan </h3>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route ('kebun.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_kebun">Nama Kebun:</label>
                                    <input type="text" class="form-control" id="nama_kebun" name="nama_kebun" value="{{ old('nama_kebun')}}">
                                </div>
                                <div class="form-group">
                                    <label for="alias">Alias Kebun:</label>
                                    <input type="text" class="form-control" id="alias" name="alias" value="{{ old('alias')}}">
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Status Kebun</label>
                                    <select class="form-control" id="aktif" name="aktif">
                                        <option value="Yes">Aktif</option>
                                        <option value="No">Tidak Aktif</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('afdeling.index') }}'">Batal</button>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

@endsection