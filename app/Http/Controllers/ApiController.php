<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use WangID\Scanner\Scanner;

use App\Models\bitacora;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

use App\Models\cliente;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;



class ApiController extends Controller
{
    //


        /*Guarda los datos del Usuario */
        public function storedUsuario(){
            $this->validate(request(),['carnet'=>'required','name'=>'required','email'=>'required|email','password'=>'required|confirmed',]);
            $user = User::create(request(['carnet','name','email','password']));
            $user->role='admin';
    
            $user->save();
    
            $bitacora = new bitacora();
            $bitacora->descripcion = 'Se registró un usuario Mediante APP movil';
            $bitacora->user_name = 'app movil';
            $bitacora->ip = '127.0.0.8';
            $bitacora->save();
    
            return response( [ 'user'=>$user ,'token'=>$user->createtoken('secret')->plainTextToken  ]);
            //return redirect()->route('admin.registrarusuario');
        }

        public function login(Request $request){
            $user = $request->validate(['email'=>'required|email',
                                        'password'=>'required',
                                       ]);
            //$user = User::all();
            
            if(!Auth::attempt($user))
            {
              return  response([ 'mensaje' =>'credenciales invalidos'],404);

            }

           
            $bitacora = new bitacora();
            $bitacora->descripcion = 'Se Logueo un usuario Mediante APP movil';
            $bitacora->user_name = 'app movil';
            $bitacora->ip = '127.0.0.8';
            $bitacora->save();

            return response( ['user'=>auth()->user()  ,
                            'token'=>Auth()->user()->createtoken('secret')->plainTextToken
                            ],200);
            //return redirect()->route('admin.registrarusuario');
        }

        public function logout(){
            
            $bitacora = new bitacora();
            $bitacora->descripcion = 'Se salio un usuario Mediante APP movil';
            $bitacora->user_name = 'app movil';
            $bitacora->ip = '127.0.0.8';
            $bitacora->save();

            auth()->user()->tokens()->delete();    // error al crear el token sera corregido posteriormente
            return response( [ 'mensaje'=>'logout success',
                             ],200);
            //return redirect()->route('admin.registrarusuario');
        }

        public function user()
        { 
            return response([ 
                'user'=>auth()->user()
            ],200);

        }

        public function destroyUsuario($id){
            $user = User::find($id);
    
            $user->delete();

            return  response([ 'message' =>'usuario eliminado'],200);
            //  return redirect()->route('admin.registrarusuario');
        }

        public function updateUsuario(Request $request, $id){
            $user = User::find($id);
            $user->carnet = $request->carnet;
            $user->name = $request->name;
            $user->role = $request->role;
            $user->email = $request->email;
            $user->save();
            return  response([ 'message' =>'usuario editado'],200);
          //  return redirect()->route('admin.registrarusuario');
    
        }
  /*Guarda los datos del Nuevo Usuario creado */
  public function createUsuario(){
    $this->validate(request(),['carnet'=>'required','name'=>'required','email'=>'required|email','password'=>'required|confirmed',]);
    $user = User::create(request(['carnet','name','email','password']));
    $user->role='admin';

    $user->save();

    $bitacora = new bitacora();
    $bitacora->descripcion = 'Se creo un usuario Mediante APP movil';
    $bitacora->user_name = 'app movil';
    $bitacora->ip = '127.0.0.8';
    $bitacora->save();

    return response( [ 'message' =>'usuario creado' ],200);
    //return redirect()->route('admin.registrarusuario');
}


  /*Manda al view UsuarioRegister */
  public function usersall(){
    $user = User::all();

    return response([ 
      'user'=>$user
  ],200);
    //return view('admin.UsuarioRegister', compact('user'));
}


//##################################################################################################
//##################################################################################################
//                                FUNCIONES DEL ADMINISTRAR CLIENTE
//##################################################################################################
//##################################################################################################

 /*Manda TODOS LOS CLIENTES */
 public function Clientesall(){
  $user = cliente::all();
  return response([ 
    'cliente'=>$user
],200);
}


  /*Guarda los datos del Nuevo cliente creado */
  public function createCliente(){
    $this->validate(request(),['ci'=>'required',
    'nombre'=>'required',
    'a_paterno'=>'required',
    'a_materno'=>'required',
    'sexo'=>'required',
    'telefono'=>'required',
    'direccion'=>'required']);


$user = cliente::create(request(['ci','nombre','a_paterno','a_materno','sexo','telefono','direccion']));
$user->estado='h';


$user->save();

    $bitacora = new bitacora();
    $bitacora->descripcion = 'Se creo un cliente Mediante APP movil';
    $bitacora->user_name = 'app movil';
    $bitacora->ip = '127.0.0.8';
    $bitacora->save();

    return response( [ 'message' =>'cliente creado' ]);
    //return redirect()->route('admin.registrarusuario');
}


public function updateCliente(Request $request, $id){
  $user = cliente::find($id);
  $user->ci = $request->ci;
  $user->nombre = $request->nombre;
  $user->a_paterno = $request->a_paterno;
  $user->a_materno = $request->a_materno;
  $user->sexo = $request->sexo;
  $user->telefono = $request->telefono;
  $user->direccion = $request->direccion;
  $user->estado = $request->estado;
 
  $user->save();
  $bitacora = new bitacora();
    $bitacora->descripcion = 'Se edito un cliente Mediante APP movil ';
    $bitacora->user_name = 'app movil';
    $bitacora->ip = '127.0.0.8';
    $bitacora->save();

  return  response([ 'message' =>'cliente editado'],200);
//  return redirect()->route('admin.registrarusuario');

}


//destroy juece
public function destroyCliente($id){
  $user = cliente::find($id);

  $user->delete();

  return  response([ 'message' =>'cliente eliminado'],200);
  //  return redirect()->route('admin.registrarusuario');
}



//bitacoras all

public function Bitacorasall(){
  $user = bitacora::all();
  return response([ 
    'bitacora'=>$user
],200);
}



}







