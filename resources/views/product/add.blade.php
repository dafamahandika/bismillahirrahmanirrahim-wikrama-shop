@extends('layouts.main')
@section('title')
     Add Product
@endsection
@section('content')
<div class="row justify-content-center">
            <div class="col-lg-5">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container m-6">
                    <main class="form-register input">
                        <div class="card shadow p-5 bg-secondary bg-opacity-25">
                        <form action="{{ route('storeProduct') }}" method="POST" enctype >
                           @csrf
                            <h1 class="h3 mb-3 fw-normal text-center">Add Product</h1>
                            <!-- <div class="form-floating">
                                <input type="text" name="code-product" class="form-control mt-2" id="name" placeholder="WS-P">
                                <label for="name">Code Product</label>
                            </div> -->
                            <div class="form-floating">
                                <input type="text" name="product_name" class="form-control mt-2" id="name" placeholder="name">
                                <label for="name">Name Product</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="product_price" class="form-control mt-2" id="text" placeholder="Price">
                                <label for="text">Price</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="product_stock" class="form-control mt-2" id="text" placeholder="Price">
                                <label for="text">Stock</label>
                            </div>
                            <div class="mb-3">
                                   <label for="formFile" class="form-label">Image Product</label>
                                   <input class="form-control" type="file" id="formFile" name="product_image">
                            </div>
                            <div class="form-floating mb-3">
                                   <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="product_category">
                                        <option selected>Product Category</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Aksesoris">Aksesoris</option>
                                        <option value="Minyak wangi">Minyak Wangi</option>
                                        <option value="Lainnya">Lainnya</option>
                                   </select>
                                   <label for="floatingSelect">Product Category</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="product_desc" class="form-control mt-2" id="text" placeholder="Product Description" height="500px">
                                <label for="text">Description</label>
                            </div>
                            <div class="row justify-content-center">
                            <button class="w-50 btn btn-lg btn-secondary mt-4" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                    </main>
                </div>
            </div>
        </div>
@endsection

