$(function () {
	$('ul.parent > li').hover(function(){
		$(this).find('ul.child').show(100);
		 $(this).css('background', '#444549');
	}, function(){
		$(this).find('ul.child').hide(100);
		 $(this).css('background', '#B3ACA6');
	});
	$('ul.parent > li.carrinho').hover(function(){
		$(this).find('ul.child').show(100);
		 $(this).css('background', '#444549');
		 $(this).css('color', 'white');
		 
	}, function(){
		$(this).find('ul.child').hide(100);
		 $(this).css('background', 'transparent');
		 $(this).css('color', '#444549');
	});

	$('ul.parent > li.headerProfile').hover(function(){
		$(this).find('ul.child').show(100);
		 $(this).css('background', '#444549');
		 $(this).css('color', 'white');
		 
	}, function(){
		$(this).find('ul.child').hide(100);
		 $(this).css('background', 'transparent');
		 $(this).css('color', '#444549');
	});
});

