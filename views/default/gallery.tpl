            <nav class="gallery_navigation">
                <ul class="list">
                    {foreach $rsCategories as $item}
                    <li>
                        <a id="_{$item['id']}" class="up_link navigate_link" href="?controller=gallery&id={$item['id']}">{$item['name']}</a>
                        {if isset($item['children'])}
                        <ul class="under_list">
                            {foreach $item['children'] as $itemChild}
                            <li>
                                <a id="__{$itemChild['id']}" class="down_link navigate_link" href="?controller=gallery&child_id={$itemChild['id']}">{$itemChild['name']}</a>
                            </li>
                            {/foreach}
                        </ul>
                        {/if}
                    </li>
                    {/foreach}
                </ul>
            </nav>
            <div class="picture_window">
                <div class="picture_navigate">
                    <a id="picture_up" class="up" href="#"></a>
                    <div id="slid" class="pictures_slider">
                        <ul>
                            {foreach $rsImages as $slide_image}
                            <li class="first_image">
                                 <img class="metka" width="100%" src="/www/{$TemplateWebPath}img/imgStorage/{$slide_image['link']}">
                            </li>
                            {/foreach}
                        </ul>
                    </div>
                    <a id="picture_down" href="#"></a>
                </div>
                <div class="watch_block">
                    <div class="picture_image"><img width="100%" src="img/кар1.jpg"></div>
                    <div class="description">
                        <p class="name"><span class="bold">Название: </span>Деревенская дорога</p>
                        <p class="year"><span class="bold">Год: </span>2010</p>
                        <p class="size"><span class="bold">Размер: </span> 50x60</p>
                    </div>
                    <div class="gallery_paginator">
                        <a class="paginator_left" href="#" >Влево</a>
                        <a class="paginator_right" href="#" >Вправо</a>
                    </div>
                </div>
            </div>
        </div>
    </main>