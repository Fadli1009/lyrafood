@extends('template.base')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td class="d-flex">
                    <a href="" class="btn btn-warning me-3"><i class="mdi mdi-grease-pencil
                        "></i></a>
                    <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="mdi mdi-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection