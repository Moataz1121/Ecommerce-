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
                        <p type="text" name="name" class="form-control">{{ $featuer->name }}</p>
                        
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <p type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        {{ $featuer->icon }}    
                    </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <p type="text" name="description" class="form-control">
                        {{ $featuer->description }}    
                    </p>
                    </div>

                </div>

            </div>

        </form>
    </main>
@endsection