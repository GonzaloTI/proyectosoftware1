<?php

namespace Database\Seeders;

use App\Models\abogado;
use App\Models\almacen;
use App\Models\cliente;
use App\Models\factura;
use App\Models\Producto;
use Illuminate\Database\Seeder;

use App\Models\proveedor;
use App\Models\compra;
use App\Models\juece;
use App\Models\User;
use App\Models\rol;
use App\Models\suministro;
use App\Models\venta;
use App\Models\vista;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->name = 'admin';
        $user->carnet = '1234';
        $user->email =  'admin@gmail.com';
        $user->password = '1234';
        $user->role = 'admin';
        $user->save();


        $user = new User;
        $user->name = 'personal1';
        $user->carnet = '456546';
        $user->email =  'personal1@gmail.com';
        $user->password = '1234';
        $user->role = 'personal';
        $user->save();


        $user = new User;
        $user->name = 'personal2';
        $user->carnet = '4546';
        $user->email =  'personal2@gmail.com';
        $user->password = '1234';
        $user->role = 'personal';
        $user->save();

        $user = new User;
        $user->name = 'personal3';
        $user->carnet = '456456';
        $user->email =  'personal3@gmail.com';
        $user->password = '1234';
        $user->role = 'personal';
        $user->save();
    


        $rols = new rol;
        $rols->descripcion = 'personal';
        $rols->save();

        $rols = new rol;
        $rols->descripcion = 'cliente';
        $rols->save();

        $rols = new rol;
        $rols->descripcion = 'admin';
        $rols->save();

        $user = new cliente;
        $user->ci = '88000';
        $user->nombre = 'joaquin';
        $user->a_paterno =  'chumacero';
        $user->a_materno= 'yupanqui';
        $user->sexo= 'm';
        $user->telefono = '12345678';
        $user->direccion = 'av. brasil';
        $user->estado = 'h';
        $user->save();

        $user = new cliente;
        $user->ci = '99000';
        $user->nombre = 'saturnino';
        $user->a_paterno =  'mamani';
        $user->a_materno= 'yupanqui';
        $user->sexo= 'm';
        $user->telefono = '12345678';
        $user->direccion = 'av. brasil 2';
        $user->estado = 'h';
        $user->save();


    }




}
