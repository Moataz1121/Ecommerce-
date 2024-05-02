@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.moataz.store') }}" enctype="multipart/form-data">
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
                        <input type="text" name="title" class="form-control">
                        <x-error-component title="title"></x-error-component>
                       
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <input type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        <x-error-component title="icon"></x-error-component>
                       
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Number</label>
                        <input type="number" name="number" class="form-control">
                        <x-error-component title="number"></x-error-component>
                    </div>
                    <x-submit-button></x-submit-button>
                </div>

            </div>

        </form>
    </main>
@endsection