function isEmpty(val){
	return (val === undefined || val == null || val.length <= 0) ? '0' : val;
}

function DeleteItem (url) {
	var action = window.confirm('Desea eliminar este elemento?');
	if (action) {
		window.location = url;
	}
}

function get_bets (fecha, url) {
	$.getJSON(''+url+'ajax/json_compe', {fecha: fecha}, function(resp) {

		if (resp!=null) {
			$.each(resp, function(i, item) {

				$("#bets > tbody").append('\
					<tr id='+ item.ID+'>\
					<td colspan="13" class="text-left" >\
					<h4>\
					<img width="40" src="'+url+'public/img/logos/country/'+item.IMG+'.png"> \
					<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
					</h4>\
					</td>\
					</tr>\
					');
				var compe = item.ID;
				$.getJSON(''+url+'ajax/json_match', {fecha: fecha, compe:compe}, function(match) {
					$.each(match, function(a, row) {
						$("#bets > tbody #"+compe+"").after('\
							<tr id='+ row.ID_PARTIDO+'>\
							<td  class="text-center" width="6%" >'+ row.HORA+'</td>\
							<td  class="text-left" width="12%" >'+ row.LOCAL+'</td>\
							<td  class="text-left" width="12%" >'+ row.VISITANTE+'</td>');
							//ODDS 
							var match=row.ID_PARTIDO;
							$.getJSON(''+url+'ajax/json_odds', {match: match}, function(odds) {
								$.each(odds, function(a, rowMatch) {
									 
									$("#"+match+"").append('\
										<td  class="text-center" width="5%" >'+ isEmpty(rowMatch.VALOR)+'</td>'
										);
								});
							});
							$("#bets > tbody #"+compe+"").after('\
								</tr>\
								');
						});
					$("#bets > tbody #"+compe+"").after('\
						<tr>\
						<th class="text-center">Hora</th>\
						<th class="text-left">Local</th>\
						<th class="text-left">Visitante</th>\
						<th class="text-center">1</th>\
						<th class="text-center">X</th>\
						<th class="text-center">2</th>\
						<th class="text-center">1HT</th>\
						<th class="text-center">XHT</th>\
						<th class="text-center">2HT</th>\
						<th class="text-center">1X</th>\
						<th class="text-center">12</th>\
						<th class="text-center">2X</th>\
						<th class="text-center">OVER</th>\
						<th class="text-center">UNDER</th>\
						<th class="text-center">GG</th>\
						<th class="text-center">NG</th>\
						</tr>\
						');

				});

			});
		}
	});


}