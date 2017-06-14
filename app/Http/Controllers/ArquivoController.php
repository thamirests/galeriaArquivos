<?php

namespace App\Http\Controllers;
use App\Arquivo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArquivoController extends Controller
{
    //funcao que exibe a minha view inicial como meus produtos
    public function abrir(){

      return view('welcome')->with('arquivos', Arquivo::all());
    }
    //funcao que consulta o banco de dados e atualiza a pesqusia via ajax
    public function pesquisando(Request $request){
      if($request->ajax()){
        $output="";
        $resultados = DB::table('tb_arquivos')
                      ->select('tb_arquivos.nome')
                      ->where('tb_arquivos.nome', 'ILIKE', '%'.$request->pesquisa.'%')
                      ->get();


      if($resultados){
        foreach ($resultados as $key => $resultado) {
          $output.='<div class="col s12 m6 l3">'.
              '<div class="card">'.
                '<div class="card-image">'.
                    '<a href="{{$resultado->link}}" target="_blank"><img src="/image/pdf2.png" title="{{$resultado->nome}}"></a>'.
                  '</div>'.
                  '<div class="card-content">'.
                    '<p><a href="{{$resultado->link}}" target="_blank">{{$resultado->nome}}</a></p>'.
                  '</div>'.
                '</div>'.
              '</div>';
        }

        return Response($output);
      }else{
        $output.='<div class="danger">'."Nenhum".'</div>';
      }return Response($output);
      dd($output);
    }
  }
}
