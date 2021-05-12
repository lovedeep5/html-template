$(".dropdown").click(function(){
    
if($(this).find(".dropdown-menu").hasClass("show")){
    let items = $(this).find(".dropdown-menu").children().length;
    let itemHeight = $(this).find(".dropdown-menu > li").height();

    $(this).find(".dropdown-menu.show").animate({
        "height" : (itemHeight * items) + "px"  
    })
} else {

    $(this).find(".dropdown-menu").animate({
        "height" : "0px"  
    })

}

    
})