@extends('layout.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> Edit Kebun</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('kebun.update', $kebun->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_kebun">Nama Kebun:</label>
                                <input type="text" class="form-control" id="nama_kebun" name="nama_kebun" value="{{ $kebun->nama_kebun }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alias">Alias Kebun:</label>
                                <input type="text" class="form-control" id="alias" name="alias" value="{{ $kebun->alias }}" required>
                            </div>
                            <div class="form-group">
                                <label for="aktif">Status Kebun</label>
                                <select class="form-control" id="aktif" name="aktif" required>
                                    <option value="Yes" {{ $kebun->aktif == 'Yes' ? 'selected' : '' }}>Aktif</option>
                                    <option value="No" {{ $kebun->aktif == 'No' ? 'selected' : '' }}>Tidak Aktif</option>
                                </select>
                            </div>                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary ml-2" onclick="window.location.href='{{ route('kebun.index', $kebun->id) }}'">Batal</button>  
                </form>
            </div>
        </div>
    </div>
</section>

@endsection