moment.locale('es');
function isEmpty(val){
	return (val === undefined || val == null || val.length <= 0) ? '0' : val;
}

function DeleteItem (url) {
	var action = window.confirm('Desea eliminar este elemento?');
	if (action) {
		window.location = url;
	}
}


function get_totalMatch(fecha, url) {
	$.post(url+'ajax/json_totalMatch', {fecha: fecha}, function(data, status){
		$.each(data, function(a, row) { 
			$("#totalDia").empty();
			$("#totalDia").append("Total partidos : "+row.TOTAL);

		});

	}, 'json');
}

function get_bets (fecha, url) {
	$.post(url+'ajax/json_compe', {fecha: fecha}, function(jsonCompe) {
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
								$("[data-match="+match+"]").append('<td  class="odd text-center"  data-type="odd" width="5%" type="'+rowMatch.NOMBRE+'">'+ isEmpty($.number(rowMatch.VALOR, 2, '.', ' '))+'</td>');
							});
						}, "json");

						$("[data-compe="+compe+"]").after('</tr>');
					});
					$("[data-compe="+compe+"]").after('\
						<tr>\
						<th class="text-center">Hora</th>\
						<th class="text-center">Local</th>\
						<th class="text-center">Visitante</th>\
						<th class="text-center">1</th>\
						<th class="text-center">X</th>\
						<th class="text-center">2</th>\
						<th class="text-center">UN</th>\
						<th class="text-center">OV</th>\
						<th class="text-center">1X</th>\
						<th class="text-center">2X</th>\
						<th class="text-center">12</th>\
						<th class="text-center">1HT</th>\
						<th class="text-center">XHT</th>\
						<th class="text-center">2HT</th>\
						<th class="text-center">GG</th>\
						<th class="text-center">NG</th>\
						</tr>\
						');

				}, "json");

			});
						} //if Compe
					},"json");
} // End get_bets()
