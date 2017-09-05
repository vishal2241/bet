moment.locale('es');

function getCountries (fecha, url) {
	var	html='';
	$.ajax({
		dataType: 'json',
		async: false,
		url: url+'ajax/json_countries',
		type: 'post',
		data: {fecha: fecha},
		success: function(pais){

			$.each(pais, function(a, row) { 
				html+=
				'<tr class="pais" id="'+row.ID+'">'+
				'<td class="bold" style="background-color: #EEEDED; cursor: pointer;">'+
				/*'<input type="checkbox" name="optionsCheckboxes"> '+*/
				row.NOMBRE+
				'</td>'+
				'</tr>'

				$.ajax({
					dataType: 'json',
					async: false,
					url: url+'ajax/jsonCompeByCountry',
					type: 'post',
					data: {fecha: fecha, pais:row.ID},
					success: function(compe){
						$.each(compe, function(b, rowCompe) { 
							html+=
							'<tr pais="'+row.ID+'" class="x12 hidden">'+
							'<td class="" style="background-color: white">'+
							'<input type="checkbox" name="optionsCheckboxes"> '+
							rowCompe.COMPE+
							'</td>'+
							'</tr>';

						});
					},
					error: function(e){
						console.log(e);
					}
				});

			});

		},
		error: function(e){
			console.log(e);
		}
	});

	$("#ligas").html(html)
} 

function showLiga(){
	$('.pais').click(function(){
		var pais = $(this).attr('id');

		$("#ligas").find("[pais="+pais+"]").each(function() { 

			if ($(this).hasClass("hidden")) {
				$(this).removeClass( "hidden" );
			} else {
				$(this).addClass("hidden")
			}

		});							
	});
}

function selectBox(fecha, url){

	$("#titulo").empty();
	$("#titulo").append(moment().format('dddd Do [de] MMMM'));
	get_bets(fecha, url);
	get_totalMatch(fecha, url);

	$( "#dia" ).change(function() {
		$("#titulo").empty();
		switch($(this).val()){
			case "today":
			$("#titulo").append(moment().format('dddd Do [de] MMMM'));
			fecha=moment().format('YYYY-MM-DD');  
			break;
			case "tomorrow":
			$("#titulo").append(moment().add(1, 'days').format('dddd Do [de] MMMM'));
			fecha=moment().add(1, 'days').format('YYYY-MM-DD');  
			break;
			case "after2":
			$("#titulo").append(moment().add(2, 'days').format('dddd Do [de] MMMM'));
			fecha=moment().add(2, 'days').format('YYYY-MM-DD');  
			break;
			case "after3":
			$("#titulo").append(moment().add(3, 'days').format('dddd Do [de] MMMM'));
			fecha=moment().add(3, 'days').format('YYYY-MM-DD'); 
			break;
		}

		$("#all").empty();
		get_bets(fecha, url);
		get_totalMatch(fecha, url);

	});
}


function addDetalle(){
	$('#all').on('click', '[data-type="odd"]', function(){

		var value = $(this).text();
		var conse = $(this).attr('id');
		var local = $(this).attr('local');
		var visitante = $(this).attr('visitante');
		var text = $(this).attr('text');
		var match = $(this).closest('tr').attr('data-match');

		$("#detalle").find("[id_match="+match+"]").remove();
		if ($(this).hasClass("actived")) {
			$(this).closest('tr').find('.actived').removeClass('actived');
			$(this).removeClass( "actived" );
		}	else {
			$(this).closest('tr').find('.actived').removeClass('actived');
			$(this).addClass( "actived" );

			var row = 
			'<tr id_trans="'+conse+'"  id_match="'+match+'">'+
			'<td class="x12 bold ">'+
			local + ' vs. '+ visitante+
			'<br>'+
			'<b><span class="text-info text-uppercase x11">'+text+'</span></b>'+
			'</td>'+
			'<td value="'+value+'" class="text-primary text-center bold">'+
			value+
			'</td>'+
			'</tr>';
			$('#detalle').append(row);
		}

		getMoney();
	});
}

