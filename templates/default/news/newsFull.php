{if news != false}
<div class="container">
<div class="row">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{$news.title}</h3>
        </div>
        <div class="panel-body">
            <div class="text-center news-img col-md-2">
                <a href="{$imgPath}/{$news.thumbnail}" class="thumbnail"><img src="{$imgPath}/{$news.thumbnail}"width="300" height="300" alt="poster" /></a>
            </div>
       <p>{$news.fullDescription | raw}</p>
        </div>
    </div>
        <div class="input-group">
            <span class="input-group-addon">Автор:</span>
            <input type="text" class="form-control noborder" placeholder="{$news.author}" readonly aria-describedby="basic-addon1">
        </div>
    <div class="input-group">
        <span class="input-group-addon">Дата добавления:</span>
        <input type="text" class="form-control noborder" placeholder="{$news.date}" readonly aria-describedby="basic-addon1">
    </div>
</div>
</div>
{else}
    {include "404.php"}
{endif}