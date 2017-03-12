<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Admin;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Admin::all();
        return view('admin.usuarios.index', compact('registros'));
    }

    public function post(Request $r)
    {

        if($r->ajax())
        {
            $user = new Admin();
            $user->name = $r->name ;
            $user->email = $r->email ;
            $user->password = bcrypt($r->password) ;
            if($user->save())
            {
                return response(['msg'=>'inserido com sucesso']);
            }
        }
    }


    public function ler()
    {


        $registros =  \App\Admin::orderBy('id','DESC')->get();

        return view('admin.usuarios.lerajax', compact('registros'));

    }

    public function getEdit(Request $r)
    {
        if( $r->ajax())
        {
            return response(Admin::find($r->id));
        }
    }

}
