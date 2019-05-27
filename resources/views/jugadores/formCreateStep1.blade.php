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

    <!-- Historia -->
    <li class="{{ $errors->has('historia') ? "error" : "" }}" id="historiaLi">
        <label class="fs-field-label fs-anim-upper" for="historia">Contános tu experiencia como fútbolista </label>
        {{Form::textarea('historia', $jugador->historia, ['id' => 'historia', 'class' => 'fs-anim-lower', 'placeholder' => 'Contanos tu historia'])}}

        @if ($errors->has('historia'))
            <span class="help-block">
                <strong>{{ str_replace('.',' ', $errors->first('historia')) }}</strong>
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