class ScrollTo
	
	constructor: ->
	
	vertical: (target, speed = 300) ->
		$('html, body').animate
			scrollTop: $(target).offset().top
		, parseInt speed

scrollto = new ScrollTo

$('a.contact').click (e) ->  
  scrollto.vertical $(this).attr 'href'