<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function createLead(Request $request)
    {

        $codigo_parceiro = request(['Nome','Email','resource']);
        //$codigo_parceiro = request()->query('resource');
        //dd($codigo_parceiro['resource']);
        //dd($codigo_parceiro['resource']);

        $user = User::all()
        //->join('pessoa','users.pessoa_id','=','pessoa.id')
        ->where('codigo','=', $codigo_parceiro['resource'])
        ->first();

        if (isset($user->codigo) && !empty($user->codigo)) {
            
            // O CODIGO DE USUÁRIO EXISTE E SERÁ GRAVADO O LEADS NA TABELA leads
            $lead = new Lead();

            $lead->user_id  = $user->id;
            $lead->Nome     = $codigo_parceiro['Nome'];
            $lead->email    = $codigo_parceiro['Email'];
            $lead->save();

        }
         else {
            // O CODIGO NAO EXISTE, SERÁ GRAVADO COMO USUÁRIO DEFAULT
            $user = User::all()
            ->where('id','=', '1')
            ->first();

            $lead = new Lead();

            $lead->user_id = $user->id;
            $lead->nome = $codigo_parceiro['Nome'];
            $lead->email = $codigo_parceiro['Email'];
            $lead->save();

        }
        //dd($user->codigo);
        return redirect()->route('site.home',['resource'=>$user->codigo])->with("success","Seu email foi cadastrado com sucesso!");
    }
}
