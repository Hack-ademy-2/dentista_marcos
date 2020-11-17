<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        return view('home');
    }

    public function implantologia()
    {
        return view('implantologia');
    }

    public function protesis()
    {
        return view('protesis');
    }

    public function somos()
    {

        $personas = [
            ["nombre"=>"Javier García","linkedin"=>"https://www.linkedin.com/in/javier/","posicion"=>"Implantólogo","foto"=>"https://static.vecteezy.com/system/resources/previews/000/566/937/non_2x/vector-person-icon.jpg"],
            ["nombre"=>"Alba García","linkedin"=>"https://www.linkedin.com/in/alba/","posicion"=>"Higienista dental","foto"=>"https://static.vecteezy.com/system/resources/previews/000/566/937/non_2x/vector-person-icon.jpg"],
            ["nombre"=>"José García","linkedin"=>"https://www.linkedin.com/in/jose/","posicion"=>"Administración","foto"=>"https://static.vecteezy.com/system/resources/previews/000/566/937/non_2x/vector-person-icon.jpg"],
        ];

        return view('somos',['personas'=>$personas]);
    }


}
