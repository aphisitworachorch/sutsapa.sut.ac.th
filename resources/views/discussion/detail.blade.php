@extends('.layouts.home_sapa')
@section('content')
    <div class="container">
        @foreach($discussion_detail as $dtt)
            <div class="container">
                <h2>{{ $dtt->discussion_title }}</h2>
            </div>
            <br/>
            <div class="container">
                {{ $dtt->discussion_content }}
            </div>
        @endforeach
    </div>
@endsection
