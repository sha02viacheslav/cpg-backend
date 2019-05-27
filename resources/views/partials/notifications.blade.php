<div class="dashNotWrapper" id="notificationsBox">
    <div class="col-lg-12 alertBox">
        <div class="row ">
            @unless(isset($noNotifications))
                @if ($message = session()->get('success'))
                    <div class="animated fadeIn alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{--<strong>Success:</strong> --}}
                        {!! $message !!}
                    </div>
                    {{ session()->forget('success') }}
                @endif
                @if ($message = session()->get('error'))
                    <div class="animated fadeIn alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error:</strong> {!! $message !!}
                    </div>
                    {{ session()->forget('error') }}
                @endif
                @if (isset($errors) && count($errors) > 0)
                    <div class="animated fadeIn alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error: Verifica los campos </strong> {!! $message !!}
                    </div>
                @endif
                @if ($message = session()->get('warning'))
                    <div class="animated fadeIn alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Warning:</strong> {!! $message !!}
                    </div>
                    {{ session()->forget('warning') }}
                @endif
                @if ($message = session()->get('info'))
                    <div class="animated fadeIn alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Info:</strong> {!! $message !!}
                    </div>
                    {{ session()->forget('info') }}
                @endif
            @endif
        </div>
    </div>
</div>
@push('scripts')
<script>
$(function () {
//    if($('.alert-dismissable').length){
//        setTimeout(function(){
//            $('.alert-dismissable').fadeOut('slow');
//        }, 1300);
//    }
});
</script>
@endpush
