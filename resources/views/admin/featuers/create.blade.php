@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.featuers.store') }}" enctype="multipart/form-data">
           @csrf
           @if (session('created'))
        <div class="alert alert-success">
        {{ session('created') }}
        </div>
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <input type="text" name="name" class="form-control">
                        <x-error-component title="name"></x-error-component>
                       
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <input type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        <x-error-component title="icon"></x-error-component>
                       
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