function get_bets (fecha, url) {
	$.post(url+'ajax/json_compe', {fecha: fecha}, function(jsonCompe) {
		$('#all').fadeIn("150",function(){



			if (jsonCompe!=null) {
				$.each(jsonCompe, function(i, item) {
					$("#all").append('\
						<table class="table table-bordered">\
						<tr data-compe='+ item.ID+' class="row-compe">\
						<td colspan="16" class="text-left cabecera" >\
						<h4>\
						<img width="64" src="'+url+'public/img/logos/country/'+item.IMG+'.png"> \
						<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
						</h4>\
						</td>\
						</tr>\
						</tbody>\
						</table>\
						');
					var compe = item.ID;
					$.post(url+'ajax/json_matchByCompe', {fecha: fecha, compe:compe}, function(jsonMatch) {		

						$.each(jsonMatch, function(a, row) {
							if (row.IMG_L=='NO' || row.IMG_L==null ) {
								var imL='default.png';
							} else {
								var imL='team/'+row.PAIS_L+'/'+row.IMG_L+'.png';
							}
							if (row.IMG_V=='NO' || row.IMG_V==null) {
								var imV='default.png';
							} else {
								var imV='team/'+row.PAIS_V+'/'+row.IMG_V+'.png';
							}

							$("[data-compe="+compe+"]").after('\
								<tr data-match='+ row.ID_PARTIDO+'>\
								<td  class="text-center bold" width="6%" >'+ row.HORARIO+'</td>\
								<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imL+'"><br>'+ row.LOCAL+'</td>'+
								'<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imV+'"><br>'+ row.VISITANTE+'</td>');

							var match=row.ID_PARTIDO;
							$.post(''+url+'ajax/json_odds', {match: match}, function(jsonOdds) {

								$.each(jsonOdds, function(a, rowMatch) { 
								//Odds
								$("[data-match="+match+"]").append('<td  class="odd text-center"  data-type="odd" width="5%" id="'+rowMatch.CONSE+'"  local="'+ row.LOCAL+'" visitante="'+ row.VISITANTE+'" text="'+rowMatch.DESCRIPCION+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>');
							});
							}, "json");

							$("[data-compe="+compe+"]").after('</tr>');
						});
						$("[data-compe="+compe+"]").after('\
							<tr>\
							<th class="text-center info">Hora</th>\
							<th class="text-center info">Local</th>\
							<th class="text-center info">Visitante</th>\
							<th class="text-center info">1</th>\
							<th class="text-center info">X</th>\
							<th class="text-center info">2</th>\
							<th class="text-center info">UN</th>\
							<th class="text-center info">OV</th>\
							<th class="text-center info">1X</th>\
							<th class="text-center info">2X</th>\
							<th class="text-center info">12</th>\
							<th class="text-center info">GG</th>\
							<th class="text-center info">NG</th>\
							</tr>\
							');

					}, "json");

				});
		} //if
	});
	},"json");
}  

function get_totalMatch(fecha, url) {
	$.post(url+'ajax/json_totalMatch', {fecha: fecha}, function(data, status){
		$.each(data, function(a, row) { 
			$("#totalDia").empty();
			$("#totalDia").append("Total partidos : "+row.TOTAL);

		});

	}, 'json');
}

function getMoney() {
	var creditos = '1.00';
	var counter= 0;
	$("#detalle").find("[value]").each(function() {
		var tmp      = $.number($(this).attr("value"),2, '.' , ',');
		creditos     = (parseFloat(creditos) * parseFloat(tmp));
		creditos     = $.number( creditos,2, '.' , ',');	
		counter++;		
	});
	console.log(counter)		
	var cantidad = $("#cantidad").val();
	var ganancia = Math.round(creditos*cantidad);
	$("#ganancia").empty()
	console.log(ganancia)
	$("#ganancia").append($.number( ganancia,0, '' , ''))
}

function isEmpty(val){
	return (val === undefined || val == null || val.length <= 0) ? '0' : val;
}

function DeleteItem (url) {
	var action = window.confirm('Desea eliminar este elemento?');
	if (action) {
		window.location = url;
	}
}







