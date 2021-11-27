(function(){
    $(document).ready(function(){
        $(".btn-menu").click(function(){
            var filtro = $(this).attr("data-filter");

            if(filtro == "todos") {
                $(".box-img").show(500);
            }else{
                $(".box-img").not("."+filtro).hide(500);
                $(".box-img").filter("."+filtro).show(500);
                
            }
            
        });
        $("ul li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");

        });
    });

}())