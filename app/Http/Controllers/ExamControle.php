<?php

namespace App\Http\Controllers;

use App\Models\Examiners;
use Illuminate\Http\Request;

class ExamControle extends Controller
{
    public function index(Examiners $examinador)
    {
      
        $examinador1 = $examinador ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"
        return view('livewire/examinador/index', compact('examinador1'));

    }
    public function enviar()
    {
        return view('livewire/examinador/cadastro');

    }
    public function cadastro(Request $request)
    {
        Examiners::create($request->all());

        return redirect()->Route('examinador.msg');

    }
    public function msg()
    {
        return view('livewire/examinador/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Examiners::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
       
        return view('livewire/examinador/editar', compact('resultado'));
    } 
   
    public function update(Request $request, Examiners $examinador, string $id)
    {
        
        if(!$resultado = $examinador ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        //$resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->role = $request->role;
        //$resultado->password = $request->password;
        $resultado->save();
        return redirect()-> Route('examinador.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Examiners::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('examinador.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/examinador/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/examinador/msg_D');
    }

}
