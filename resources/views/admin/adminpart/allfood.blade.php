<div class="row">
    <h1>Makanan</h1>
    @foreach ($data as $item)
    <div class="col-sm-6 grid-margin">
        <div class="card">
            <div class="card-header">
                <h3>Menu : <span class="text-danger">{{ $loop->iteration }}</span></h3>
            </div>
            <div class="card-body">
                <h1>Nama :{{ $item->nameFood }}</h1>
                <h3>{{ $item->priceFood }}</h3>
                <h4>{{ $item->categoriesFood }}</h4>
                <h5>{{ $item->stockFood }}</h5>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ $item->id }}" class="btn btn-success"><i class="mdi mdi-cart fs-3"></i></a>
                <form action="{{ route('food.destroy',$item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="confirm('yakin ingin menghapus item?')"><i
                            class="mdi mdi-delete fs-3"></i></button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>