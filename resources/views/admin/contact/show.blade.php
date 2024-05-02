@extends('admin.master')

@section('content')
    <main class="main-content" role="main">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <p type="text" name="name" class="form-control">{{ $contact->email }}</p>
                        
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label name = 'name'>Name</label>
                        <p type="text" name="name" class="form-control" placeholder="Enter Your name">
                        {{ $contact->name }}    
                    </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label name = 'name'>Message</label>
                        <p type="text" name="message" class="form-control">
                        {{ $contact->message }}    
                    </p>
                    </div>

                </div>

            </div>

        
    </main>
@endsection