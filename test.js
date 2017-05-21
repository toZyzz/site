 function animateSlide(){
        var amount =5;
        var arr=[];
        for (var i = 0; i < amount; i++) {
            var str='picture_'+i
            arr[i] = document.getElementById(str);
            console.log (arr[i])
        };
        $("#picture_1").click(function(event){
            event.preventDefault();
            $('.index').addClass('mage');
            console.log('gg');
        });
       
    }
    $(animateSlide());