@if(isset($review))
    {!! Form::model($jugador = new \App\Jugador, ['url' => 'quiero-ser-profesional', 'class'=>'fs-form fs-form-overview fs-show', 'autocomplete' => 'off', 'files'=>true]) !!}
@else
    {!! Form::model($jugador = new \App\Jugador, ['url' => 'quiero-ser-profesional', 'class'=>'fs-form fs-form-full', 'autocomplete' => 'off', 'files'=>true]) !!}
@endif

<ol class="fs-fields">
@include('partials.showErrors')
<!-- Nombre -->
    <li class="{{ $errors->has('nombre') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="nombre">¿Cómo te llamás?</label>
        {{Form::text('nombre', $jugador->nombre, ['id' => 'nombre', 'class' => 'fs-anim-lower', 'placeholder' => 'Lionel Messi', 'required'])}}
        @if ($errors->has('nombre'))
            <span class="help-block">
                <strong>{{ str_replace('.',' ', $errors->first('nombre')) }}</strong>
            </span>
        @endif
    </li>
    <!-- Pais -->
    <li id="pli" class="noBorder smallerMg" id="pedazo">
        <label class="fs-field-label fs-anim-upper"  >¿De dónde sos?</label>
        <select class="cs-select cs-skin-boxes fs-anim-lower patch paises"  name="pais_id" id="pais_id" required>
            <option value="" disabled >Elíje un país</option>
            @foreach ($paises as $pais)
                <option {{old('pais_id') == $pais->id ? 'selected' : '' }} value="{{$pais->id}}" data-class="{{$pais->code}}" name="{{$pais->code}}" {{ $pais->code == 'AR'? 'selected' : '' }}> {{$pais->nombre}}</option>
            @endforeach
        </select>
    </li>
    @if ($errors->has('pais_id'))
        <span class="help-block">
                                <strong>{{ str_replace('_id',' ', $errors->first('pais_id')) }}</strong>
                            </span>
