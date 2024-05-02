@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
           
          
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Title</label>
                        <p type="text" name="name" class="form-control">{{ $best->title }}</p>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Salary</label>
                        <p type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        {{ $best->salary }}    
                    </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Image</label>
                        <img src="{{asset("storage/best/$best->imgae")}}" alt="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <p type="text" name="description" class="form-control">
                        {{ $best->description }}    
                    </p>
                    </div>

                </div>

            </div>

    </main>
@endsection