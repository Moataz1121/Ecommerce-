@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.best.update' , ['best' => $best]) }}" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <x-session-component name="update"></x-session-component>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" name="title" class="form-control" value="{{ $best->title }}">
                        <x-error-component title='title'></x-error-component>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Salary</label>
                        <input type="text" value="{{ $best->salary }}" name="salary" class="form-control" placeholder="Enter Your Salary">
                        <x-error-component title='title'></x-error-component>
                    </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                        <label name = 'name'>Image</label>
                        <input type="file" name="imgae" class="form-control" placeholder="Enter Your Image">
                        <x-error-component title="imgae"></x-error-component>
                       
                    </div>
                </div>

                <div class="col-md-6 my-4">
                    <div class="form-group">
                        <label name = 'name'>Category</label>
                        <select name = 'category_id' >
                            <option value="{{$best->category->name}}">{{ $best->category->name }}</option>
                            @foreach ($categories as $category )
                                <option  value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-error-component title="category_id"></x-error-component>
                       
                    </div>
                    </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <input type="text" name="description" value="{{ $best->description }}" class="form-control">
                        <x-error-component title='description'></x-error-component>

                    </div>
                    <button class="btn btn-primary mx-3" type="submit">Submit</button>

                </div>

            </div>

        </form>
    </main>
@endsection