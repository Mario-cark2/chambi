$(document).ready(function(){
                  
                  
  //AGREGAR CLASE ACTIVE AL PRIMER ENLACE=====
$('.category_list .category_item[category="all]').addClass('ct_item-active');

//FILTRANDO TODOS LOS OFICIOS==========
$('.category_item').click(function(){
    
    var catProduct = $(this).attr('category');
    console.log(catProduct);
    
    
    
    //AGREGARNDO CLASE ACTIVE AL ENLCAE SELECCIONADO
    $('.category_item').removeClass('ct_item-active');
    $(this).addClass('ct_item-active');
    
    //OCULTANDO PRODUCTOS=======
    
    $('.ofice-item').css('transform', 'scale(0)');
    function hideOfice(){
       $('.ofice-item').hide();
    }setTimeout(hideOfice,400);
  
    
    //MOSTRANDO OFICIOS===
    
    function showOfice(){
    $('.ofice-item [category="'+catProduct+'"]').show();
   
    $('.ofice-item [category="'+catProduct+'"]').css('transform', 'scale(1)');
    
    }setTimeout(showOfice,400);
    
});
          //MOSTRANDO TODOS LOS OFICIOS===== 
  $('.category_item[category="all"]').click(function(){
      
      function showAll(){
           $('.ofice-item').show();
          $('.ofice-item').css('transform', 'scale(1)');
      } setTimeout(showAll,400);
      
   
  });                
});
                  
                  
                 