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
				
				if (item.IMG==null) {
					img='torneo/'+item.COMPE;
				} else {
					img='country/'+item.IMG;
				}
				$("#bets > tbody").append('\
					<tr id='+ item.ID+'>\
					<td colspan="13" class="text-left" >\
					<h4>\
					<img width="40" src="'+url+'public/img/logos/'+img+'.png"> \
					<b>'+ item.PAIS+': </b> '+ item.COMPE+'  \
					</h4>\
					</td>\
					</tr>\
					');
				var compe = item.ID;
				$.getJSON(''+url+'ajax/json_match', {fecha: fecha, compe:compe}, function(match) {console.log("a")
					$.each(match, function(a, row) {
						$("#bets > tbody #"+compe+"").after('\
							<tr id='+ row.ID+'>\
							<td  class="text-center" width="6%" >'+ row.HORARIO+'</td>\
							<td  class="text-left" width="12%" >'+ row.LOCAL+'</td>\
							<td  class="text-left" width="12%" >'+ row.VISITANTE+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._1)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._X)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._2)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._1X)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._12)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row._2X)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row.UNDER_25)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row.OVER_25)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row.GG)+'</td>\
							<td  class="text-center" width="7%" >'+ isEmpty(row.NG)+'</td>\
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