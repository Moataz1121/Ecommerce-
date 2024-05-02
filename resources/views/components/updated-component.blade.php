@if (session('updated'))
    <div class="alert alert-success">
    {{ session('updated') }}
    </div>
 @endif