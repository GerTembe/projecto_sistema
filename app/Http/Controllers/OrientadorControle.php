<?php

namespace App\Http\Controllers;

use App\Models\Advisors;
use Illuminate\Http\Request;

class OrientadorControle extends Controller
{
    public function index(Advisors $orientador)
    {
      
        $orientador1 = $orientador ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/orientador/index', compact('orientador1'));

    }
    public function enviar()
    {
        $ad = Advisors::all();
        return view('livewire/orientador/cadastro', compact('ad'));

    }
    public function cadastro(Request $request)
    {
        Advisors::create($request->all());

        return redirect()->Route('orientador.msg');

    }
    public function msg()
    {
        return view('livewire/orientador/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Advisors::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad = Advisors::all();
        return view('livewire/orientador/editar', compact('resultado', 'ad'));
    } 
   
    public function update(Request $request, Advisors $orientador, string $id)
    {
        
        if(!$resultado = $orientador ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->password = $request->password;
        $resultado->save();

        return redirect()-> Route('orientador.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Advisors::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('orientador.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/orientador/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/orientador/msg_D');
    }

}
