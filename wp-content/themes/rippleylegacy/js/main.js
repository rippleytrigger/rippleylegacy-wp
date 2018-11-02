		
		'use_strict';
	
	
	
		function sum_validation_contact()
		{
			//Validacion de suma - contacto - variables
			let num1 = Math.ceil(Math.random() * 10);
			let num2 = Math.ceil(Math.random() * 10);
			let total = (num1 + num2);

			//Selectors
			let suma = $("#suma_label");
			let suma_caja = $("input#suma");
			let contact_form = $(".form-horizontal");
			let mensaje_num = $("#mensaje_num");   

		 	suma.text(num1 + " + " + num2)	
			contact_form.submit(function(event)
			{
				//Avoid sending the form. I am going to handle the server response via ajax
				event.preventDefault();

				if(isNaN(suma_caja.val())) 
				{
		 			mensaje_num.removeClass("alert alert-success")
		 			mensaje_num.addClass("alert alert-danger");
		 			mensaje_num.text("Coloque un número");
		 			
		 		}
				else if(suma_caja.val() != total) 
				{
		 			mensaje_num.removeClass("alert alert-success");
		 			mensaje_num.addClass("alert alert-danger");
		 			mensaje_num.text("El número ingresado es incorrecto");
				
				}
				else
				{
		 			mensaje_num.removeClass("alert alert-danger");
		 			mensaje_num.addClass("alert alert-success");
				 	mensaje_num.text("El número ingresado es correcto");
					 
					//Establish the AJAX Call to send the form data
					ajax_call_contact_form(this)
		 		}	
		 	})	
		 }

		function nav_navigate()
		{
			let navbarAnchors = $("#nav_links").find("a");

			navbarAnchors.on("click",function(event)
			{
				let navAnchorTarget = event.target.id;
				let scrollTarget;

				switch(navAnchorTarget)
				{
					case "nav_link_1":
					scrollTarget = $('#inicio').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_2":
					scrollTarget =  $('#quien_soy').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_3":
					scrollTarget =  $('#servicios').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_4": 
					scrollTarget =  $('#Portafolio').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;

					case "nav_link_5": 
					scrollTarget =  $('#contacto').offset();
					$("html, body").animate({scrollTop: scrollTarget.top}, 500);
					break;
				}
			})
		}

		function ajax_call_contact_form(form)
		{
			//Container where we are going to receive the mail responses from the server
			let respuesta_form_contacto = $('#respuesta_form_contacto');

			//Serialize the form data to prepare it to be receive by the server 
			formData = $(form).serialize();

			//Msg Variable
			let mensaje;

			$.ajax(
				{	
					type: "POST",
					url: "functionalities/correo.php", 
					data: formData,	
				}
			)
			.done(function(result)
			{
				//Put Success Message
				mensaje = `<div class='col-sm-offset-4 col-sm-4'> <div class='alert alert-success text-center' id='mensaje_num'> <span> ${result} </span>  </div> </div>`;
				respuesta_form_contacto.html(mensaje);
				close_contact_form(form);
			})
			.fail(function(result)
			{
				//Put Fail Message 
				mensaje = `<div class='col-sm-offset-4 col-sm-4'> <div class='alert alert-danger text-center' id='mensaje_num'> <span>${result.responseText}</span>  </div> </div>`;
				respuesta_form_contacto.html(mensaje);
				close_contact_form(form);
			})
		}
			
		function close_contact_form(form)
		{
			// Fade Out the form and Delete it when it receives the ajax response
			$(form).fadeOut(2000);
			$(form).remove();
		}

		$(document).ready(function()
		{
			nav_navigate()
		})

		$(window).on("load",function()
		{
			particlesJS.load('intro', 'js/particles.json', function() 
			{
				console.log('callback - particles.js config loaded');
			});

			sum_validation_contact();
		})



