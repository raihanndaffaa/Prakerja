@extends('layouts.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / </span>Perhitungan Nilai Rating</h4>

        <!-- Form controls -->

        <div class="card mb-4">
            <h5 class="card-header">Hasil Perhitungan Rating</h5>
            <div class="card-body">
                <div class="container">

                    <div class="col">
                        <form action="{{ route('rekomendasi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Orang</label>
                                <input type="text" class="form-control" name="namaOrang">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="number" class="form-control" name="lahir">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Keluhan Anda</label>
                                <select class="form-select @error('keluhan') is-invalid
                        @enderror"
                                    id="exampleFormControlSelect1" aria-label="Default select example" name="keluhan">
                                    <option selected>Pilihan Keluhan</option>
                                    <option value="Keseleo">
                                        Keseleo</option>
                                    <option value="Pegal">
                                        Pegel - Pegel</option>
                                    <option value="Darah Tinggi">
                                        Darah Tinggi Dan Gula Darah</option>
                                    <option value="Kram Perut">
                                        Kram Perut Dan Masuk Angin</option>
                                </select>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilihan Keluhan </label>
                                <select class="form-select @error('pilihan') is-invalid
                        @enderror"
                                    id="exampleFormControlSelect1" aria-label="Default select example" name="pilihan">
                                    <option selected>Pilih Jenis Keluhan</option>
                                    <option value="1">
                                        Keseleo</option>
                                    <option value="2">
                                        Pegel - Pegel</option>
                                    <option value="3">
                                        Darah Tinggi Dan Gula Darah</option>
                                    <option value="4">
                                        Kram Perut Dan Masuk Angin</option>
                                </select>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Orang</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Pilihan Keluhan</th>

                                </tr>


                            </thead>
                            <tbody>
                                <tr>
                                    @isset($data)
                                        <td>{{ $data['namaOrang'] }}</td>
                                        <td>{{ $data['umur'] }}</td>
                                        <td>{{ $data['pilKeluhan'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Saran : {{ $data['namaJamu'] }} Dan {{ $data['saran'] }}</th>
                                    </tr>
                                @endisset

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
