@if(Session::has('alertD'))
    <div class="alert-danger">
        {!!  Session::get('alertD') !!}
    </div>
@endif
@if(Session::has('alertC'))
    <div class="alert-success">
        {!!  Session::get('alertC') !!}
    </div>
@endif
@if(Session::has('alertU'))
    <div class="alert-info">
        {!!  Session::get('alertU') !!}
    </div>
@endif