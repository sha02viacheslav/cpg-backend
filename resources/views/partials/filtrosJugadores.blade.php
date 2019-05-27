{!! Form::open(['method'=>'GET','url'=> '/dashboard','class'=>'pull-right',' role'=>'search', 'id' => 'searchForm'])  !!}
<div class="row">
    <div class="col-md-12 sidePd1">
        <div class="form-group filterMainHeader">
            <h3 ><i class="fas fa-sliders-h gold icons1"></i>Filtros </h3>
        </div>
        <div class="form-group">
            {{Form::text('search', null, ['class' => 'form-control customInput','placeholder' => 'Buscar' , 'id' => 'search'])}}
        </div>
        <div class="form-group filterHeader">
            <label class="filterLabel gold"> Edad</label>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    {{Form::text('fromAge', null, ['class' => 'form-control customInput','placeholder' => 'Mínimo' , 'id' => 'desdeEdad']) }}
                </div>
                <div class="col-md-6">
                    {{Form::text('toAge', null, ['class' => 'form-control customInput','placeholder' => 'Maximo'  , 'id' => 'hastaEdad'])}}
                </div>
            </div>
        </div>
        <div class="form-group filterHeader">
            <label class="filterLabel gold"> Posición</label>
        </div>
        <div class="form-group">
            {{Form::select('position',$posiciones, null, ['class' => 'form-control select2NoSearch    customInput' , 'id' => 'posicion'])}}
        </div>
        <div class="form-group filterHeader">
            <label class="filterLabel gold"> Altura</label>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    {{Form::text('fromHeight', null, ['class' => 'form-control customInput','placeholder' => 'Mínimo' , 'id' => 'desdeAltura'])}}
                </div>
                <div class="col-md-6">
                    {{Form::text('toHeight', null, ['class' => 'form-control customInput','placeholder' => 'Maximo'  , 'id' => 'hastaAltura'])}}
                </div>
            </div>
        </div>
        <div class="form-group filterHeader">
            <label class="filterLabel gold"> Peso</label>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    {{Form::text('fromWheight', null, ['class' => 'form-control customInput','placeholder' => 'Mínimo' , 'id' => 'desdePeso'])}}
                </div>
                <div class="col-md-6">
                    {{Form::text('toWheight', null, ['class' => 'form-control customInput','placeholder' => 'Maximo'  , 'id' => 'hastaPeso'])}}
                </div>
            </div>
        </div>
        <div class="form-group filterHeader">
            <label class="filterLabel gold"> Video</label>
        </div>
        <div class="form-group">
            <div class="customCheckBox">
                {{Form::checkbox('video', 1, null, ['class' => 'form-check-input','placeholder' => 'Maximo'  , 'id' => 'hastaPeso'])}}
                <span class="checkmark"></span>
                <label class="white"> Sólo jugadores con video</label>
            </div>

        </div>
        <div class="form-group">
            <button  type="submit" class="btn btn-blue btn-fill submitFilters" id="submitForm">Aplicar Filtros</button>
        </div>
    </div>
</div>
{!! Form::close() !!}