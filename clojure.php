<?php

require_once 'config/main.php';

class Need
{
    public function Fact()
    {
        $factorial = function($a) use (&$factorial)
        {
            if ($a === 1) {
                return $a;
            }

            return $factorial($a - 1) * ($a);
        };

        return $factorial;
    }
}

$g = new Need;

$factorial = $g->Fact();
echo $factorial(5) . '<hr>';

class View
{
    protected $pages = [];
    protected $title = 'Contacts';
    protected $body = 'Contact pages body';

    public function addPage($page, $pageCallback)
    {
        $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
    }

    public function render($page)
    {
        $this->pages[$page]();

        $content = <<<HTML
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{$this->title()}</title>
    </head>
    <body>
        <p>{$this->body()}</p>
    </body>
</html>
HTML;
        echo $content;
    }

    public function title()
    {
        return htmlspecialchars($this->title);
    }
    public function body()
    {
        return nl2br($this->body);
    }
}

$view = new View();
$view->addPage('about', function ()
{
    $this->title = 'About us';
    $this->body = 'About us page content';
});
$view->render('about');
