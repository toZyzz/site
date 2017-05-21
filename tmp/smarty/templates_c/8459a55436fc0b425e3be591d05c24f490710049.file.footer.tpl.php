<?php /* Smarty version Smarty-3.1.6, created on 2017-05-21 19:47:35
         compiled from "../views/default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2299587d2ce1062717-00236904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8459a55436fc0b425e3be591d05c24f490710049' => 
    array (
      0 => '../views/default\\footer.tpl',
      1 => 1495385220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2299587d2ce1062717-00236904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d2ce10df73',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d2ce10df73')) {function content_587d2ce10df73($_smarty_tpl) {?>    <footer class="all_footer clearfix">
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
            document.body.style.backgroundImage='url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
/img/картина1.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_1").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
/img/картина2.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_2").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
/img/картина3.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_3").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
/img/картина4.jpg)';
            console.log('gg');
            $('.paginator a').removeClass('pushed');
            $(this).addClass('pushed');
        });
        $("#picture_4").click(function(event){
            event.preventDefault();
            document.body.style.backgroundImage='url(http://yurgin/www/<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
/img/картина5.jpg)';
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
<?php }} ?>