@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Moataz</h2>

            <div class="page-title-right">
              <x-add-thing href="{{route('admin.moataz.create')}}" name="Add Skills"></x-add-thing>
            </div>
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                <x-session-component name="update"></x-session-component>
                
                <x-successfuly-component></x-successfuly-component> 
                <x-success-component></x-success-component>
        
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
                        @foreach ($data as $moataz)
                        <td>{{ $moataz->title }}</td>
                        <td>{{ $moataz->icon }}</td>
                        <td>
                          <x-edit-component href="{{route('admin.moataz.edit',['moataz'=>$moataz])}}"></x-edit-component>
                          <x-show-component  href="{{route('admin.moataz.show',['moataz'=>$moataz])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.moataz.destroy' , ['moataz' => $moataz])}}" iddd="{{ $moataz->id }}"></x-delete-component>
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
