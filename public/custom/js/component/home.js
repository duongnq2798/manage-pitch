$(document).ready(function() {
	// Book pitch view
	$('#book-a-pitch, #book-pitchs').on('click', function() {
		bookView($(this).attr('id'));
	});

	// Return show
	$('#return-select-date').click(function() {
		showHiddenRow('#row-calendar', '#row-pitch');
	});

	$('#return-select-pitch').click(function() {
		showHiddenRow('#row-pitch', '#row-time');
	});


	// Select pitch
	$('.img-pitch').click(function() {
		// Make validate

		showHiddenRow('#row-time', '#row-pitch');

    	// Get pitch to form
		var rent_pitch = $(this).attr('data-pitch');
		$('#pitch-rent').val(rent_pitch);
	});


	// Select time
	$('#select-time').change(function() {
		// Make validate

    	// Get pitch to form
		$('#time-slot-rent').val(this.value);


		// Check login when finish form rent pitch
		checkAuthenticate();
	});


	function showHiddenRow(selector_show, selector_hidden) {
		$(selector_hidden).addClass('d-none');
		if($(selector_show).hasClass('d-none')){
			$(selector_show).removeClass('d-none');
			animateOpacity(selector_show);
		}

		titleScrollIntoView();
	}

	function titleScrollIntoView() {
		var row_title = document.getElementById('row-title');
		row_title.scrollIntoView({behavior: 'smooth'});
	}

	function animateOpacity(selector) {
		$(selector).animate({opacity: "0.2"});
		$(selector).animate({opacity: "1"});
	}

	function checkAuthenticate() {
		var information = null;

		$.ajax({
        	async: false,
			url: urlGetInformation,
			type: 'GET',
			dataType: 'json',
			data: {},
            success: function(response) {
            	information = response;
            }
		});

		
		if(information){
			submitFormCreateBill();
		}else{
    		$('#modalLogin').modal('show');
		}
	}


	// Show modal
	$('.btn-register').click(function() {
		$('#modalLogin').modal('hide');
		$('#modalForgotPassword').modal('hide');
	});

	$('.btn-login').click(function() {
		$('#modalRegister').modal('hide');
		$('#modalForgotPassword').modal('hide');
	});

	$('.btn-forgot-password').click(function() {
		$('#modalRegister').modal('hide');
		$('#modalLogin').modal('hide');
	});
});


function submitFormCreateBill() {
	$('#form-create-bill').attr({
		method: 'POST',
		action: urlCreateBill
	});
	
	// Update type rent
	$('#type-rent').val(typeRent);
	$('#form-create-bill').submit();
}

function bookView(id_element) {
	let row;
	switch (id_element) {
		case 'book-a-pitch':
			row = document.getElementById('row-calendar');
			break;
		case 'book-pitchs':
			row = document.getElementById('booking-pitchs');
			break;
	}
	row.scrollIntoView({behavior: 'smooth'});
}