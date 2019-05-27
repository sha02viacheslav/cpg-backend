<!-- Errors -->
@if($errors->any() || session()->get('error'))
    <h1>dale</h1>
    <div class="col-lg-12">
        <label class="errorNot" >Errores</label>
        <div id="error-box">

        @if(session()->get('error'))
            <span class="col-lg-6">{{ session()->get('error') }}</span>
        @else
            @foreach ($errors->all() as $error)
                <span class="col-lg-6">{{ $error }}</span>
            @endforeach
        @endif
        </div>
    </div>
    <div class="clear">     </div>
@endif

<!-- Nombre -->
<div class="col-lg-6">
    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
        <label for="username" >Nombre Completo</label>
        {{Form::text('nombre', $jugador->nombre, ['id' => 'nombre', 'class' => 'form-control', 'placeholder' => 'Lionel Messi', 'required'])}}
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
        <label>Fecha de Nacimiento</label>
        {{Form::text('fecha_nacimiento', null, ['class' => 'form-control datepicker', 'id' => 'fecha_nacimiento'])}}
    </div>
</div>

<!-- Pais -->
<div class="col-lg-6">
    <div class="form-group" >
        <label>Pais</label>
        {{Form::select('pais_id', $paises, $jugador->pais_id ?  $jugador->pais_id : '1' , ['class' => 'form-control', 'id' => 'pais_id'])}}
    </div>
</div>
<div class="col-lg-6" id="provLi">
    <!-- Provincia -->
    <div class="form-group" >
        <label>Provincia</label>
        {{Form::select('provincia_id', $provincias, $jugador->provincia_id , ['class' => 'form-control ', 'id' => 'provincia_id'])}}
    </div>
</div>
<div class="col-lg-6 ">
    <!-- Altura -->
    <div class="form-group{{ $errors->has('altura') ? ' has-error' : '' }} inlineCustomForm alturaForm">
        <label for="altura">Altura</label>
        @if($jugador->altura)
            <input  value="{{ substr($jugador->altura, 0, 1) }}" class="form-control fleft" name="alturaL" id="alturaL"type="text" placeholder="1" required/>
        @else
            <input  value="{{ old('alturaL') }}" class="form-control fleft" name="alturaL" id="alturaL"type="text" placeholder="1" required/>
        @endif
        <input class="fs-anim-lower fmid1" type="text" value="." disabled/>
        @if($jugador->altura)
            <input value="{{substr($jugador->altura, -2)}}" class="form-control fmid" id="altura" name="altura" type="text" placeholder="76" required/>
        @else
            <input value="{{old('altura')}}" class="form-control fmid" id="altura" name="altura" type="text" placeholder="76" required/>
        @endif
        <input class="form-control fsmall" type="text" value="Mts" disabled/>
    </div>
</div>
<div class="col-lg-6 ">
    <!-- Peso -->
    <div class="form-group{{ $errors->has('peso') ? ' has-error' : '' }} inlineCustomForm pesoForm">
    <label  for="peso">Peso</label>
    {{Form::text('peso', $jugador->peso, ['id' => 'peso', 'class' => 'form-control fsmaller', 'placeholder' => '70', 'required'])}}
    <input class="fs-anim-lower fsmall" type="text" value="kg" disabled/>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group posicionesBox {{ $errors->has('posicion_id') ? "error" : "" }}">
        <!-- Posición -->
        <label  for="posicion_id">Posición</label>
        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
        <span>
            <input {{ ($jugador->posicion_id == '1' || old('posicion_id') == '1') ? 'checked' : '' }} id="posiciona" name="posicion_id" type="radio" value="1"/>
            <label for="posiciona" class="radio-arq">Arquero</label>
        </span>
        <span>
            <input {{ ($jugador->posicion_id == '2' || old('posicion_id') == '2') ? 'checked' : '' }} id="posicionb" name="posicion_id" type="radio" value="2"/>
            <label for="posicionb" class="radio-def">Defensor</label>
        </span>
        <span>
            <input {{ ($jugador->posicion_id == '3' || old('posicion_id') == '3') ? 'checked' : '' }} id="posicionc" name="posicion_id" type="radio" value="3"/>
            <label for="posicionc" class="radio-mid">Medio Campo </label>
        </span>
        <span>
            <input {{ ($jugador->posicion_id == '4' || old('posicion_id') == '4') ? 'checked' : '' }} id="posiciond" name="posicion_id" type="radio" value="4"/>
            <label for="posiciond" class="radio-del">Delantero</label>
        </span>
        </div>
    </div>
