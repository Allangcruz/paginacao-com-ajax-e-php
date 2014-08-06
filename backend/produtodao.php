<?php

include_once("conexao.php");


//abre a conexao com o banco de dados
$conexao = conexao::getConexao();

//-------------------------------------------------------------------------------------
//acoes envia da tela
$acao = (isset($_REQUEST['acao'])) ? $_REQUEST['acao'] : '';
//variavel que definira os registro que viram por pagina
$offset = (isset($_REQUEST['offset'])) ? $_REQUEST['offset'] : '';
$porpagina = (isset($_REQUEST['porpagina'])) ? $_REQUEST['porpagina'] : '';

echo "Ação: ".$acao."<br>Apartir de :".$offset."<br> Qtd por pagina: ".$porpagina;




switch($acao){
	case 1:
		salvar(9,$conexao);
		echo "<h1>Salvado com sucesso.</h1>";
	break;

	case 2:
		consulta($conexao,$offset,$porpagina);
	break;
}


/*
| Consulta todos registro no banco de dados
*/
function consulta($conexao,$offset,$porpagina){

	//Conta o tal de regitro no banco de dados para fazer o limite
	$cont = $conexao->query("select * from produto");
	$total = $cont->rowCount(); //contem o total de registro
	
	//numeros de paginas
	$paginas = ($total/$porpagina);

	//consulta todos os registro limitando por 10
	$sql = $conexao->query("select * from produto LIMIT $porpagina OFFSET $offset");
	$sql->execute();

	$tabela = '	<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Descricao</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>';


	while ($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
		$tabela.= '<tr>
					<td>'.$resultado["id"].'</td>
					<td>'.$resultado["descricao"].'</td>
					<td>'.$resultado["valor"].'</td>
				  </tr>';
	}


	$tabela .="</tbody></table>";

	//monta a paginação
	$paginacao ="";
	if($paginas > 1){
		$paginacao .='<div><ul class="pagination">';
		for ($i=0; $i <$paginas ; $i++) { 	
			$paginacao .="<li><a href='javascript:consultar(".$i*$porpagina.");' >".$i."</a></li>";
		}
		$paginacao .='</lu></div>';
	}

	echo $tabela.$paginacao;		
}


/*
| Grava registro no banco de dados
*/
function salvar($qtd,$conexao){

	$sql = $conexao->query("insert into produto values (0,'Arroaz',12)");
	
	for ($i=0; $i < $qtd; $i++) { 
		$sql->execute();
	}

}