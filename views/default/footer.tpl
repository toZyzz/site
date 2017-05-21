    <footer class="all_footer clearfix">
            <div class="footer_contacts">
                <a href="#">Сообщение</a>
                <a href="#">Фейсбук</a>
                <a href="#">Телефон</a>
            </div>
    </footer>
</body>
</html>

    <script type="text/javascript">
    function animateSlide(){
        var amount =5;
        var arr=[];
        for (var i = 0; i < amount; i++) {
            var str='picture_'+i
            arr[i] = document.getElementById(str);
            console.log (arr[i])
        };
        $("#picture_0").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/{$TemplateWebPath}/img/картина1.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_1").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/{$TemplateWebPath}/img/картина2.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_2").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/{$TemplateWebPath}/img/картина3.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_3").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/{$TemplateWebPath}/img/картина4.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_4").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/{$TemplateWebPath}/img/картина5.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
       
    }
    $(animateSlide());
</script>           

<script type="text/javascript">
function GG(){
 var top=0;
    var picture_up = document.getElementById(".picture_up");
    var slider_height = document.getElementById("slid");
    var picture_down = document.getElementById("picture_down");
    var pictures_slider = document.getElementById("pictures_slider");
    var click=true;
    var height_ul=$("#slid ul").height();
    var border_width=parseFloat($("#slid img").css("border-width"));
    $("#picture_down").click(function(event){
        if(click==true){
            event.preventDefault();
            click=false;
            if (-top>=(height_ul-420)) {
                $("#picture_down").addClass('end');
                click=true;
            }else{
                var height=$(".metka").height()+10/*нет адаптации 10*/; 
                $('.up').removeClass('up'); 
                var stopped=top;
                var timer=setInterval(recss,1)
                function recss(){
                    if(top<=(stopped-height-2*border_width)){
                        clearInterval(timer);
                        click=true;
                        $(".first_image").next().addClass("first_image");
                        $(".metka").parent().removeClass("first_image");
                        $(".first_image").prev().children().removeClass("metka");
                        $(".first_image img").addClass("metka");
                        if (-top>=(height_ul-420)) {
                            $("#picture_down").addClass('end');
                            click=true;
                         }
                    }else{
                        top-=1;
                        console.log(top);
                        $("#slid>ul").css("margin-top",top+'px');
                    }
                }
            }
        }else{
            event.preventDefault();
             console.log(click);
        }
    });
    $("#picture_up").click(function(event){
        if(click==true){ ///бред
            event.preventDefault();
            click=false;
            if (top<0) {
                $(".end").removeClass('end');
                var height=$(".first_image").prev().children().height()+10/*нет адаптации 10*/;
                var stopped=top;
                var timer=setInterval(recss,1)
                function recss(){
                    if(top>=(stopped+height+2*border_width)){
                        clearInterval(timer);
                        click=true;
                        $("#slid>ul").css("margin-top",top+'px');
                        $(".first_image").prev().addClass("first_image");
                        $(".metka").parent().removeClass("first_image");
                        $(".first_image").next().children().removeClass("metka");
                        $(".first_image img").addClass("metka");
                        if (top==0) {
                            $("#picture_up").addClass('up');
                            click=true;
                        }
                    }else{
                        top+=1;
                        $("#slid>ul").css("margin-top",top+'px');
                    }
                }
            }
            else{
                $("#picture_up").addClass('up');
                click=true;
            }
        }else{
            event.preventDefault();
            console.log(click);
        }
    });
   
    $('.up_link').on('click', function(event) {
        var id_click =   event.target.id;
        if($('#'+id_click).next().children().length!==0){
            event.preventDefault();
        };
        $('.up_link').next().removeClass('show');
        $('#'+id_click).next().toggleClass('show');
        $('.gallery_navigation a').removeClass('pushedForMenu');
        $('#'+id_click).addClass('pushedForMenu');
    });
     $('.down_link').on('click', function(event) {
        //event.preventDefault();
        var id_click = event.target.id;
        $('#'+id_click).next().toggleClass('show');
        $('.under_list a').removeClass('pushedForMenu');
        $('#'+id_click).addClass('pushedForMenu');
    });
}

$(GG());
</script>
