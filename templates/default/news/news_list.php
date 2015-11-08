<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Список новостей пользователя {$currentUser}</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <th>Название</th>
                    <th>Дата</th>
                    </thead>
                    <tbody>
                                {for items in userNews}
                                    <tr>
                                        <td><a href="{$path}/news/{$items.url}">{$items.title}</a></td>
                                        <td>{$items.date}</td>
                                    </tr>
                                {endfor}

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
