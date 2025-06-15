@extends('layouts5.app')
@section('content')

    <h1>Edit Product</h1>
     @if($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
     @endif

    <form action="{{route('product.update',$product)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}">
        </div>
        <div class="form-group">
            <label>Category_id</label>
<input type="number" name="category_id" class="form-control" value="{{old('category_id',$product->category_id)}}">
        </div>
        <div class="form-group">
            <label>Price</label>
<input type="number" name="price" class="form-control" value="{{old('price',$product->price)}}">
        </div>
        <div class="form-group">
            <label>Stock</label>
<input type="number" name="stock" class="form-control" value="{{old('stock',$product->stock)}}">
        </div>
        <div class="form-group">
            <label>Discount</label>
<input type="text" name="discount" class="form-control" value="{{old('discount',$product->discount)}}">
        </div>
        <div class="form-group">
            <label>Count</label>
            <input type="number" name="count" class="form-control" value="{{old('count',$product->count)}}">
        </div>
        <div class="form-group">
            <label>Date_Production</label>
<input type="date" name="date_production" class="form-control" value="{{old('date_production',$product->date_production)}}">
        </div>
        <div class="form-group">
            <label>Best_Before_Date</label>
            <input type="date" name="best_before_date" class="form-control" value="{{old('best_before_date',$product->best_before_date)}}">
        </div>
        <div class="form-group">
            <label>Production_country</label>
<input type="text" name="production_country" class="form-control" value="{{old('production_country',$product->production_country)}}">
        </div>
        <div class="form-group">
            <label>Production_company</label>
<input type="text" name="production_company" class="form-control" value="{{old('production_company',$product->production_company)}}">
        </div>
        <div class="form-group">
            <label>Barcode</label>
<input type="number" name="barcode" class="form-control" value="{{old('barcode',$product->barcode)}}">
        </div>
        <div class="form-group">
            <label>Compound</label>
<input type="text" name="compound" class="form-control" value="{{old('compound',$product->compound)}}">
        </div>
        <div class="form-group">
            <label>Image</label>
<input type="text" name="image" class="form-control" value="{{old('image',$product->image)}}">
        </div>
        <div class="form-group">
            <label>Unit</label>
<input type="text" name="unit" class="form-control" value="{{old('unit',$product->unit)}}">
        </div>
        <div class="form-group">
            <label>Guarantee</label>
<input type="text" name="guarantee" class="form-control" value="{{old('guarantee',$product->guarantee)}}">
        </div>
        <div class="form-group">
            <label>Loader</label>
<input type="text" name="loader" class="form-control" value="{{old('loader',$product->loader)}}">
        </div>
        <div class="form-group">
             <label>Driver</label>
<input type="text" name="driver" class="form-control" value="{{old('driver',$product->driver)}}">
        </div>
        <div class="form-group">
             <label>Description</label>
<input type="text" name="description" class="form-control" value="{{old('description',$product->description)}}">
        </div>
        <button type="submit" class="btn btn-warning mt-3">
            Update
        </button>
    </form>

@endsection
