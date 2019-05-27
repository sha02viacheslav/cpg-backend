<?php

namespace App\Providers;

use App\Jugador;
use App\Manager;
use App\Pais;
use App\Posicion;
use App\Provincia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public $paginate_limit;
    public $query;

    public function __construct()
    {
        $this->paginate_limit = 10;
    }
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('partials.navigation', function ($view) {
            $view->with('url', explode("/", request()->url()));
        });

        view()->composer('jugadores.formCreate', function ($view) {
            $view->with('paises', Pais::orderBy('nombre', 'ASC')->get());
            $view->with('provincias', Provincia::orderBy('nombre', 'ASC')->get());

            if(isset($view->errors) && $view->errors->any()){
//                dd(session()->getOldInput());
            }
        });
        view()->composer('jugadores.edit', function ($view) {
            $view->with('paises', Pais::orderBy('nombre', 'ASC')->get());
            $view->with('provincias', Provincia::orderBy('nombre', 'ASC')->get());
        });
        view()->composer('dashboard.editarJugador', function ($view) {
            $view->with('estados', config('cpg.estados'));
        });

        view()->composer('dashboard.formManagerCreateJugador', function ($view) {
            if(isset($view->errors) && $view->errors->any()){
                $view->with('paises', Pais::orderBy('nombre', 'ASC')->pluck('nombre', 'id'));
            }
            $view->with('paises', Pais::orderBy('nombre', 'ASC')->pluck('nombre', 'id'));
            $view->with('provincias', Provincia::orderBy('nombre', 'ASC')->pluck('nombre', 'id'));
        });
        view()->composer('dashboard.home', function ($view) {
            // User Type Filter
            switch (Auth::user()->getUserType()){
                case 'Admin':
                    $query = Jugador::whereNotNull('nombre');
                    break;
                case 'Reclutador':
                    $query = Jugador::where('manager_id', Auth::user()->id);
                    break;
                case 'Manager':
                    $query = Jugador::validados();
                    break;

            }

            // Name Filter
            if(request()->search){
                $query = $query->where('nombre','like','%'.request()->search.'%');
            }

            // Age Filter
            if($val = $this->validateAge(request()->fromAge)){
                $query = $query->where('edad','>=', $val);
            }
            if($val = $this->validateAge(request()->toAge)){
                $query = $query->where('edad','<=', $val);
            }

            // Height Filter
            if($val = $this->validateHeight(request()->fromHeight)){
                $query = $query->where('altura','>=', $val);
            }
            if($val = $this->validateHeight(request()->toHeight)){
                $query = $query->where('altura','<=', $val);
            }

            // Wheight Filter
            if($val = $this->validateWheight(request()->fromWheight)){
                $query = $query->where('peso','>=', $val);
            }
            if($val = $this->validateWheight(request()->toWheight)){
                $query = $query->where('peso','<=', $val);
            }

            // Position Filter
            if($val = request()->position){
                $query = $query->where('posicion_id',$val);
            }

            // Video Filter
            if($val = request()->video){
                $query = $query->where('link_video','!=',0);
            }

            // Order
            $jugadores = $query->orderBy('updated_at', 'DESC')->get();

            $view->with('jugadores', $jugadores);
            $view->with('posiciones', Posicion::orderBy('posicion')->pluck('posicion', 'id')->prepend('Elíge una posición'));
        });
        view()->composer('managers.index', function ($view) {
            $managers = Manager::orderBy('updated_at', 'DESC')->get();

            $view->with('managers', $managers);
        });
        view()->composer('partials.filtrosJugadores', function ($view) {
            $view->with('posiciones', Posicion::orderBy('posicion')->pluck('posicion', 'id')->prepend('Elíge una posición'));

        });
    }

    public function validateAge($val){
        if($val){
            if(is_numeric($val) && intval($val) > 5 && intval($val < 80)){
                return $val;
            }
        }

        return false;
    }
    public function validateHeight($val){
        if($val){
            if(is_numeric($val) && intval($val) > 1 && intval($val < 220)){
                return $val;
            }
        }

        return false;
    }
    public function validateWheight($val){
        if($val){
            if(is_numeric($val) && intval($val) > 20 && intval($val < 220)){
                return $val;
            }
        }

        return false;
    }
}
