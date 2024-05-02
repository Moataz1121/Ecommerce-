@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Products</h2>

            <div class="page-title-right">
              <x-add-thing href="{{route('admin.products.create')}}" name="Add Featuers"></x-add-thing>
            </div>
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                 
           
              @if (session('updated'))
    <div class="alert alert-success">
        {{ session('updated') }}
    </div>
@endif
<x-successfuly-component></x-successfuly-component>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Salary</th>
                      <th>Image</th>
                      <th>Category Name</th>
                      <th>Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($data) > 0)
                    @foreach ($data as $product )
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->salary }}</td>
                        <td><img src="{{asset("storage/products/$product->imgae")}}" alt="" width="50px"></td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                          <x-edit-component href="{{route('admin.products.edit',['product'=>$product])}}"></x-edit-component>
                          <x-show-component  href="{{route('admin.products.show',['product'=>$product])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.products.destroy' , ['product' => $product])}}" iddd="{{ $product->id }}"></x-delete-component>
                        </td>
                      </tr>
                    @endforeach
                        
                  
                    @endif
                 
                    


                  </tbody>
                </table>
                {{ $data->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>
</main>

@endsection
