{ for item in newsItems }
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><a href="{$path}/news/{$item.url}">{$item.title}</a></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                {if item.thumbnail == ""}
                <img  class="thumbnail" src="{$imgPath}/noposter.jpg" alt="NOPOSTER" width="150" height="150" />
                {else}
                <img  class="thumbnail" src="{$imgPath}/{$item.thumbnail}" alt="poster" width="150" height="150" />
                {endif}
            </div>
            <div class="col-md-9" style="margin-left: -40px">{$item.shortDescription}</div>
        </div>
        <p><a href="{$path}/news/{$item.url}" class="btn btn-default pull-right" role="button">Подробнее</a> </p>
    </div>
</div>
{ endfor }