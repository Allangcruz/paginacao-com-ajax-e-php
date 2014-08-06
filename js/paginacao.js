$(document).ready(function(){

	//quando clicar 
	$("#atualizar").click(function(){consultar(0);});
	$("#salvar").click(function(){salvar();});

	consultar(0);
});

/*
| Consulta todos os registro do banco de dados
*/
var consultar = function(offset){
	$.ajax({
        type: 'post',
        url: 'backend/produtodao.php?acao=2&porpagina=10&offset='+offset,
        dataType: 'html',
        error: function(resp){$("#resposta").html(resp.responseText);},
        success: function(resp){$("#resposta").html(resp);}       
    }); 
}

/*
 |Sala registro no banco de dados
*/
var salvar = function(){
	$.ajax({
        type: 'post',
        url: 'backend/produtodao.php?acao=1',
        dataType: 'html',
        error: function(resp){$("#resposta").html(resp.responseText);},
        success: function(resp){$("#resposta").html(resp);}       
    }); 
}