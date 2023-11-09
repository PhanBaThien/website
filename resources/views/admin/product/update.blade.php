@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12 mb-4 mb-xl-0">
            <div class="card">
              <div class="card-body">
                <h2> Update </h2>
        @if (Session:: has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{url('admin/product/update')}}">
        @csrf 
        <div class="md-3">
            <label class="form-label" for="id">Ids</label>
            <input type="text" name="id" class="form-control" 
            placeholder="Enter data" value="{{$data->productID}}" readonly>
            @error('Id')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

            <div class="md-3">
                <label class="form-label" for="name">Product name</label>
                <input type="text" name="name" class="form-control"
                 placeholder="Enter data" value="{{$data->productName}}">
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="md-3">
                <label class="form-label" for="price">Price</label>
                <input type="text" name="price" class="form-control" 
                placeholder="Enter data" value="{{$data->productPrice}}">
                @error('price')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="md-3">
                <label class="form-label" for="image">Image</label>
                <input type="file" name="image" class="form-control"
                value="{{$data->productImage1}}">
                @error('image')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            </div>
            
            <div class="md-3">
                <label class="form-label" for="detail">Detail</label>
                <textarea name="detail" rows="5" placeholder="Enter data" class="form-control">{{$data->productDetails}}</textarea>
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
                    @if ($product->trademarkId == $data->trademarkId)
                      <option value="{{$product->trademarkId}}">{{$product->trademarkName}}</option>
                      @else
                      <option value="{{$product->trademarkId}}">{{$product->trademarkName}}</option>
                      @endif
                  @endforeach
              </select>
          </div>

            <div class="md-3">
                <label class="form-label" for="category">Category</label>
                {{-- <input type="number" name="producer" class="form-control"> --}}
                <select name="category" class="form-control">
                    @foreach ($categories as $product)
                      @if ($product->categoryID == $data->categoryID)
                        <option value="{{$product->categoryID }}">{{$product->categoryName}}</option>
                        @else
                        <option value="{{$product->categoryID}}">{{$product->categoryName}}</option>
                        @endif
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