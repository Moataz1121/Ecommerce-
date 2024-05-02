@extends('admin.master')

@section('content')
<main class="main-content" role="main">

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">Subscribers</h2>

            
        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                
                <x-successfuly-component></x-successfuly-component> 
        
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($data) > 0)
                    <tr>
                        @foreach ($data as $subscriber)
                        <td>{{ $subscriber->email }}</td>
                        <td>
                          <x-show-component  href="{{route('admin.subscriber.show',['subscriber'=>$subscriber])}}"></x-show-component>
                          <x-delete-component href="{{route('admin.subscriber.destroy' , ['subscriber' => $subscriber])}}" iddd="{{ $subscriber->id }}"></x-delete-component>
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
