@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.featuers.update' , ['featuer' => $featuer]) }}" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <x-session-component name="update"></x-session-component>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $featuer->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <input type="text" value="{{ $featuer->icon }}" name="icon" class="form-control" placeholder="Enter Your Icon">
                        @error('icon')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <input type="text" name="description" value="{{ $featuer->description }}" class="form-control">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary mx-3" type="submit">Submit</button>

                </div>

            </div>

        </form>
    </main>
@endsection