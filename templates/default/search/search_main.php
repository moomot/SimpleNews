<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Найденные новости</h3>
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
<nav class="text-center">
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        { for x in 1..pageSwitcher.pagesNum }
        <li><a href="{$path}/news/page{$x}">{$x}</a></li>
        { endfor }
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>