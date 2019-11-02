$(document).ready(function () {
	"use strict";

	var header = $('.header');
	var menuActive = false;
	var menu = $('.menu');
	var burger = $('.hamburger');

	setHeader();

	$(window).on('resize', function () {
		setHeader();
	});

	$(document).on('scroll', function () {
		setHeader();
	});

	initMenu();


	function setHeader() {
		if ($(window).scrollTop() >= $(".header-red-section").offset().top - 105) {
			header.addClass('scrolled');
		} else {
			header.removeClass('scrolled');
		}
	}

	function initMenu() {
		if ($('.menu').length) {
			var menu = $('.menu');
			if ($('.hamburger').length) {
				burger.on('click', function () {
					if (menuActive) {
						closeMenu();
					} else {
						openMenu();

						$('.menu_close_container').click(function cls(e) {
							closeMenu();
						});
					}
				});
			}
		}
	}

	function openMenu() {
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu() {
		menu.removeClass('active');
		menuActive = false;
	}

	// $('.page-numbers').persiaNumber();

});

function toasterConfig() {
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": false,
		"progressBar": false,
		"positionClass": "toast-bottom-right",
		"preventDuplicates": false,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
}

toasterConfig()

$('.comment-form-test').click(function () {
	var userComment = $('#comment')
	var commentAthor = $('#author')
	var commentEmail = $('#email')
	var Url = $('#url')

	if (commentEmail.val() && commentAthor.val() && userComment.val()) {
		commentEmail.css('borderColor', 'rgba(0, 0, 0, 0.06)')
		commentAthor.css('borderColor', 'rgba(0, 0, 0, 0.06)')
		userComment.css('borderColor', 'rgba(0, 0, 0, 0.06)')
		var sendingData = {
			comment: userComment.val(),
			author: commentAthor.val(),
			email: commentEmail.val(),
			url: Url.val(),
			comment_post_ID: $('#hidden-input').val()
		}
		$.post('/blog/wp-comments-post.php', sendingData).done(response => {
			toastr["success"]("نظر شما ثبت شد و در انتظار تایید می‌باشد ")
		})

	} else {
		if (!userComment.val()) userComment.css('borderColor', 'rgb(208, 0, 0)')
		if (!commentAthor.val()) commentAthor.css('borderColor', 'rgb(208, 0, 0)')
		if (!commentEmail.val()) commentEmail.css('borderColor', 'rgb(208, 0, 0)')

		toastr["error"]("فیلد های نظر، نام و ایمیل اجباری هستند")

	}


})