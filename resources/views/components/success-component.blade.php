@if (session('created'))
    <div class="alert alert-success">
    {{ session('created') }}
    </div>
 @endif