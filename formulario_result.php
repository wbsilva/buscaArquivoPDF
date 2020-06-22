<?php
	
	
	$str = str_replace('./', ':./', $output);
	$array = explode(':', $str);
	$dados = $array;
	$palavra_busca = array();
	$caminho = array();
	$key = array_keys($dados);

	for($i=0; $i<count($key); $i++){

		if($key[$i] % 2 == 0){

			$palavra_busca[] = $dados[$key[$i]];				
		} else {

			$caminho[] = $dados[$key[$i]];
		}
	};			

	$dados_arr_caminho = array_unique($caminho, SORT_REGULAR);
	$dados_arr_palavra_busca = array_unique($palavra_busca, SORT_REGULAR);

	$letras = $dados_arr_palavra_busca;
	  foreach ($letras as $stringArray1){
	}
?>


<table class="table table-hover table-sm table-responsive" style="width: 100% !important; border: 1px; width: 50% !important; margin: auto; margin-top: 20px;  margin-bottom: 20px !important;">
  <thead>
    <tr>		      
      <th scope="col">Caminho da Busca</th>
      <th scope="col">Palavra Pesquisada</th>		      
    </tr>
  </thead>
  <tbody>		    
      	<?php
      		$letras = $dados_arr_caminho;
      		foreach ($letras as $stringArray){ ?>
      		<tr>
          		<td>
          			<a href="<?php echo $stringArray;?>" target="_blank"><?php echo "$stringArray";?></a>
          		</td>
          		<td align="center"><?php echo "$stringArray1";?></td>
      		</tr>
      	<?php } ?>         	 
  </tbody>
</table>
