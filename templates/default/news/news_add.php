<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Добавление новости</h3>
            </div>
            <div class="panel-body">
                {$statusMsg.msg |raw}
                {if statusMsg.status == 'error'}
                <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                        <input type="text" class="form-control noborder" required name="title" value="{$regData.title}" placeholder="Заголовок новости">
                    </div>
                    <div class="input-group fullWidth">
                        <h4><span class="label label-default" style="font-weight: normal;">Краткое описание новости (обязательное)</span></h4>
                        <textarea class="form-control" required name="shortDescription" placeholder="Краткое описание новости" cols="30" rows="7" >{$regData.shortDescription}</textarea>
                    </div>
                    <div class="input-group fullWidth">
                        <h4><span class="label label-default" style="font-weight: normal;">Полное описание новости (обязательное)</span></h4>
                        <textarea class="form-control" required name="fullDescription" placeholder="Полное описание новости" cols="30" rows="15" >{$regData.fullDescription}</textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Изображение</span>
                        <input class="form-control noborder"  type="FILE" required name="imgupload">
                    </div>
                    <p><input type="submit" class="btn btn-default btn-block" name="news_add" value="Добавить &rarr;"/></p>
                </form>
                {endif}
            </div>
        </div>
    </div>
</div>
