moment.locale('es');

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

	$('.checkCompe').click(function(){
		var idCompe = $(this).attr('check-id');
		if ($(this).is(':checked') ) {
			$('#'+idCompe).removeClass( "hidden" );
			//$("body").scrollTo('#'+idCompe);
		} else {
			$("#all").find("[id="+idCompe+"]").each(function() { 
				$(this).addClass("hidden");
			});
		}
		

	});
}

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
				'<td class="bold" style="background-color: #D7D7D7; cursor: pointer;">'+
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
							'<tr pais="'+row.ID+'" class="">'+
							'<td class="" style="background-color: white">';
							if (rowCompe.FAV=='1') {
								html+= '<input type="checkbox" class="checkCompe" check-id="'+rowCompe.ID+'" checked> ';
							} else{ 
								html+= '<input type="checkbox" class="checkCompe" check-id="'+rowCompe.ID+'">';
							}

							html+= ' '+rowCompe.COMPE+
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
	showLiga();
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
		$("#ligas").empty();
		getCountries(fecha,url);
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
	
	$.ajax({
		dataType: 'json',
		async: false,
		url: url+'ajax/json_table',
		type: 'post',
		data: {fecha: fecha},
		success: function(jsonCompe){
			var compeTmp='';
			if (jsonCompe!=null) {
				var row='';
				$.each(jsonCompe, function(i, item) {
					if (compeTmp!=item.ID_COMPE) {
						if (item.FAV=='1') {
							row+='<table class="table table-bordered" id='+item.ID_COMPE+'>';
						} else {
							row+='<table class="table table-bordered hidden" id='+item.ID_COMPE+'>';
						}
						row+='\
						<tr data-compe='+ item.ID+' class="row-compe">\
						<td colspan="13" class="text-left cabecera" style="padding:0px" >\
						\
						<img width="74" src="'+url+'public/img/logos/country/'+item.IMG_PA+'.png"> \
						<b>'+ item.PAIS_CO+': </b> '+ item.COMPE+'  \
						\
						</td>\
						</tr>\
						<tr>\
						<th class="text-center success">Hora</th>\
						<th class="text-center success">Local</th>\
						<th class="text-center success">Visitante</th>\
						<th class="text-center success">1</th>\
						<th class="text-center success">X</th>\
						<th class="text-center success">2</th>\
						<th class="text-center success">1X</th>\
						<th class="text-center success">2X</th>\
						<th class="text-center success">12</th>\
						<th class="text-center success">UN</th>\
						<th class="text-center success">OV</th>\
						<th class="text-center success">GG</th>\
						<th class="text-center success">NG</th>\
						</tr>';
						compeTmp=item.ID_COMPE;
					}
					if (item.IMG_L=='NO' || item.IMG_L==null ) {
						var imL='default.png';
					} else {
						var imL='team/'+item.PAIS_L+'/'+item.IMG_L+'.png';
					}
					if (item.IMG_V=='NO' || item.IMG_V==null) {
						var imV='default.png';
					} else {
						var imV='team/'+item.PAIS_V+'/'+item.IMG_V+'.png';
					}
					row+= '\
					<tr data-match='+ item.ID_PARTIDO+'>\
					<td  class="text-center bold" width="6%" >'+ item.HORARIO+'</td>\
					<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imL+'"><br>'+ item.LOCAL+'</td>'+
					'<td  class="text-center bold" width="12%" ><img width="35" src="'+url+'public/img/logos/'+imV+'"><br>'+ item.VISITANTE+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_1+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_1+'">'+ isEmpty($.number(item.VALOR_1, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_2+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_2+'">'+ isEmpty($.number(item.VALOR_2, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_3+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_3+'">'+ isEmpty($.number(item.VALOR_3, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_6+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_6+'">'+ isEmpty($.number(item.VALOR_6, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_7+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_7+'">'+ isEmpty($.number(item.VALOR_7, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_8+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_8+'">'+ isEmpty($.number(item.VALOR_8, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_4+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_4+'">'+ isEmpty($.number(item.VALOR_4, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_5+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_5+'">'+ isEmpty($.number(item.VALOR_5, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_12+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_12+'">'+ isEmpty($.number(item.VALOR_12, 2, '.', ' '))+'</td>\
					<td  class="odd text-center"  data-type="odd" width="5%" id="'+item.CONSE_13+'"  local="'+ item.LOCAL+'" visitante="'+ item.VISITANTE+'" text="'+item.DESC_13+'">'+ isEmpty($.number(item.VALOR_13, 2, '.', ' '))+'</td>\
					</tr>';
				});
row+='</tbody>\
</table>';	
$("#all").html(row);
} 
},
error: function(e){
	console.log(e);
}
});
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







