@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{ $error }}</div>
    @endforeach
@endif