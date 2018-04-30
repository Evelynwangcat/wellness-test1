window.onload=function () {
	// body...
	console.log("loaded2");
	// $( ".title" ).hover2(function(){
	// // 	$( this).addClass( "bgred" );
	// 	$( this ).addClass( "bgred" );
	// },
	// function(){
	// // 	$( this).addClass( "bgred" );
	// 	$( this ).removeClass( "bgred" );
	// })
	// for (var i = 0; i < 5; i++) {
	// 	$("#slidecontainer div[i]"){
	// 		$( this ).addClass( "displaynone" );
	// 	}
	// }
	$("#controler1").hover(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$(".selection").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#subbody").removeClass( "displayNone" ).addClass( "displayBlock" ); 
		$("#body").removeClass( "displayNone" ).addClass( "displayBlock" );                       
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler1").removeClass( "tab" ).addClass( "tabLight" );
	})

	$("#controler2").hover(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$(".selection").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#subachieve").removeClass( "displayNone" ).addClass( "displayBlock" ); 
		$("#achieve").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler2").removeClass( "tab" ).addClass( "tabLight" );
	})

	$("#controler3").hover(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$(".selection").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#subconnect").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#connect").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler3").removeClass( "tab" ).addClass( "tabLight" );
	})

	$("#controler4").hover(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$(".selection").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#subenjoy").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#enjoy").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler4").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#controler5").hover(function(){
		
		$("#slidecontainer div").removeClass( "displayBlock" ).addClass( "displayNone" );
		$(".selection").removeClass( "displayBlock" ).addClass( "displayNone" );
		$("#subsetback").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#setBack").removeClass( "displayNone" ).addClass( "displayBlock" );
		$("#controler span").removeClass( "tabLight" ).addClass( "tab" );
		$("#controler5").removeClass( "tab" ).addClass( "tabLight" );
	})
	$("#createTool").on("click", function(){
	    console.log("123");
	    $("#createToolTar").toggle();
	    
	})
	$("#textalienLeft").on("click", function(){
	    console.log("123");
	    $("#createToolTar").toggle();
	    
	})

}