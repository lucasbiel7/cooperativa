<?php

namespace cooperativa\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {


	public function lista(){
		$produtos = DB::select('select * from produto');
		dd($produtos);
		return "Listagem de Produtos";
	}

}