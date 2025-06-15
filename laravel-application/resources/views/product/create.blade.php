@extends('layouts5.app')
@section('content')
<h1><i>Add New Product</i></h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label>Category_id</label>
            <input type="number" name="category_id" class="form-control" value="{{old('category_id')}}">
        </div>
        <div class="form-group">
            <label>Price</label>
<input type="number" name="price" class="form-control" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label>Stock</label>
<input type="number" name="stock" class="form-control" value="{{old('stock')}}">
        </div>
        <div class="form-group">
            <label>Discount</label>
<input type="text" name="discount" class="form-control" value="{{old('discount')}}">
        </div>
        <div class="form-group">
            <label>Count</label>
            <input type="number" name="count" class="form-control" value="{{old('count')}}">
        </div>
        <div class="form-group">
            <label>Date_production</label>
<input type="date" name="date_production" class="form-control" value="{{old('date_production')}}">
        </div>
        <div class="form-group">
            <label>Best_Before_Date</label>
<input type="date" name="best_before_date" class="form-control" value="{{old('best_before_date')}}">
        </div>
        <div class="form-group">
            <label>Production_Country</label>
<input type="text" name="production_country" class="form-control" value="{{old('product_country')}}">
        </div>
        <div class="form-group">
            <label>Production_Company</label>
            <input type="text" name="production_company" class="form-control" value="{{old('production_company')}}">
        </div>
        <div class="form-group">
            <label>Barcode</label>
<input type="number" name="barcode" class="form-control" value="{{old('barcode')}}">
        </div>
        <div class="form-group">
            <label>Compound</label>
<input type="text" name="compound" class="form-control" value="{{old('compound')}}">
        </div>
        <div class="form-group">
            <label>Image</label>
<input type="text" name="image" class="form-control" value="{{old('image')}}">
        </div>
       <div class="form-group">
         <label>Unit</label>
           <input type="text" name="unit" class="form-control" value="{{old('unit')}}">
       </div>
        <div class="form-group">
            <label>Guarantee</label>
<input type="text" name="guarantee" class="form-control" value="{{old('guarantee')}}">
        </div>
        <div class="form-group">
            <label>Loader</label>
<input type="text" name="loader" class="form-control" value="{{old('loader')}}">
        </div>
        <div class="form-group">
            <label>Driver</label>
<input type="text" name="driver" class="form-control" value="{{old('driver')}}">
        </div>
        <div class="form-group">
            <label>Description</label>
<input type="text" name="description" class="form-control" value="{{old('description')}}">
        </div>
     <button type="submit"  class="btn btn-secondary mt-3">
         Save
     </button>
    </form>
@endsection
