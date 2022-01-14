@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="{{ route('post.create') }}">Tambah Post</a>
                </div>

                <div class="card-body">
                    @foreach ($posts as $item)
                        <h5>{{ $item->judul }}</h5>
                        <hr>
                        {!! $item->content !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
