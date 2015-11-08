<div class="panel panel-default panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Меню сайта</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="{if module == "my_cms"}active{endif}"><a href="{$path}">Главная страница</a></li>
            <li role="presentation" class="{if module == 'news'}active{endif}"><a href="{$path}/news">Новости</a></li>
            <li role="presentation" class="{if id == 2}active{endif}"><a href="{$path}/pages/kontakty">Контакты</a></li>
        </ul>
    </div>
</div>