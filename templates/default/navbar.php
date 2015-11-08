{if logged}
<div class="navbar navbar-default navbar-inverse navbar-static-top nomargin">
    <div class="container">
        <div class="navbar-left">
            <div class="hello">Здравствуй, {$currentUser}</div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="{$path}/user/{$currentUser}">Мой профиль</a></li>
                <li><a href="{$path}/news_add">Добавить новость</a></li>
                <li><a href="{$path}/news_list">Добавленные новости</a></li>
                <li><a href="#">Статистика</a></li>
                <li><a href="{$path}/logout">Выход</a></li>
            </ul>
        </div>
    </div>
</div>
{endif}
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{$path}">Главная <span class="sr-only">(current)</span></a></li>
                <li><a href="{$path}/news">Новости</a></li>
                <li><a href="{$path}/pages/kontakty">Контакты</a></li>
                { if logged == FALSE }
                <li><a href="{$path}/register">Регистрация</a></li>
                <li><a href="{$path}/login">Авторизация</a></li>
                {endif}
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <form class="navbar-form navbar-right" action="search" role="search" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Слово для поиска" name="searchQuery">
                </div>
				<input type="submit" class="btn btn-default" name="find" value="Найти" />
            </form>
        </div>
    </div>
</nav>