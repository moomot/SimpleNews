{ if do == 'register' }
    { include "users/register.php" }
{ elseif do == 'login' }
    { include "users/login_form.php" }
{ else }
{ if issetId == false}
{include "news/informerByDate.php"}
{include "body.php"}
{ else }
        {include "news/newsFull.php"}
{ endif }
{ endif }