<?php

namespace App\Http\Controllers;

use App\Models\Monographs;
use App\Models\Reviews;
use Illuminate\Http\Request;

class RevisaoControle extends Controller
{
    public function index(Reviews $revisao)
    {
      
        $revisao1 = $revisao ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('livewire/revisao/index', compact('revisao1'));

    }
    public function enviar()
    {
        $ad = Monographs::all();
        return view('livewire/revisao/cadastro', compact('ad'));

    }
    public function cadastro(Request $request)
    {
        Reviews::create($request->all());

        return redirect()->Route('revisao.msg');

    }
    public function msg()
    {
        return view('livewire/revisao/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Reviews::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad = Monographs::all();
        return view('livewire/revisao/editar', compact('resultado', 'ad'));
    } 
   
    public function update(Request $request, Reviews $revisao, string $id)
    {
        
        if(!$resultado = $revisao ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->monographs_id = $request->monographs_id;
        $resultado->review_date = $request->review_date;
        $resultado->file = $request->file;
        $resultado->comment = $request->comment;
        $resultado->save();
       
        return redirect()-> Route('revisao.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Reviews::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('revisao.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/revisao/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/revisao/msg_D');
    }

}