</div>
<div class="col-lg-6 ">
    <!-- Pasaporte -->
    <div class="form-group posicionesBox">
        <label for="pasaporte">¿Pasaporte?</label>
        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
            <span><input {{ ($jugador->pasaporte == '1' || old('pasaporte') == '1')  ? 'checked' : '' }} id="pasaporteb" name="pasaporte" type="radio" value="1"/><label for="pasaporteb" class="radio-yes">SI</label></span>
            <span><input {{($jugador->pasaporte == '0' || old('pasaporte') == '0') ? 'checked' : '' }} id="pasaportec" name="pasaporte" type="radio" value="0"/><label for="pasaportec" class="radio-no">NO </label></span>
        </div>
    </div>
</div>
<div class="col-lg-6 clear">
    <!-- Club -->
    <div class="form-group{{ $errors->has('club') ? ' has-error' : '' }}">
        <label for="username" >Club y Torneo / Liga Actual </label>
        {{Form::text('club', $jugador->club, ['id' => 'club', 'class' => 'form-control', 'placeholder' => 'Huracán, Primera Division '])}}
    </div>
    <!-- Imagen -->
    <div class="form-group upImg {{ $errors->has('imagen') ? ' has-error' : '' }}" >
        <label for="username" > Imagen </label>
        <div class="prevBox fs-anim-lower">
            @if($jugador->link_img)
                <img id="previewImage" src="{{Storage::disk('local')->url($jugador->link_img)}}">
            @else
                <img id="previewImage" src="{{url('/img/default.png')}}">
            @endif
        </div>
        <input type="file" id="imagen" name="imagen" placeholder="Imagen" class=" nice nicefileinput"  />

    </div>
</div>
<div class="col-lg-6 ">
    <!-- Historia -->
    <div class="form-group{{ $errors->has('historia') ? ' has-error' : '' }}">
        <label for="historia" >Historia</label>
        {{Form::textarea('historia', $jugador->historia, ['id' => 'historia', 'class' => 'form-control', 'placeholder' => 'Historia del jugador'])}}
    </div>
</div>

<div class="col-lg-6">
    <!-- Video -->
    <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
        <label for="username" >Link Video </label>
        {{Form::text('video',  $jugador->link_video ? 'http://youtu.be/'.$jugador->link_video : null , ['id' => 'video', 'class' => 'form-control', 'placeholder' => 'http://youtu.be/wMkUrs2tCvo'])}}

    </div>
</div>

<div class="col-lg-6">
    <!-- Email -->
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="username" >Email </label>
        {{Form::email('email', $jugador->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'juan@gmail.com', 'required'])}}
    </div>
</div>
<div class="col-lg-6">
    <!-- Telefono -->
    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
        <label for="username" >Telefono </label>
        {{Form::text('telefono', $jugador->telefono, ['id' => 'telefono', 'class' => 'form-control', 'placeholder' => '+54 011 155894466'])}}
    </div>
</div>

<!-- Enviar -->
<div class="col-lg-12">
    <div class="form-group center clear submitForm">
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-fill moveRight">CANCELAR</a>
        <button  type="submit" class="btn btn-info btn-fill"> ENVIAR FICHA</button>
    </div>
</div>

