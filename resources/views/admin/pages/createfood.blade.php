@extends('template.base')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Add Food</h4>
        <form class="forms-sample" action="{{ route('food.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputUsername1">Nama Makanan</label>
                <input type="text" class="form-control text-light" id="exampleInputUsername1" placeholder="Nama Makanan"
                    name="nameFood">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga Makanan</label>
                <input type="number" class="form-control text-light" id="exampleInputEmail1" placeholder="Harga makanan"
                    name="priceFood">
            </div>
            <div class="form-group">
                <div class="form-group" data-select2-id="7">
                    <label>Kategori Makanan</label>
                    <select class="js-example-basic-single select2-hidden-accessible p-2 bg-dark text-light"
                        style="width:100%" name="categoriesFood">
                        <option value="1">Makanan Ringan</option>
                        <option value="2">Makanan Berat</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmPassword1">Stok Makanan</label>
                <input type="number" class="form-control text-light" id="exampleInputConfirmPassword1"
                    placeholder="Stok Food" name="stockFood">
            </div>
            <div class="form-group">
                <label for="img">Gambar Makanan</label>
                <input type="file" class="form-control file-upload-info text-light" name="foodImg">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </form>
    </div>
</div>
@endsection