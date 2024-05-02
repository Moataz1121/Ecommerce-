@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.best.store') }}" enctype="multipart/form-data">
           @csrf
           @if (session('created'))
        <div class="alert alert-success">
        {{ session('created') }}
        </div>
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Title</label>
                        <input type="text" name="title" class="form-control">
                        <x-error-component title="title"></x-error-component>
                       
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Salary</label>
                        <input type="text" name="salary" class="form-control" placeholder="Enter Your salary">
                        <x-error-component title="salary"></x-error-component>
                       
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
                        <select name = 'category_id'>
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
                        <input type="text" name="description" class="form-control">
                        <x-error-component title="description"></x-error-component>
                    </div>
                    <x-submit-button></x-submit-button>
                </div>

            </div>

        </form>
    </main>
@endsection