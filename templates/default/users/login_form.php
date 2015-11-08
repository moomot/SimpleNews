<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Авторизация пользователя</h3>
            </div>
            <div class="panel-body">
                {$statusMsg.msg | raw}
                {if logged}
                Вы уже авторизированы!
                {else}
                <form action="" method="post" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control noborder" required name="username" value="{$regData.login}" placeholder="Логин">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control noborder" required name="password" value="" placeholder="Введите пароль">
                    </div>
                    <input type="hidden" name="session_id" value="{$regData.sid}" />
                    <p><input type="submit" class="btn btn-default btn-block" name="do_login" value="Войти &rarr;"/></p>
                </form>
                {endif}
                </div>
            </div>
        </div>
    </div>