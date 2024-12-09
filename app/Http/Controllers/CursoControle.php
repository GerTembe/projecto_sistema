<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curses;
//use APP\Http\Controllers\Controller;

class CursoControle extends Controller
{
    public function home()
    {
        $this->middleware('auth');
        return view('livewire/home');

    }
    public function home1()
    {
        $this->middleware('auth');
        return view('livewire/home1');

    }
    public function header1()
    {
        return view('livewire/header1');

    }
    public function footer()
    {
        return view('livewire/footer');

    }
    public function header()
    {
        return view('livewire/header');

    }
    public function index(Curses $curso)
    {
      
        $curso1 = $curso ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/cursos/index', compact('curso1'));

    }
    public function enviar()
    {
        return view('livewire/cursos/cadastro');

    }
    public function cadastro(Request $request)
    {
        Curses::create($request->all());

        return redirect()->Route('curso.msg');

    }
    public function msg()
    {
        return view('livewire/cursos/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Curses::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
           
        return view('livewire/cursos/editar', compact('resultado'));
    } 
    
    public function update(Request $request, Curses $curso, string $id)
    {
        
        if(!$resultado = $curso ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->save();
        
        return redirect()-> Route('curso.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Curses::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('curso.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/cursos/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/cursos/msg_D');
    }

}
