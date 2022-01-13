
<h1>crear nuevos empleado</h1>
<form action="{{url('empleado')}}" method="post" >
@csrf
@include('empleado.form',['modo'=>'Crear'])

</form>

