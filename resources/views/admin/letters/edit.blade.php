@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.letter.update' , ['letter' => $letter]) }}" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <x-session-component name="update"></x-session-component>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" name="title" class="form-control" value="{{ $letter->title }}">
                        <x-error-component title='title'></x-error-component>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" value="{{ $letter->name }}" name="name" class="form-control" placeholder="Enter Your Salary">
                        <x-error-component title='name'></x-error-component>
                    </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                        <label name = 'name'>Image</label>
                        <input type="file" name="imgae" class="form-control" placeholder="Enter Your Image">
                        <x-error-component title="imgae"></x-error-component>
                       
                    </div>
                </div>

              

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <input type="text" name="description" value="{{ $letter->description }}" class="form-control">
                        <x-error-component title='description'></x-error-component>

                    </div>
                    <button class="btn btn-primary mx-3" type="submit">Submit</button>

                </div>

            </div>

        </form>
    </main>
@endsection