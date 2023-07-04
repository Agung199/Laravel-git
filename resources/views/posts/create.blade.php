@extends ('layouts.app')

@section ('title', 'Buat Postingan Baru')

@section ('content')
    <div class="container">
        <h1>Buat Postingan Baru</h1>

        <form action='{{ url("posts") }}' method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">konten</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <button type="submit"  class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
@endsection