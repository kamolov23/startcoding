@extends('layouts5.app')

@section('content')
<h1>Products List</h1>
<table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category_id</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Discount</th>
            <th>Count</th>
            <th>Date_production</th>
            <th>Best_Before_Date</th>
            <th>Production_Country</th>
            <th>Production_Company</th>
            <th>Barcode</th>
            <th>Compound</th>
            <th>Image</th>
            <th>Unit</th>
            <th>Guarantee</th>
            <th>Loader</th>
            <th>Driver</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
<td>{{$loop->iteration}}</td>
<td>{{$product->name}}</td>
<td>{{$product->category->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->stock}}</td>
<td>{{$product->discount}}</td>
<td>{{$product->count}}</td>
<td>{{$product->date_production}}</td>
<td>{{$product->best_before_date}}</td>
<td>{{$product->production_country}}</td>
<td>{{$product->production_company}}</td>
 <td>{{$product->barcode}}</td>
<td>{{$product->compound}}</td>
<td>{{$product->image}}</td>
<td>{{$product->unit}}</td>
<td>{{$product->guarantee}}</td>
<td>{{$product->loader}}</td>
<td>{{$product->driver}}</td>
<td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',$product)}}" class="btn btn-warning mt-3">
                       Edit
                    </a>
                </td>
                <td>
                        <form action="{{route('product.destroy',$product)}}" method="post">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger mt-3">
                          Delete
                      </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
