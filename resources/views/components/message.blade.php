 @if (session()->has('message'))
       
    <div class="alert alert-success text-center" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

@error('event')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
@enderror

@error('data')
    <div class="alert alert-danger text-center" role="alert">
        {{ $message }}
    </div>
@enderror