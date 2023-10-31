@extends('template.base')

@section('content')
<div class="card p-4">
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputUsername1">Nama Category</label>
            <input type="text" class="form-control text-light" id="exampleInputUsername1" placeholder="Nama Makanan"
                name="name">
            <button type="submit" class="btn btn-primary my-3">Tambah</button>
        </div>
</div>
</form>
@endsection