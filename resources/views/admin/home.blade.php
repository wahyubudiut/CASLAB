@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hallo, {{ Auth::user()->name }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/faces/face28.png')}}" class="card-img-top">
                        <div class="card-body">
                            <ul class="list-unstyled list-justify">
                                <li>Nama : <span>{{ Auth::user()->name }}</span></li>
                                <li>NIM : <span>{{ Auth::user()->nim }}</span></li>
                                <li>Telpon : <span>{{ Auth::user()->phone_number }}</span></li>
                                <li>Email : <span>{{ Auth::user()->email }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection