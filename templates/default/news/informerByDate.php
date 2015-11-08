<div class="container">
        <div class="row">
{ for item in lastNewsByDate }
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail">
                    {if item.thumbnail == ""}
                    <img  class="thumbnail" src="{$imgPath}/noposter.jpg" alt="NOPOSTER" width="150" height="150" />
                    {else}
                    <img  class="thumbnail" src="{$imgPath}/{$item.thumbnail}" alt="poster" width="150" height="150" />
                    {endif}
                    <div class="caption newsInformer">
                        <h4>{$item.title}</h4>
                        <p>{$item.shortDescription | raw}</p>
                        <p><a href="{$path}/news/{$item.url}" class="btn btn-primary pull-right" role="button">Подробнее</a> </p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

{ endfor }
</div>
</div>