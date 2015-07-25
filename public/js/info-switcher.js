
// DEMO Swticher Base
jQuery('.info_box .info-icon').click(function(){

    if(jQuery('.info_box').hasClass("active")){
        jQuery('.info_box').animate({"left":"-180px"},function(){
            jQuery('.info_box').toggleClass("active");
        });
    }else{
        jQuery('.info_box').animate({"left":"0px"},function(){
            jQuery('.info_box').toggleClass("active");
        });
    }
});