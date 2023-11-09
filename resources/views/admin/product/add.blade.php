@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12 mb-4 mb-xl-0">
            <div class="card">
              <div class="card-body">
                <h2> Add Product </h2>
        @if (Session:: has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{url('admin/product/save')}}">
        @csrf 
        <div class="md-3">
            <label class="form-label" for="id">Ids</label>
            <input type="text" name="id" class="form-control" placeholder="Enter data">
            @error('Id')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

            <div class="md-3">
                <label class="form-label" for="name">Product name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter data">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="md-3">
                <label class="form-label" for="price">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter data">
                @error('price')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="md-3">
                <label class="form-label" for="image">Image</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            
            <div class="md-3">
                <label class="form-label" for="detail">Detail</label>
                <textarea name="detail" rows="5" placeholder="Enter data" class="form-control"></textarea>
                @error('detail')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="md-3">
                <label class="form-label" for="trademark">Trademark</label>
                {{-- <input type="number" name="producer" class="form-control"> --}}
                <select name="trademark" class="form-control">
                    @foreach ($trademark as $product)
                        <option value="{{$product->trademarkId}}">{{$product->trademarkName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="md-3">
                <label class="form-label" for="category">Category</label>
                {{-- <input type="number" name="producer" class="form-control"> --}}
                <select name="category" class="form-control">
                    @foreach ($categories as $product)
                        <option value="{{$product->categoryID }}">{{$product->categoryName}}</option>
                    @endforeach
                </select>
            </div>

             <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('admin/product')}}" class="btn btn-danger">Back</a>
        </form>
              </div>
            </div>
          </div>
          @endsection
