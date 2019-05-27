<!-- Show Errors if any -->
@if($errors->any())
    <h4 class="error">Uops. Por favor verifica los siguientes campos:  </h4>
        @foreach($errors->keys() as $field)
            <span class="errorItem">{{str_replace('_id',' ', $field)}}{{ ( ! $loop->last) ? ', ': '' }}</span>
        @endforeach
    </h4>
    </br>
@endif