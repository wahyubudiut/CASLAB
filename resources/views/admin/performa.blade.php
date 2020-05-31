@extends('layouts.dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" align="center">Performa Asisten</h4>
            <div class="row">
                @foreach( $performas as $performa )
                <div class="col-md-3 mt-3">
                    <ul class="list-group">
                        <div class="card" style="width: 17rem;">
                            <img src="{{asset('images/faces/face28.png') }}" width="180px" height="300px" class="card-img-top">
                            <div class="card-body">
                                <h7 class="card-title">{{ $performa->name }}</h7>
                                <p class="card-text">{{ $performa->email }}</p>
                            </div>

                            <ul class="list-group">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                    Tambahkan nilai
                                </button>
                            </ul>
                            <a href={{'/dashboard/chart?id='.$performa->id}} button type="button" class="btn btn-dark btn-lg btn-block">Show Performance</button></a>
                        </div>
                    </ul>
                </div>
                @endforeach
            </div>
            @endsection()
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" id="mapel">
                        @foreach($mapel as $mp)
                        <option value="{{$mp->id}}">{{$mp->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nilai</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nilai">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>