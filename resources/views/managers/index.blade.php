@extends('layouts.master')

@section('content')
    <div class="content customSecondContainer">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12">
                    <div class="slogan">
                        <h3>Donde los jugadores se convierten en <span class="stars">estrellas</span>  </h3>
                    </div>
                    <div class="newPlayerBox">
                        <a href="{{url('/managers/create')}}" class="btn btn-newPlayer">
                            <i class="ti-plus"></i>
                            Nuevo Manager
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="page-header center">
                                MANAGERS
                            </h2>
                            {{--<h4 class="card-title"> Simple Table</h4>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th class="center"><i class="ti-camera"></i></th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th class="center">Tipo Usuario</th>
                                        <th class="center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($managers as $manager)
                                        <tr>
                                            <td class="center imgCol">
                                                @if(Storage::disk('local')->exists($manager->link_img))
                                                    <img src="{{Storage::disk('local')->url($manager->link_img)}}" class="profileTableImg">
                                                @else
                                                    @if($manager->nivel > 8)
                                                        <img src="{{url('/img/cool_kid.png') }}" class="profileTableImg">
                                                    @else
                                                        <img src="{{url('/img/default.png') }}" class="profileTableImg">
                                                    @endif
                                                @endif
                                            </td>
                                            <td>{{ $manager->nombre }}</td>
                                            <td>{{ $manager->email }}</td>
                                            <td class="center">{{ $manager->tipo_usuario }}</td>
                                            <td class="center">
                                                @if($manager->nivel < 9)
                                                    <a rel="tooltip"  class="btn btn-simple btn-warning btn-icon table-action edit" href="{{url('managers/'.$manager->id.'/edit')}}" data-original-title="Editar" >
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button rel="tooltip" data-original-title="Eliminar"  class="delBot btn btn-simple btn-danger btn-icon table-action remove"  data-original-title="Eliminar"   data-id ="{{ $manager->id }}">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                    {!! Form::open(array('url' => 'managers/' . $manager->id, 'id' => 'submit'.$manager->id))  !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::close() !!}
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="13">Se se encontraron jugadores.</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
<script>
$(function () {
    // Boton Eliminar
    $('button.delBot').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        var itemId = $(this).attr('data-id');
        swal({
            title: "Estas seguro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, eliminar el registro",
        }).then(function(isConfirm) {
            if (isConfirm === true) {
                console.log('#submit'+itemId);
                $('#submit'+itemId).submit();
            };
        });
    });
});
</script>
@endpush