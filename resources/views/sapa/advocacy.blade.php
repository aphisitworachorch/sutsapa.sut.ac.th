@extends('.layouts.home_sapa')
@section('content')
    <div class="container">
        <h1 style="text-align:center;">ศูนย์พิทักษ์สิทธินักศึกษา</h1>
        <div class="py-2 container">
            <div style="text-align:center">
                <img src="{{ asset('assets/sut_advocacy_logo.png') }}" style="width:200px;"/>
                <br/>
                <a class="btn btn-warning" href="{{ route('advocacy_report') }}">ร้องเรียน ศูนย์พิทักษ์สิทธิ์</a>
            </div>
        </div>
    </div>
@endsection
