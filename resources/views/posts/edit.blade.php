@extends ('layouts.app')

@section ('title', 'Ubah Postingan')

@section ('content')
    <div class="container">
        <h1>Ubah Postingan Baru</h1>

        <form action='{{ url("posts/ $post->id ") }}' method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">konten</label>
                <textarea class="form-control" id="content" name="content">{{ $post->content}}</textarea>
            </div>
            <button type="submit"  class="btn btn-primary">SIMPAN</button>
        </form>
        <form action='{{ url("posts/$post->id") }}' method="POST">
            @method('DELETE')
            @csrf  

            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
@endsection