@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Testmonials</h2>

            <div class="page-title-right">
              <x-add-thing href="{{route('admin.letter.create')}}" name="Add Testmonials"></x-add-thing>
            </div>
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                 
                <x-successfuly-component></x-successfuly-component>
                <x-success-component></x-success-component>
                <x-updated-component></x-updated-component>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($data) > 0)
                    @foreach ($data as $letter )
                    <tr>
                        <td>{{ $letter->title }}</td>
                        <td>{{ $letter->name }}</td>
                        <td><img src="{{asset("storage/letter/$letter->imgae")}}" alt="" width="50px"></td>
                        <td>
                          <x-edit-component href="{{route('admin.letter.edit',['letter'=>$letter])}}"></x-edit-component>
                          <x-show-component  href="{{route('admin.letter.show',['letter'=>$letter])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.letter.destroy' , ['letter' => $letter])}}" iddd="{{ $letter->id }}"></x-delete-component>
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
