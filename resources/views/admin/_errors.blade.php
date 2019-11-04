@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <h2>{{$error}}</h2>
    @endforeach
</div>
@endif