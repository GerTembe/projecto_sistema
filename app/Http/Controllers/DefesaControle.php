<?php
namespace App\Http\Controllers;

use App\Models\Defenses;
use App\Models\Examiners;
use App\Models\Monographs;
use Illuminate\Http\Request;

class DefensesfesaControle extends Controller
{
    public function index(Defenses $defesa)
    {
        $defesa1 = $defesa ->all(); // para pegar todos os dados na base defeDefenses dados
        
        return view('livewire/defesa/index', compact('defesa1'));

    }
    public function enviar()
    {
        $ad = Monographs::all();
        $ad1 = Examiners::all();
        return view('livewire/defesa/cadastro', compact('ad', 'ad1'));

    }
    public function cadastro(Request $request)
    {
        Defenses::create($request->all());

        return redirect()->Route('defesa.msg');

    }
    public function msg()
    {
        return view('livewire/defesa/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Defenses::find($id)) // buscando os dados do id na base defeDefenses dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad = Monographs::all();
        $ad1 = Examiners::all();
        return view('livewire/defesa/editar', compact('resultado', 'ad', 'ad1'));
    } 
   
    public function update(Request $request, Defenses $defesa, string $id)
    {
        
        if(!$resultado = $defesa ->find($id)) // buscando os dados do id na base defeDefenses dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->monographs_id = $request->monographs_id;
        $resultado->examiners_id = $request->examiners_id;
        $resultado->place = $request->place;
        $resultado->rating = $request->rating;
        $resultado->defense_date = $request->defense_date;
        $resultado->status = $request->status;
        $resultado->save();

    
        return redirect()-> Route('defesa.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Defenses::find($id)) // buscando os dados do id na base defeDefenses dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('defesa.msg_D');
    }
    public function msg_A()
    {
        return view('livewire/defesa/msg_A');
    }

    public function msg_D()
    {
        return view('livewire/defesa/msg_D');
    }
}
