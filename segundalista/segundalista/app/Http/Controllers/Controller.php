<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('lista.ex1');
    }

    public function respostaExer1(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
        if($valor1 === $valor2){
            $soma = 3 * ($valor1 + $valor2);
            $retorno = "Valores iguais. O triplo da soma é: $soma";
        }else{
            $soma = $valor1 + $valor2;
            $retorno = "A soma dos valores é: $soma";
        }
        
        return view('lista.ex1', compact('retorno'));
    }

    public function abrirFormExer2(){
        return view('lista.ex2');
    }
   
    public function respostaExer2(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $valor2 = floatval($request->input('valor2'));
        if ($valor1 === $valor2) {
            $resultado = "Números iguais: $valor1";
        } else {
            $valores = [$valor1, $valor2];
            sort($valores);
            $resultado = "Valores em ordem crescente: ".implode(' ', $valores);
        }
   
        return view('lista.ex2', compact('resultado'));
    }

    public function abrirFormExer3(){
        return view('lista.ex3');
    }

    public function respostaExer3(Request $request){
        $valorProduto = floatval($request->input('valorProduto'));

        if ($valorProduto > 100) {
            $desconto = $valorProduto * 0.15;
            $valorComDesconto = $valorProduto - $desconto;
            $resultado = "O valor original era R$" . number_format($valorProduto, 2, ',', '.') . 
                         " e com 15% de desconto fica R$" . number_format($valorComDesconto, 2, ',', '.');
        } else {
            $resultado = "O valor do produto é R$" . number_format($valorProduto, 2, ',', '.') . " (sem desconto)";
        }

        return view('lista.ex3')->with('retorno', true)->with('resultado', $resultado);
    }

    public function abrirFormExer4(){
        return view('lista.ex4');
    }

    public function respostaExer4(Request $request){
        $valor1 = floatval($request->input('valor1'));
        $primos = $this->encontrarPrimos($valor1);

        $resultado = "Números primos até {$valor1}: " . implode(', ', $primos);

        return view('lista.ex4')->with('retorno', true)->with('resultado', $resultado);
    }

    private function encontrarPrimos($limite)
    {
        $primos = [];

        for ($num = 2; $num <= $limite; $num++) {
            if ($this->ehPrimo($num)) {
                $primos[] = $num;
            }
        }

        return $primos;
    }

    private function ehPrimo($numero)
    {
        if ($numero < 2) return false;

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        return true;
    }
    
    public function abrirFormExer5(){
        return view('lista.ex5');
    }

    public function respostaExer5(Request $request){
        $numeroMes = $request->input('valor1');
        $nomeMes = $this->obterNomeMes($numeroMes);

        $resultado = "O mês correspondente ao número {$numeroMes} é {$nomeMes}.";

        return view('lista.ex5')->with('retorno', true)->with('resultado', $resultado);
    }

    private function obterNomeMes($numeroMes)
    {
        switch ($numeroMes) {
            case 1: return "Janeiro";
            case 2: return "Fevereiro";
            case 3: return "Março";
            case 4: return "Abril";
            case 5: return "Maio";
            case 6: return "Junho";
            case 7: return "Julho";
            case 8: return "Agosto";
            case 9: return "Setembro";
            case 10: return "Outubro";
            case 11: return "Novembro";
            case 12: return "Dezembro";
            default: return "Mês inválido";
        }
    }

    public function abrirFormExer6(){
        return view('lista.ex6');
    }

    public function respostaExer6(Request $request){
        $numero = $request->input('valor1');

        $numeros = [];
        for ($i = 1; $i <= $numero; $i++) {
            $numeros[] = $i;
        }

        $resultado = "Números de 1 até {$numero}: " . implode(', ', $numeros);

        return view('lista.ex6')->with('retorno', true)->with('resultado', $resultado);
    }
    
    public function abrirFormExer7(){
        return view('lista.ex7');
    }

    public function respostaExer7(Request $request){
        $numero = $request->input('valor1');
        $soma = 0;
        $contador = 1;

        while ($contador <= $numero) {
            $soma += $contador;
            $contador++;
        }

        $resultado = "A soma de todos os números de 1 até {$numero} é {$soma}.";

        return view('lista.ex7')->with('retorno', true)->with('resultado', $resultado);
    }
    
    public function abrirFormExer8(){
        return view('lista.ex8');
    }

    public function respostaExer8(Request $request){
        $numero = $request->input('valor1');
        $contagem = [];

        do {
            $contagem[] = $numero;
            $numero--;
        } while ($numero >= 1);

        $resultado = "Contagem regressiva: " . implode(', ', $contagem);

        return view('lista.ex8')->with('retorno', true)->with('resultado', $resultado);
    }

    public function abrirFormExer9(){
        return view('lista.ex9');
    }

    public function respostaExer9(Request $request){
        $numero = $request->input('valor1');
        $fatorial = 1;

        for ($i = $numero; $i > 1; $i--) {
            $fatorial *= $i;
        }

        $resultado = "O fatorial de {$numero} é {$fatorial}.";

        return view('lista.ex9')->with('retorno', true)->with('resultado', $resultado);
    }
    
    public function abrirFormExer10(){
        return view('lista.ex10');
    }

    public function respostaExer10(Request $request){
        $numero = $request->input('valor1');
        $tabuada = [];

        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = "{$numero} x {$i} = " . ($numero * $i);
        }

        $resultado = implode(' / ', $tabuada);

        return view('lista.ex10')->with('retorno', true)->with('resultado', $resultado);
    }
    

}
