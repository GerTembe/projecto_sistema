<?php

namespace App\Http\Controllers;

use App\Models\Curses;
use App\Models\Students;
use Illuminate\Http\Request;

class EstudanteControle extends Controller
{
    public function index(Students $estudante)
    {
      
        $estudante1 = $estudante ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/estudante/index', compact('estudante1'));

    }
    public function enviar()
    {
        $ad = Curses::all();
        return view('livewire/estudante/cadastro', compact('ad'));

    }
    public function cadastro(Request $request)
    {
        Students::create($request->all());

        return redirect()->Route('estudante.msg');

    }
    public function msg()
    {
        return view('livewire/estudante/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Students::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad = Curses::all();
        return view('livewire/estudante/editar', compact('resultado', 'ad'));
    } 
   
    public function update(Request $request, Students $estudante, string $id)
    {
        
        if(!$resultado = $estudante ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->curses_id = $request->curses_id;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->conclusion_date = $request->conclusion_date;
        $resultado->save();
        
        return redirect()-> Route('estudante.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Students::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('estudante.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/estudante/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/estudante/msg_D');
    }

}
