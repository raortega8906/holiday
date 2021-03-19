@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-default-danger">
            {{ $error }}
        </div>
    @endforeach
@endif
