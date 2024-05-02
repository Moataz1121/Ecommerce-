@if (session('delete'))
    <div class="alert alert-success">
    {{ session('delete') }}
    </div>
 @endif