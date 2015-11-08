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