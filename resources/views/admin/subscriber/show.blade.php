@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <p type="text" name="name" class="form-control">{{ $subscriber->email }}</p>
                        
                    </div>
                </div>


               


            </div>

        
    </main>
@endsection