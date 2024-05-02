@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
           
          
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Title</label>
                        <p type="text" name="name" class="form-control">{{ $product->title }}</p>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Salary</label>
                        <p type="text" name="icon" class="form-control" placeholder="Enter Your Icon">
                        {{ $product->salary }}    
                    </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Image</label>
                        <img src="{{asset("storage/products/$product->imgae")}}" alt="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Description</label>
                        <p type="text" name="description" class="form-control">
                        {{ $product->description }}    
                    </p>
                    </div>

                </div>

            </div>

    </main>
@endsection