// JavaScript Document
$(document).ready(function(){









$('#nav > li').hover(function () {
	$(this).children('div').children('ul').toggle();
	
 $(this).children('div').children('ul').children('li').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
});
	
});


$('.menu-filter-wrapper li').each(function(){
	if (($(this).attr('checked') == 'checked') && ($(this).siblings().attr('checked') == 'checked')) {
	}	
});

$('.menu-filter').on("change", function(){
	var menuFilterId = $(this).attr('id');
	if ($('#' + menuFilterId).is(':checked')) {/*
		$('.menu-checkbox input:checkbox').each(function(){
			
			console.log($(this).attr('parent'));
			if ($(this).attr('parent') == menuFilterId) {
				console.log('ok');
				$(this).attr('checked', 'checked');
			}
		})	*/
		$('.' + menuFilterId + ' input:checkbox').attr('checked', 'checked');
	}else {
		$('.' + menuFilterId + ' input:checkbox').removeAttr('checked');
	}
});

$('.request_official_person').on('change', function(){
	var warningNum = $(this).find(':selected').attr('data-warning');
	$('.warning'+warningNum).bPopup();
});



});