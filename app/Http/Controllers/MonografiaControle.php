<?php

namespace App\Http\Controllers;

use App\Models\Advisors;
use App\Models\Monographs;
use App\Models\Students;
use Illuminate\Http\Request;

class MonografiaControle extends Controller
{

    public function index(Monographs $monografia)
    {
      
        $monografia1 = $monografia ->all(); // para pegar todos os dados na base de dados

        return view('livewire/monografia/index', compact('monografia1'));

    }
    public function enviar()
    {
        $ad = Advisors::all();
        $estudante = Students::all();
        return view('livewire/monografia/cadastro', compact('ad', 'estudante'));

    }
    public function cadastro(Request $request)
    {
        Monographs::create($request->all());

        return redirect()->Route('monografia.msg');

    }
    public function msg()
    {
        return view('livewire/monografia/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Monographs::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
            $ad = Advisors::all();
            $estudante = Students::all();
           
        return view('livewire/monografia/editar', compact('resultado', 'ad', 'estudante'));
    } 
   
    public function update(Request $request, Monographs $monografia, string $id)
    {
        
        if(!$resultado = $monografia ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->advisors_id = $request->advisors_id;
        $resultado->students_id = $request->students_id;
        $resultado->title = $request->title;
        $resultado->submission_date = $request->submission_date;
        $resultado->file = $request->file;
        $resultado->note = $request->note;
        $resultado->save();
        
        return redirect()-> Route('monografia.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Monographs::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('monografia.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/monografia/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/monografia/msg_D');
    }

    

}
