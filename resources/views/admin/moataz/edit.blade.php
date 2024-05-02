@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.moataz.update' , ['moataz' => $moataz]) }}" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <x-session-component name="update"></x-session-component>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" name="title" class="form-control" value="{{ $moataz->title }}">
        
                        <x-error-component title='title'></x-error-component>

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <input type="text" value="{{ $moataz->icon }}" name="icon" class="form-control" placeholder="Enter Your Icon">
                        
                        <x-error-component title='icon'></x-error-component>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Number</label>
                        <input type="text" name="number" value="{{ $moataz->number }}" class="form-control">
                        
                        <x-error-component title='number'></x-error-component>
                    </div>
                    <button class="btn btn-primary mx-3" type="submit">Submit</button>

                </div>

            </div>

        </form>
    </main>
@endsection