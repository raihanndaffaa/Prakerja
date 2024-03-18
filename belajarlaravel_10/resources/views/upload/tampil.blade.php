@extends('template')

@section('main')
    <h1>Image</h1>
    <form class="d-flex align-items-center" action="{{route('upload.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Pilih Gambar</label>
          <input type="file" class="form-control-file" name="image">
        </div>
        <div> 
            <button class="btn btn-success">Simpan</button>
        </div>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)    
                <tr>
                <th scope="row">{{ $loop->iteration }} </th>
                    <td><img src="{{ 'storage/'.$item->image}}" alt="" width="300"></td>
                </tr>
            @endforeach
        </tbody>
  </table>

@endsection