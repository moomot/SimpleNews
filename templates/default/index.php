<!doctype html>
<html lang="en">
<head>
    {include "includes.php"}

</head>
<body>
{include "navbar.php" }

{include "header.php"}

{ if module == 'news' }
    {include "news/mainPage.php"}
{ elseif module == 'pages'}
    {include "staticpages/static.php"}
{ elseif module == 'user' }
    {include "users/profile.php" }
{ elseif module == 'news_add' }
    { include "news/news_add.php" }
{ elseif module == 'news_list' }
    { include "news/news_list.php" }
{ elseif module == 'search' }
	{ include "search/search_main.php" }
{ else }
    {include "siteMainPage.php" }
{ endif }

{include "footer.php" }
</body>
</html>