// console.log("OK");
jQuery(function($)
{	
	// Дополнительно
	jobHTML ('html'); // вызов основных обработок над шаблоном
	//$("html").addtocopy(); // addtocopy
	//videoHeight(); // размер видео
});

// Обработка шаблона
function jobHTML ($jobHTMLid)
{
	$jobHTMLid=$jobHTMLid+" ";


 
    // Выпадающий список
	
	$($jobHTMLid+'.select')

	.find('.before').click(function(event)
	{
		
		$(this).parent().find('ul').slideToggle(500);
	})

	

	.parent().each(function()
	{
		$(this).find('span').html('<input type="text" value=""'+$(this).find('span').html()+'" placeholder=""'+$(this).data('placeholder')+'" />');
		$(this).find('li').each(function()
		{
			if ($(this).parents('.select').find('input').val()==$(this).data('value'))
			{$(this).parents('.select').find('span').html($(this).html()).data('mask',$(this).html());}
		});
	})

	.find('li').click(function(event)
	{
		event.stopPropagation();
		var li=$(this), se=li.parents('.select');
		se.find('span').html(li.html()).data('mask', li.html());
		se.find('input').val(li.data('value'));
		li.parent().hide();
	})

	.parents('.select').find('span').click(function()
	{
		var s=$(this);
		s.html('<input type="text" value=""'+s.data('mask')+'" placeholder=""'+s.parent().data('placeholder')+'" />').find('input').select().keyup(function()
		{
			var inp=$(this), sp=s.parent();
			sp.find('ul').show().find('li').hide()
			.each(function()
			{
				var x=new RegExp(inp.val(),'gi');
				if ($(this).html().match(x)) {$(this).show();}
			});
			sp.find('input').val(inp.val());
		});
	});

   

}


