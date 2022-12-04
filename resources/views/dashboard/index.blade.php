@extends('layouts.main')
@section('title')
     Wikrama Shop
@endsection
@section('content')
<div class="container ">
     <div class="row justify-content-center ">
          <h1 class="text-center">Hello {{ auth()->user()->name }}</h1>
     </div>     
</div>
@if ($message = Session::get('success'))

<div class="alert alert-success d-flex justify-content-center" width="15" height="10" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        {{$message}}
    </div>
</div>
@endif

@if ($message = Session::get('edit'))
<div class="alert alert-primary d-flex justify-content-center" width="15" height="10" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
    <div>
        {{$message}}
    </div>
</div>
@endif

@if ($message = Session::get('delete'))
<div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
        {{$message}}
    </div>
</div>
@endif

<div class="row m-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Wikrama Shop
                            <a href="{{ route('createProduct') }}" class="btn btn-success float-end">Add Prodct</a>
                        </h4>
                        
                    </div>
                    <table class="table-bordered table table-striped text-center p-4">
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>Kategori Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Stok Produk</th>
                            <th>Foto Produk</th>
                            <th>Deskirpsi Produk</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        @foreach($data as $dt)
                        <tr>  
                        <td>{{$i++}}</td>
                        <td>{{$dt->product_category}}</td>
                        <td>{{$dt->product_name}}</td>
                        <td>Rp. {{$dt->product_price}}</td>
                        <td>{{$dt->product_stock}}</td>
                        <td>{{$dt->product_image}}</td>
                        <td>{{$dt->product_desc}}</td>
                        <td>
                            <form action="{{ route('destroyProduct', $dt->id) }}" method="post">
                                @csrf
                                <a class="btn btn-success" href="{{ route('editProduct', $dt->id) }}">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

