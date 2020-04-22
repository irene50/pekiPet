$(document).ready(function() { 
		$( "#botonTarifa" ).click(function() {
			if($( "#botonTarifa" ).val() == 'Consultar tarifas'){
                $("#bloqueTarifas").removeClass('oculto');
                $( "#botonTarifa" ).val('Ocultar tarifas');
            }else if($( "#botonTarifa" ).val() == 'Ocultar tarifas'){
                $("#bloqueTarifas").addClass('oculto');
                $( "#botonTarifa" ).val('Consultar tarifas');
            }
		});
}); 