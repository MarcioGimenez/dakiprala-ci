function cadastra_local(base_url){
	$.get(base_url+"admin/local/cadastro/true", function( data ) {
		$( "#id_cadastro" ).val( data );
		$("form").attr('action', base_url+'admin/local/alterar/'+data);
	});
}
function rascunho_local(base_url){
	var id_local = $("#id_cadastro").val();
	$.post(base_url+"admin/local/rascunho/"+id_local,
	{
		"titulo":$("#titulo" ).val(),
		"tipo":$("#tipo" ).val(),
		"latitude":$("#latitude").val(),
		"longitude":$("#longitude").val(),
		"titulo_foto":$("#titulo_foto").val(),
		"descricao":$("#descricao").val(),
		"titulo_google":$("#titulo_google").val(),
		"titulo_facebook":$("#titulo_facebook").val(),
		"descricao_google":$("#descricao_google").val(),
		"descricao_facebook":$("#descricao_facebook").val()
	}
	).done(function( rdata ) {
		console.log(rdata);
	});
}

$(document).ready(function() {
	$('.cpf').setMask('999.999.999-99');
});