$(function() {
	var SliderModule = (function() {
		var pb = {};
		pb.el = $('#slider');
		pb.items = {
			panel: pb.el.find('li')
		}

    // Variable necesarias
    var SliderInterval,
    currentSlider = 0,
    nextSlider = 1,
    lengthSlider = pb.items.panel.length;

    // inicializador
    pb.init = function(settings) {
			this.settings = settings || {duration: 8000}
			var output = '';

      //activa el slider
      SliderInit();

			for(var i = 0; i < lengthSlider; i++) {
				if (i == 0) {
					output += '<li class="active"></li>';
				} else {
					output += '<li></li>';
				}
			}

      //controles del slider
      $('#slider-controls').html(output).on('click', 'li', function (e){
				var $this = $(this);
				if (currentSlider !== $this.index()) {
					changePanel($this.index());
				};
			});
		}

		var SliderInit = function() {
			SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
		}

		pb.startSlider = function() {
			var panels = pb.items.panel,
				controls = $('#slider-controls li');

			if (nextSlider >= lengthSlider) {
				nextSlider = 0;
				currentSlider = lengthSlider-1;
			}

      //efectos
      controls.removeClass('active').eq(nextSlider).addClass('active');
      panels.eq(currentSlider).fadeOut('slow');
      panels.eq(nextSlider).fadeIn('slow');

      // actualizacion de datos
      currentSlider = nextSlider;
			nextSlider += 1;
    }

      //funcion para los controladores
      var changePanel = function(id) {
			clearInterval(SliderInterval);
			var panels = pb.items.panel,
				controls = $('#slider-controls li');

        //comprobar id
        if (id >= lengthSlider) {
				id = 0;
			  } else if (id < 0) {
				id = lengthSlider-1;
			  }


        //efectos
        controls.removeClass('active').eq(id).addClass('active');
        panels.eq(currentSlider).fadeOut('slow');
        panels.eq(id).fadeIn('slow');

        // actualizamos datos
        currentSlider = id;
        nextSlider = id+1;

        //reactivar slider
        SliderInit();
      }


    return pb;
  }());
  SliderModule.init({duration: 7000});
});
