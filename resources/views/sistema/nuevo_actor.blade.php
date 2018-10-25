<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alta actor | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form action ="{{route ('guardaactor')}}" method = 'POST'/>
        <h2>Nuevo Actor</h2>
        {{csrf_field()}}

        @if($errors->first('ida'))
        <i> {{$errors->first('ida')}}</i>
        @endif
        <input type="text" placeholder="ID de Actor" name="ida" value="{{$idms}}" readonly="readonly"/><br><br>
        
        @if($errors->first('nombre'))
        <i> {{$errors->first('nombre')}}</i>
        @endif
        <input type="text" placeholder="Nombre" name="nombre" value="{{old('nombre')}}"/><br><br>
        
        @if($errors->first('ap'))
        <i> {{$errors->first('ap')}}</i>
        @endif
        <input type="text" placeholder="Apellido Paterno" name="ap" value="{{old('ap')}}"/><br><br>

        @if($errors->first('am'))
        <i> {{$errors->first('am')}}</i>
        @endif
        <input type="text" placeholder="Apellido Materno" name="am" value="{{old('am')}}"/><br><br>

        <label for="id_obra">Seleccione una Obra</label><br>
        <select name ="id_obra">
        @foreach($obras as $ob)
        <option value= '{{$ob->ido}}'>{{$ob->nombre}}</option>
        @endforeach
        </select><br><br>

        @if($errors->first('archivo'))
        <i> {{$errors->first('archivo')}}</i>
        @endif
        <input type="file" name="archivo"/><br><br>
        <input type='submit' value='Guardar'>
    </form>
</body>
</html>