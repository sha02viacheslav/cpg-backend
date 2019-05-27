<?php

namespace App\Http\Controllers;

use App\Http\Requests\JugadorRequest;
use App\Http\Requests\ManagerJugadorRequest;
use App\Manager;
use App\Jugador;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('manager', ['except' => [ 'busqueda', 'postBusqueda']]);
    }
    
    public function index()
    {
        return view('managers.index');
    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(ManagerRequest $request)
    {
        $manager = new Manager($request->except('password'));
        $manager->password =  bcrypt($request->password);
        $manager->save();

        session()->put('success', 'El Manager ha sido creado.');
        return redirect('managers');
    }

    public function edit(Manager $manager)
    {
        $data['manager'] = $manager;
        $data['isEdit'] = true;

        return view('managers.edit', $data);
    }

    public function update(ManagerRequest $request, Manager $manager){
        $manager->update($request->except('clave', 'clave_vieja'));

        if($request->clave ){
            if(Hash::check($request->clave_vieja, $manager->password)){
                $manager->password = Hash::make($request->clave);
                $manager->save();
            }else{
                return redirect()->back()->withErrors(['El password anterior no coincide.']);
            }
        }


        session()->put('success', 'El Manager ha sido actualizado.');
        return redirect('managers');
    }

    public function destroy($id){
        $manager = Manager::find($id);
        $manager->delete();

        session()->put('success', 'El Manager ha sido eliminado.');
        return redirect('managers');
    }


    
}
