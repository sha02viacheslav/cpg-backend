<!-- Errors -->
@if($errors->any())
    <div class="col-lg-12">
        <label class="errorNot" >Errores</label>
        <div id="error-box">
            @foreach ($errors->all() as $error)
                <span class="col-lg-6">{{ $error }}</span>
            @endforeach
        </div>
    </div>
    <div class="clear">     </div>
    <h1>wtf</h1>
@endif

<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    <label for="username" >Nombre Usuario</label>
    {{Form::text('nombre', $manager->nombre, ['class' => 'form-control', 'required'])}}

    @if ($errors->has('nombre'))
        <span class="help-block">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" >E-Mail </label>
    {{Form::email('email', $manager->email, ['class' => 'form-control', 'required'])}}
    @if ($errors->has('email'))
        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    @if(! isset($isEdit))
        <label for="password" >Password</label>
    @else
        <label for="password" >New Password</label>
    @endif
    <input id="password" type="password" class="form-control" name="password" >
    @if ($errors->has('password'))
        <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>
<div class="form-group">
    <label for="nivel" >Nivel</label>
    {{Form::select('nivel', [
          '1' => 'Recluatador',
          '2' => 'Agente / Club',
          ]
          , $manager->nivel, ['class' => 'form-control'])}}
</div>

<div class="form-group center">
    <a href="{{ url()->previous() }}" class="btn btn-danger btn-fill moveRight">CANCELAR</a>
    <button  type="submit" class="btn btn-info btn-fill"> GUARDAR</button>
</div>