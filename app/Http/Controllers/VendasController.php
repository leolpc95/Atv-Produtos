<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendasController extends Controller
{
 
    public function index()
    {   
        echo "##PRODUTOS## <br> <br>";
        $vendas = Venda::all();
        foreach($vendas as $venda){  
            echo "ID #:", $venda ->id,"<br>", "Produto: ", $venda ->produto, "<br>", "Preço: R$", $venda ->preco_unitario, "<br>", "Quantidade: ", $venda -> quantidade,"<br>","Total: ",$venda -> quantidade * $venda -> preco_unitario, "<br><br>" ;   
        }
    }

    public function cadastrarVenda($produto,$preco,$quantidade)
    {
        $venda = new Venda();
        $venda -> produto = ($produto);
        $venda -> preco_unitario = ($preco);
        $venda -> quantidade = ($quantidade);
        $venda -> save();
        echo"Produto Cadastrado!";
    }

    public function verVenda($id)
    {
        echo"## PRODUTO INFORMADO LOCALIZADO ## <BR><BR>";
        $venda = Venda:: find($id);
        echo "##", $venda->produto,"## <br><br>";
        echo "ID #:", $venda ->id,"<br>","Preço: R$", $venda ->preco_unitario, "<br>", "Quantidade: ", $venda -> quantidade, "<br>","Total: ",$venda -> quantidade * $venda -> preco_unitario,  "<br>" ;
    }
  
    public function atualizarVenda($id,$produto,$preco,$quantidade)
    {
        $venda = Venda:: find($id);
        $venda -> produto = ($produto);
        $venda -> preco_unitario = ($preco);
        $venda -> quantidade = ($quantidade);
        $venda -> save();

        echo "Produto Atualizado!";
    }
    public function excluirVenda($id)
    {
        $venda = Venda:: find($id);
        $venda -> delete();
        echo"Cadastro Deletado com Sucesso!";
    }
}
