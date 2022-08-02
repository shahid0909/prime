@if(Session::has('message'))
    <div class="alert alert-success">
    <strong>Success!</strong> {{ Session::get('message', '') }}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
    <strong>Erorr!</strong> {{ Session::get('error', '') }}
    </div>
@endif
