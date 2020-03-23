@extends('.layouts.home_sapa')
@section('content')
    <div class="container">
        <h1 style="text-align:center;">กระดานสนทนา</h1>
        <hr/>
        <div class="row">
            @foreach($discuss_view as $dc)
                <div class="col-lg-6 discuss_title">
                    <h3>{{ $dc->discussion_title }}</h3>
                    <a href="/discuss/view/{{ $dc->id }}" class="btn btn-info">ดูกระดานสนทนา</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
