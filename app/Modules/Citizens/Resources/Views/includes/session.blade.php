@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="text-align: center" >
    <strong>Success:</strong>{{Session::get('success')}}
</div>
@endif