<?php
/*
 * Escreva toda a sua lógica antes de enviar qualquer coisa para saída do script
 * (output). Se não você pode receber erros como o clássico:
 *
 *     "Cannot modify header information - headers already sent"
 *
 * Então deixe para colocar o que você tiver de HTML, etc para depois.
 *
 * Em seguida, valide se você tem todos os parâmetros necessários.
 *
 * Aqui você pode melhorar a formatação da mensagem de erro ou redirecionar o 
 * usuário de volta para o formulário.
 */

if (
    empty($_POST["categoria"]) // O parâmetro categoria é obrigatório
    || empty($_POST["busca"]) // O parâmetro busca é obrigatório
    || empty($_POST["unidade"]) // O parâmetro unidade é obrigatorio
    || (empty($_POST["mes"]) && empty($_POST["ano_full"])) // O mês ou "ano_full" são obrigatórios, os 2 não podem estar vazios ao mesmo tempo
) {
    http_response_code(400);
    require "404.php";
    exit;
}

/*
 * Ao associar os valores do request às variáveis locais, já faça os tratamentos 
 * necessários.
 */
$unidade = $_POST["unidade"];
$categoria = (int) $_POST["categoria"]; // Converte em um número inteiro.
$busca = trim($_POST["busca"]); // Tira os espaços do começo e final, caso haja.
$ano_full = !empty($_POST["ano_full"]); // Converte em um boolean (true ou false) verificando se o parâmetro está vazio
$mes = null; // Começa como "null", porque pode estar vazio
if (!$ano_full) { // Se não for "ano_full", então ...
    $mes = (int) $_POST["mes"]; // Converte em um número inteiro.
}

/*
 * Use a relação lógica que você tem entre categoria e ano a seu favor.
 *
 * Dessa forma, se $categoria == 1, então $ano = 1 (da $categoria) + 2005, o que
 * daria 2006. E assim por diante.
 */

$ano = $categoria + 2005;

/*
 * Aproveite para validar a data. Já que só tem relatórios 
 * para datas até o mês atual.
 */

$data = strtotime(
    sprintf('%d-%02d-01', $ano, !$ano_full ? $mes : 1) // Usa o formato "Y-m-d" para extrair o timestamp da data do relatório.
);
$agora = time(); // Timestamp atual
if ($data > $agora) { // Relatório no futuro
    http_response_code(400);
    require "error.php";
    exit;
}

/*
 * Monta o caminho para gerar o PDF.
 */

switch($unidade){
    case 1: 
        $caminho = './boletins/boletinsccb/' . $ano . '/';
        if (!$ano_full) { // Caso não seja "ano_full", concatena o mês no caminho.
            $caminho .= $mes . '/';
        }
        $caminho .= '*';
        $output = shell_exec('pdfgrep -o -i -r --cache ' . $busca . ' ' . $caminho);
        if (empty($output)) {
            header("Location: 404.php");
        }
    break;
          
    case 2: 
        $caminho = './boletins/boletins1gb/' . $ano . '/';
        if (!$ano_full) { // Caso não seja "ano_full", concatena o mês no caminho.
            $caminho .= $mes . '/';
        }
        $caminho .= '*';
        $output = shell_exec('pdfgrep -o -i -r --cache ' . $busca . ' ' . $caminho);
        if (empty($output)) {
            header("Location: 404.php");
        }
    break;

    case 3: 
        $caminho = './boletins/boletins6gb/' . $ano . '/';
        if (!$ano_full) { // Caso não seja "ano_full", concatena o mês no caminho.
            $caminho .= $mes . '/';
        }
        $caminho .= '*';
        $output = shell_exec('pdfgrep -o -i -r --cache ' . $busca . ' ' . $caminho);
        if (empty($output)) {
            header("Location: 404.php");
        }
    break;

    case 4: 
        $caminho = './boletins/boletinscobom/' . $ano . '/';
        if (!$ano_full) { // Caso não seja "ano_full", concatena o mês no caminho.
            $caminho .= $mes . '/';
        }
        $caminho .= '*';
        $output = shell_exec('pdfgrep -o -i -r  ' . $busca . ' ' . $caminho);
        echo($caminho);
        if (empty($output)) {
            header("Location: 404.php");
        }
    break;

    case 5: 
        $caminho = './boletins/boletins8gb/' . $ano . '/';
        if (!$ano_full) { // Caso não seja "ano_full", concatena o mês no caminho.
            $caminho .= $mes . '/';
        }
        $caminho .= '*';
        $output = shell_exec('pdfgrep -o -i -r --cache ' . $busca . ' ' . $caminho);

        if (empty($output)) {
            header("Location: 404.php");
        }
    break;
    default:
    echo '<option value="" selected disabled>Nenhum Boletim encontrado</option>';
}

/*
 * Agora sim, começamos a incluir a saída do script (HTML, etc).
 */

include "header.php"

?>
</br>
<h2 id="h2" align="center">Resultado da busca</h2>
<?php

/*
 * Como fizemos toda a lógica de associar o valor à variável $output no começo, 
 * podemos apenas chamar o include aqui.
 */

require "formulario_result.php";

?>
<div class="row">
    <div class="form-group col-md-5 offset-md-5">
        <input type="button"  id="btn-voltar" value="Voltar" class="btn btn-primary" onClick="Voltar()">
    </div>
</div>
</br>
</br>
</br>
</br>
<?php include "footer.php";?>