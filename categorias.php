<?php
sleep(1);
$acao = $_POST['acao'];
switch($acao){
    case 1: ?>
        <option value="">Selecione uma Categoria ...</option>
        <option value="1">BOLETINS CCB 2006</option>
        <option value="2">BOLETINS CCB 2007</option>
        <option value="3">BOLETINS CCB 2008</option>
        <option value="4">BOLETINS CCB 2009</option>
        <option value="5">BOLETINS CCB 2010</option>
        <option value="6">BOLETINS CCB 2011</option>
        <option value="7">BOLETINS CCB 2012</option>
        <option value="8">BOLETINS CCB 2013</option>
        <option value="9">BOLETINS CCB 2014</option>
        <option value="10">BOLETINS CCB 2015</option>
        <option value="11">BOLETINS CCB 2016</option>
        <option value="12">BOLETINS CCB 2017</option>
        <option value="13">BOLETINS CCB 2018</option>
        <option value="14">BOLETINS CCB 2019</option>
	<option value="15">BOLETINS CCB 2020</option>
    <?php break;
          
    case 2: ?>
        <option value="">Selecione uma Categoria ...</option>
        <option value="8">BOLETINS 1ºGB 2013</option>
        <option value="12">BOLETINS 1ºGB 2017</option>
        <option value="13">BOLETINS 1ºGB 2018</option>
        <option value="14">BOLETINS 1ºGB 2019</option>               
    <?php break;

    case 3: ?>
        <option value="">Selecione uma Categoria ...</option>        
        <option value="13">BOLETINS 6ºGB 2018</option>                     
    <?php break;

    case 4: ?>
        <option value="">Selecione uma Categoria ...</option>        
        <option value="14">BOLETINS COBOM 2019</option>                     
    <?php break;

    case 5: ?>
        <option value="">Selecione uma Categoria ...</option>
        <option value="8">BOLETINS 8ºGB 2013</option>
        <option value="9">BOLETINS 8ºGB 2014</option>
        <option value="10">BOLETINS 8ºGB 2015</option>
        <option value="11">BOLETINS 8ºGB 2016</option>
        <option value="12">BOLETINS 8ºGB 2017</option>
        <option value="13">BOLETINS 8ºGB 2018</option>      
        <option value="14">BOLETINS 8ºGB 2019</option>                     
    <?php break;

    default:
    echo '<option value="" selected disabled>Nenhum Boletim encontrado</option>';
}
