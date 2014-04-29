var FunScout = {};

(function($){

	FunScout = {

		modalMessages : {
			a : '<h4 class="center">You are on the list! Would you like a free ticket to our $1000* raffle by sharing FunScout with your friends or taking our 3 question survey?</h4>',
			b : '<h4 class="center">You are on the list and good luck in the raffle! Would you like another free entry into the $1000* raffle for sharing FunScout with your friends or taking our 3 question survey?</h4>',
			c : '<h4 class="center">Thanks and we look forward to bringing you FunScout so you can have more fun!</h4>',
			d : '<h4 class="center">Thanks for sharing!! We look forward to bringing you FunScout so you can have more fun!</h4>',
			e : '<label>Step 2 of 2</label><h4 class="center">Get up to 3 FREE raggle rickets for sharing FunScout through Facebook, Twitter, or taking our 3 question survey!</h4>',
		},

		init: function(){

			$('.slider4').bxSlider({
				slideWidth: 160,
				minSlides: 2,
				maxSlides: 3,
				moveSlides: 1,
				slideMargin: 10,
				auto: true,
				captions: true
				//ticker: true,
				//speed: 60000
			});
		
			//Share FB
			if( $('.social-share').find('.fb').length ){
				$('.social-share').on('click', '.fb', FunScout.shareFB);
			}
		
			//Share Twitter
			if( $('.social-share').find('.tw').length ){
				$('.social-share').on('click', '.tw', FunScout.showShareMsg);
			}

			//Get A Raffle
			$(".raffle-form").on("click", ".get-a-raffle", function(e){
				e.preventDefault();
				console.log("Get Raffle");
			});

			//Want a Raffle
			if( $('.get-a-raffle').length ){
				$('.get-a-raffle').on('click', FunScout.wantARaffle);
			}

			//Submit Raffle
			if( $('.raffle-form-wrap').length ){
				$('.raffle-form-wrap').on('click', '.raffle-submit', FunScout.submitRaffle);
			}

			//Raffle Optoions
			if( $(".modal-body .option").length ){
				$(".modal-body .option").on('click', 'a', FunScout.optionClickHandler);
			}

			//Submit Survey
			if( $('.fs-survey').length ){
				$('.fs-survey').find('.suvey-submit').on('click', 'button', FunScout.submitSurvey);
			}

			//Show Contact Form
			if( $('#contact-form-wrap').length ){
				$('#contact-form-wrap').on('click','.btn-info',function(){
					$(this).addClass('hide');
					$('#contact-form').removeClass('hide');
				});
			}

			//Want a Raffle - Capture eMail and share options
			if( $('#shareModal2').length ){
				$('#shareModal2').on('click','button.send', FunScout.raffleNextStep);
			}

			//Init Select2
			$(".select2").select2({
				//placeholder: "Select a State",
			});
		},
		showPopup: function (url) {
			newwindow=window.open(url,'name','height=190,width=520,top=200,left=300,resizable');
			if (window.focus) {newwindow.focus();}
		},
		resetForm: function(){
			$('.fs-survey').addClass('hide');
			$('.modal-body').find('.msg').addClass('hide');
			$('.modal-body').find('.option').removeClass('hide');
		},
		validateEmail: function (email) {
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		},
		shareFB: function (e){
			e.preventDefault();
			//FunScout.showPopup( $(this).attr('href') );
			FB.ui({
				method: 'feed',
				link: 'http://funscout.egeelabs.com/landing/',
				caption: 'I just got on the waiting list for FunScout, a new Website and FREE App that finds local events and activities for you. Everyone should check this out!',
			}, function(response){
				if(response.post_id){
					FunScout.hideOptions();
					FunScout.showShareMsg();
				}
			});
		},
		showShareMsg: function(){
			FunScout.hideOptions();
			FunScout.showModalMessage( FunScout.modalMessages.d );
		},
		wantARaffle: function(e){
			e.preventDefault();
			FunScout.resetForm();
			$('#shareModal2').modal();
		},
		submitRaffle: function(e){
			e.preventDefault();
			if( FunScout.validateEmail( $('.raffle-email').val() ) ){
				FunScout.resetForm();
				$('.modal-body').find('.option').filter('.buy').addClass('hide');
				FunScout.showModalMessage( FunScout.modalMessages.a );
				$('#shareModal').modal();
			}else{
				$('.raffle-email').addClass('error');
			}
			
		},
		submitSurvey: function(){
			$('.fs-survey').addClass('hide');
			FunScout.showModalMessage( FunScout.modalMessages.c );
			setTimeout( function(){ $('#sharesModal').modal('hide'); },3000);
		},
		optionClickHandler: function(){
			var option = $(this).closest('.option');
			console.log( option.data('option') );

			if( option.data('option') == 'survey' ){
				FunScout.hideOptions();
				$('.fs-survey').removeClass('hide');
			}
		},
		raffleNextStep: function(e){
			e.preventDefault();
			$('#shareModal2').modal('hide');
			$('#shareModal').modal('show');
			FunScout.showModalMessage(FunScout.modalMessages.e);
			FunScout.hideOptions('.buy');
		},
		hideOptions: function(opt){
			if(opt){
				$('.modal-body').find('.option').filter(opt).addClass('hide');
			}else{
				$('.modal-body').find('.option').addClass('hide');
				$('.modal-body').find('.msg').addClass('hide');
			}
		},
		showModalMessage: function(msg){
			$('.modal-body').find('.msg').html(msg).removeClass('hide');
		}

	};
	
	FunScout.init();
})(jQuery);

