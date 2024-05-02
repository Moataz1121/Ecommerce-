@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Featuers</h2>

            <div class="page-title-right">
              <x-add-thing href="{{route('admin.featuers.create')}}" name="Add Featuers"></x-add-thing>
            </div>
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                <x-session-component name="update"></x-session-component>
                
                <x-successfuly-component></x-successfuly-component> 
           
        
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Icon</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($data) > 0)
                    <tr>
                        @foreach ($data as $featuer)
                        <td>{{ $featuer->name }}</td>
                        <td>{{ $featuer->icon }}</td>
                        <td>
                          <x-edit-component href="{{route('admin.featuers.edit',['featuer'=>$featuer])}}"></x-edit-component>
                          <x-show-component  href="{{route('admin.featuers.show',['featuer'=>$featuer])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.featuers.destroy' , ['featuer' => $featuer])}}" iddd="{{ $featuer->id }}"></x-delete-component>
                        </td>
                        

                        @endforeach

                      </tr>
                      @else
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
