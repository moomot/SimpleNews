<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Профиль пользователя {$user.login}</h3>
            </div>
            <div class="panel-body ">

                <div class="col-md-10">
                <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-1 control-label">ID</label>
                    <div class="col-lg-11">
                        <p class="form-control-static">{$user.id}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Логин</label>
                    <div class="col-lg-11">
                        <p class="form-control-static">{$user.login}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Почта</label>
                    <div class="col-lg-11">
                        <p class="form-control-static">{$user.mail}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Дата рождения</label>
                    <div class="col-lg-11">
                        <p class="form-control-static">{$user.date}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Пол</label>
                    <div class="col-lg-11">
                        <p class="form-control-static">{$user.gender}</p>
                    </div>
                </div>
                </div>
                </div>
                <div class="col-md-2">
                    <img class="thumbnail" src="{$imgPath}/{$news.thumbnail}"width="150" height="150" alt="poster" />
                </div>
            </div>
        </div>
    </div>
</div>
