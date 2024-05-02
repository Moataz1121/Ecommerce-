@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        <form method="POST" action="{{ route('admin.moataz.store') }}" enctype="multipart/form-data">
           @csrf
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <p type="text" name="name" class="form-control">{{ $moataz->title }}</p>
                        
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Icon</label>
                        <p type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        {{ $moataz->icon }}    
                    </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Number</label>
                        <p type="text" name="number" class="form-control">
                        {{ $moataz->number }}    
                    </p>
                    </div>

                </div>

            </div>

        </form>
    </main>
@endsection