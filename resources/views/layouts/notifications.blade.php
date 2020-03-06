@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" >
    <strong>¡Éxito!</strong> {{ Session::get('success') }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" autofocus>
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" >
        <strong>¡Advertencia!</strong> {{ Session::get('warning') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" autofocus>
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
