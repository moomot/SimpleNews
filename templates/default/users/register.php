<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{ if statusMsg.status == 'error' }Регистрация{else}Авторизация пользователя{ endif }</h3>
            </div>
            <div class="panel-body">
                {$statusMsg.msg | raw}
                { if logged }
                Вы уже зарегистрированы!
                { else }
                { if statusMsg.status == 'error' }
                <form action="" method="post" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control noborder" required name="username" value="{$regData.login}" placeholder="Логин">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control noborder"  required name="password" value="" placeholder="Введите пароль">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control noborder" required name="password_secondary" placeholder="Повторите пароль">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" class="form-control noborder" required name="email" value="{$regData.email}"  placeholder="E-Mail">
                    </div>

                    <div class="btn-group gender">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Выбрать пол
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript://">Male</a></li>
                            <li><a href="javascript://">Famale</a></li>
                        </ul>
                        <input type="hidden" name="gender" value="{$regData.gender}" >
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
                        <input type="text" class="form-control noborder" name="skype" placeholder="Skype"  value="{$regData.skype}" >
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        <input type="date" class="form-control noborder" required name="birthday" placeholder="Дата рождения"  value="{$regData.date}" >
                    </div>
                    <p><input type="submit" class="btn btn-default btn-block" name="register" value="Зарегистрироваться &rarr;"/></p>
                </form>
                { else }
                {include "login_form.php"}
                { endif }
                { endif }
            </div>
        </div>
    </div>
</div>