@endif
<!-- Provincia -->
    <li id="provLi" class="noBorder smallerMg {{ $errors->has('provincia_id') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" >¿De qué provincia?</label>
        <select class="cs-select cs-skin-boxes fs-anim-lower patch" name="provincia_id"  id="provincia_id">
            <option value="" disabled selected> Elíje una provincia</option>
            @foreach ($provincias as $provincia)
                <option {{old('provincia_id') == $provincia->id ? 'selected' : '' }} value="{{$provincia->id}}" data-class="{{$provincia->nombre}}" name="{{$provincia->nombre}}" > {{$provincia->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('provincia_id'))
            <span class="help-block">
                            <strong>{{ str_replace('_id',' ', $errors->first('provincia_id')) }}</strong>
                        </span>
        @endif
    </li>
    <!-- Edad -->
    <li class="{{ $errors->has('edad') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="edad">¿Cuántos años tenés?</label>
        {{Form::text('edad', $jugador->edad, ['id' => 'edad', 'class' => 'fs-anim-lower fsmaller2', 'placeholder' => '15', 'required'])}}
        <input class="fs-anim-lower fsmall2" type="text" value="años" disabled/>
        @if ($errors->has('edad'))
            <span class="help-block">
                <strong>{{ str_replace('.',' ', $errors->first('edad')) }}</strong>
            </span>
        @endif
    </li>
    <!-- Altura -->
    <li class="alturaa {{ $errors->has('altura') || $errors->has('alturaL') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="altura">¿Cuánto medís?</label>
        <input  value="{{ old('alturaL') }}" class="fs-anim-lower fleft" name="alturaL" id="alturaL"type="text" placeholder="1" required/>
        <input class="fs-anim-lower fmid1" type="text" value="." disabled/>
        <input value="{{ old('altura') }}" class="fs-anim-lower fmid" id="altura" name="altura" type="text" placeholder="76" required/>
        <input class="fs-anim-lower fsmall" type="text" value="Mts" disabled/>
        @if ($errors->has('altura') || $errors->has('alturaL'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('altura')) }}</strong>
                                <strong>{{ str_replace('.',' ', $errors->first('alturaL')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Peso -->
    <li class="{{ $errors->has('peso') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="peso">¿Cuánto pesás?</label>
        {{Form::text('peso', $jugador->peso, ['id' => 'peso', 'class' => 'fs-anim-lower fsmaller', 'placeholder' => '70', 'required'])}}
        <input class="fs-anim-lower fsmall" type="text" value="kg" disabled/>
        @if ($errors->has('peso'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('peso')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Posición -->
    <li data-input-trigger class="noBorder smallerMg {{ $errors->has('posicion_id') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="posicion_id">¿De qué posición jugás?</label>
        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
            <span><input {{ old('posicion_id') == '1' ? 'checked' : '' }} id="posiciona" name="posicion_id" type="radio" value="1"/><label for="posiciona" class="radio-arq">Arquero</label></span>
            <span><input {{ old('posicion_id') == '2' ? 'checked' : '' }} id="posicionb" name="posicion_id" type="radio" value="2"/><label for="posicionb" class="radio-def">Defensor</label></span>
            <span><input {{ old('posicion_id') == '3' ? 'checked' : '' }} id="posicionc" name="posicion_id" type="radio" value="3"/><label for="posicionc" class="radio-mid">Medio Campo </label></span>
            <span><input {{ old('posicion_id') == '4' ? 'checked' : '' }} id="posiciond" name="posicion_id" type="radio" value="4"/><label for="posiciond" class="radio-del">Delantero</label></span>
        </div>
        @if ($errors->has('posicion_id'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('posicion_id')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Pasaporte -->
    <li data-input-trigger class="noBorder smallerMg {{ $errors->has('pasaporte') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="pasaporte" data-info="Es conveniente que tengas pasaporte y estar listo para viajar en cualquier momento">¿Tenés Pasaporte?</label>
        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
            <span><input {{old('pasaporte') == '1' ? 'checked' : '' }} id="pasaporteb" name="pasaporte" type="radio" value="1"/><label for="pasaporteb" class="radio-yes">SI</label></span>
            <span><input {{old('pasaporte') == '0' ? 'checked' : '' }} id="pasaportec" name="pasaporte" type="radio" value="0"/><label for="pasaportec" class="radio-no">NO </label></span>
        </div>
        @if ($errors->has('pasaporte'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('pasaporte')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Club -->
    <li class="{{ $errors->has('club') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="club">¿En qué Equipo y Torneo o Liga jugás actualmente?</label>
        {{Form::text('club', $jugador->club, ['id' => 'club', 'class' => 'fs-anim-lower', 'placeholder' => 'Huracán, Primera Division'])}}
        @if ($errors->has('club'))
            <span class="help-block">
                <strong>{{ str_replace('.',' ', $errors->first('club')) }}</strong>
            </span>
        @endif
    </li>
    <!-- Historia -->
    <li class="{{ $errors->has('historia') ? "error" : "" }}" id="historiaLi">
        <label class="fs-field-label fs-anim-upper" for="historia">¿En qué clubes jugaste anteriormente?</label>
        {{Form::textarea('historia', $jugador->historia, ['id' => 'historia', 'class' => 'fs-anim-lower', 'placeholder' => 'Contanos tu historia'])}}
        {{--@if(old('historia') )--}}
        {{--<textarea class="fs-anim-lower" id="historia" name="historia" placeholder="Describe aquí">{{ old('historia') }}</textarea>--}}
        {{--@else--}}
        {{--<textarea class="fs-anim-lower" id="historia" name="historia" placeholder="Describe aquí"></textarea>--}}
        {{--@endif--}}
        @if ($errors->has('historia'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('historia')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Imagen -->
    <li class=" {{ $errors->has('imagen') ? "error" : "" }}" id="imagenLi">

        <label class="fs-field-label fs-anim-upper" for="imagen">Colocá el link de una imágen tuya </label>

        <div class="prevBox fs-anim-lower">
            <img id="previewImage" src="{{url('/img/default.png')}}">
        </div>
        <input type="file" value="{{ $jugador->imagen }}" id="imagen" name="imagen" placeholder="Imagen" class="nice nicefileinput fs-anim-lower" />

        @if ($errors->has('imagen'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('imagen')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Video -->
    <li class="{{ $errors->has('video') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="video">Colocá el link de tu video en HD</label>
        {{Form::text('video', $jugador->video, ['id' => 'video', 'class' => 'fs-anim-lower', 'placeholder' => 'http://youtu.be/wMkUrs2tCvo'])}}
        @if ($errors->has('video'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('video')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Mail -->
    <li class="{{ $errors->has('email') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="email" >¿Cómo es tu correo electronico?</label>
        {{Form::email('email', $jugador->email, ['id' => 'email', 'class' => 'fs-anim-lower', 'placeholder' => 'juan@gmail.com', 'required'])}}
        @if ($errors->has('email'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('email')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Telefono -->
    <li class="{{ $errors->has('telefono') ? "error" : "" }}">
        <label class="fs-field-label fs-anim-upper" for="telefono" >¿Cómo es tu número de teléfono?</label>
        {{Form::text('telefono', $jugador->telefono, ['id' => 'telefono', 'class' => 'fs-anim-lower', 'placeholder' => '+54 011 155894466'])}}
        @if ($errors->has('telefono'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('telefono')) }}</strong>
                            </span>
        @endif
    </li>
    <!-- Terminos -->
    <li class="noBorder smallerMg oVisible {{ $errors->has('terminos') ? "error" : "" }}">
							<span class="fs-field-label fs-anim-upper" for="terminos" >He leído y acepto los
							<a id="link_terminos" onclick="window.open('..//terminos-y-condiciones','name','width=800,height=800')" target="_blank">Terminos y Condiciones de CPG</a></span>
        <input type="checkbox" {{old('terminos') ? 'checked' : '' }} class="fs-anim-lower tyq" id="terminos" name="terminos" >
        @if ($errors->has('terminos'))
            <span class="help-block">
                                <strong>{{ str_replace('.',' ', $errors->first('terminos')) }}</strong>
                            </span>
        @endif
    </li>
</ol><!-- /fs-fields -->
<div class="fichaBox">
    <button class="fs-submit" type="submit">Enviar mi ficha!</button>
</div>
{{ Form::close() }}<!-- /fs-form -->