<?php require 'header.php';?>
</br>	
</br>
</br>
</br>
<h2 id="h2" align="center">Busca por categoria</h2>	
<form name="search" id="search" method="post" action="result.php">
	<div class="form-row">		    
		<div class="form-group col-md-4 offset-md-4">
		<label for="unidade"><b>Unidade</b></label>
			<select required id="unidade" name="unidade" class="form-control">
				<option value="">Selecione uma Unidade ...</option>
				<option value="1">BOLETINS CCB</option>
				<option value="4">BOLETINS COBOM</option>
				<option value="2">BOLETINS 1ºGB</option>
				<option value="3">BOLETINS 6ºGB</option>
				<option value="5">BOLETINS 8ºGB</option>							  
			</select>
			</br>			
			<label for="categoria"><b>Categoria</b></label>
			<select required id="categoria" name="categoria" class="form-control">
                 <option valoe="" disabled selected></option>             
			</select> 			 		     		
			<div>
				<input type="checkbox" id="ano_full" name="ano_full" onclick="desabilitar('sim')" >
				<label for="ano_full">Buscar o ano todo.</label>
			</div>
			<label for="mes"><b>Mês</b></label>
			<select required id="mes" name="mes" class="form-control"  >
				<option value="">Selecione um mês ...</option>
				<option value="1">Janeiro</option>
				<option value="2">Fevereiro</option>
				<option value="3">Março</option>
				<option value="4">Abril</option> 
				<option value="5">Maio</option> 
				<option value="6">Junho</option> 
				<option value="7">Julho</option>
				<option value="8">Agosto</option>
				<option value="9">Setembro</option>
				<option value="10">Outubro</option> 
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>  
			</select>
			</br>
			<label for="busca"><b>Busca</b></label>
			<input type="text" class="form-control" id="busca" name="busca" required>
			</br>
			<div id="btn-pesquisar">
				<button type="submit" class="btn btn-primary" id="btn-pesquisar">Pesquisar</button>
			</div>	
		</div>	    	    
	</div>				  
</form>
</br>
</br>
</br>
</br>
<?php require "footer.php";?>