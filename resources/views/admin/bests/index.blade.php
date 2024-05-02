@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Best Products</h2>

            <div class="page-title-right">
              <x-add-thing href="{{route('admin.best.create')}}" name="Add Best "></x-add-thing>
            </div>
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                 
           
              @if (session('created'))
    <div class="alert alert-success">
        {{ session('created') }}
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
                    @foreach ($data as $best )
                    <tr>
                        <td>{{ $best->title }}</td>
                        <td>{{ $best->salary }}</td>
                        <td><img src="{{asset("storage/best/$best->imgae")}}" alt="" width="50px"></td>
                        <td>{{ $best->category->name }}</td>
                        <td>
                          <x-edit-component href="{{route('admin.best.edit',['best'=>$best])}}"></x-edit-component>
                          <x-show-component  href="{{route('admin.best.show',['best'=>$best])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.best.destroy' , ['best' => $best])}}" iddd="{{ $best->id }}"></x-delete-component>
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
