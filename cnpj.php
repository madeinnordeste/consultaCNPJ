<?php 
	
	class ReceitaWS{

		/*
			$receita = new ReceitaWS();
			var_dump( $receita->consultaCNPJ( 11229464000987 ) );
		*/
		public function consultaCNPJ($cnpj = ''){
			$CNPJ_WS = 'http://receitaws.com.br/v1/cnpj/';
			$URL = $CNPJ_WS.$cnpj;
			return json_decode( file_get_contents($URL) );
		}

	}



	
	

 ?>