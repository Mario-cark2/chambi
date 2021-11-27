window.addEventListener('load', function(){
	new Glider (document.querySelector('.Car-list'),{//seleccionamos nuestro carusel con todos sus elmentos
	slidesToShow: 1,//imagenes a mostrar
  	dots: '#indicador', //indicador de donde está
  	draggable: true, //no me acuerdo
  	arrows: {//botones
	    prev: '.btnAnt',//boton de anterior
	    next: '.btnSig'//boton de siguiente
  	}
	});
});