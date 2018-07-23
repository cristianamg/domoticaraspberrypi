<?php

namespace App\Http\Controllers;

use App\Domotica;
use Illuminate\Http\Request;


class DomoticaController extends Controller
{
    public function getAll(){
        $domotica = Domotica::all();
        return $domotica;
    }

    public function add(Request $request){
        $domotica = Domotica::create($request->all());
        return $domotica;
    }

    public function get($id){
        $domotica = Domotica::find($id);
        return $domotica;
    }

    public function edit($id,Request $request){
        $domotica = $this->get($id);
        $domotica->fill($request->all())->save();
        return $domotica;
    }
    public function delete($id){
        $domotica = $this->get($id);
        $domotica->delete();
        return $domotica;
    }
}

