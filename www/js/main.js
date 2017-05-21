/*
*
*Добавлениае товара в корзину
*
*/

function showCat(idCat){
    console.log("Captains Lg");
    $.ajax({
    	type:'POST',
    	async: false,
    	url:'?controller=gallery&child_id='+idCat,
    	success: function(data){
    		if(data['success']){
                console.log("dd");
    		/*	$('.up_link').next().removeClass('show');
                $('#_'+idCat).next().toggleClass('show');
                $('.gallery_navigation a').removeClass('pushedForMenu');
                $('#_'+idCat).addClass('pushedForMenu');
    		}*/
    	},
    	error: function(xhr,status,error){  
             console.log(status);
             console.log(error);
            }
    });

}
/*
*Восстановление элемента в корзине
*
*/
function addToCartAfter(itemId){
    console.log("Capt");
    var quantity = $('#itemCnt_'+ itemId).val();
    console.log(quantity);
    $.ajax({
        type:'POST',
        async: false,
        url:"?controller=cart&action=addtocart&id="+itemId+"&quantity="+quantity,
        dataType:'json',
        success: function(data){
            if(data['success']){
                console.log(data);
                $('#basket-cost').html(data['sum']+'.00 РУБ.');
                $('#removeCart_'+itemId).show();
                $('#addCart_'+itemId).hide();
                $('#itemCnt_'+itemId).removeAttr('readonly');
            }
        },
        error: function(xhr,status,error){  
             console.log(status);
             console.log(error);
            }
    });
}
/*
*Подсчет стоимости товара после изменения кол-ва товара в корзине
*
*/

function conversionPrice(itemId){
    var newCnt=$('#itemCnt_' + itemId).val();
    var itemPrice=$('#itemPrice_' + itemId).attr('value');
    var itemRealPrice=newCnt*itemPrice;
    console.log(itemRealPrice);
    $('#itemRealPrice_'+ itemId).html(itemRealPrice);                    
      $.ajax({
        type:'POST',
        async: false,
        url:"?controller=cart&action=addtocartafter&id="+itemId+"&quantity="+newCnt,
        dataType:'json',
        success: function(data){
             $('#basket-cost').html(data['sum']+'.00 РУБ.');         
        },
       error: function(xhr,status,error){  
             console.log(status);
             console.log(error);
            }
    });

}

/*
*Удаление продукта из корзины
*
*/


function removeFromCart(itemId){
    console.log("removeFromCart"+itemId);
    $.ajax({
        type:'POST',
        async: false,
        url:"?controller=cart&action=removefromcart&id="+itemId, 
        dataType:'json',
        success: function(data){
            if(data['success']){
                console.log(data);
                $('#basket-cost').html(data['sum']+'.00 РУБ.');
                $('#removeCart_'+itemId).hide();
                $('#addCart_'+itemId).show();
                $('#itemCnt_'+itemId).attr('readonly', 'readonly');
            }
        },
        error: function(xhr,status,error){  
             console.log(status);
             console.log(error);
            }
    });

}

/*
*Получение данных с формы 
*
*/

function getData(obj_form){
    var hData;
    $(obj_form).each(function(){
    hData=$(this).serialize();
    });
    return hData;
}


/*
*Сохранение заказа 
*
*/

function saveOrder(){
     var postData=getData('#formOrder');      
            $.ajax({
                type:"POST",
                url:"?controller=cart&action=saveorder",
                data: postData,
                 dataType:'json',
            }).done(function(data){
                    console.log(data);
                });
            return false;
}

/*
*Поиск товара 
*

function search(){
      var postData=getData('#search');      
          var z= $.ajax({
                type:"POST",
                url:"?controller=search&action=index",
                data: postData,
            })
          z.done(function(data){
                    console.log(data);
                });
          z.fail( function(xhr,status,error){  
             console.log(status);
             console.log(error);
            });
}
*/