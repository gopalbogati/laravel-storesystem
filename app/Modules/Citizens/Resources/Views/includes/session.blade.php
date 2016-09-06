@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="text-align: center" >
    <strong>Success:</strong>{{Session::get('success')}}
</div>
@endif
@if (Session::has('message') )
    <div class="alert alert-danger" align="center">
        {!! Session::get('message') !!}
    </div>
@endif