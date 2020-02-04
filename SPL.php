<?php
$dir = new DirectoryIterator('.');
foreach ($dir as $file) {
    if ($file->isFile()) {
        echo $file->getFilename() . ' type <b>' . $file->getType() . '</b> size <b>' . $file->getSize() . '</b><br />';
    }
    else {
        echo $file->getFilename() . ' type <b>' . $file->getType() . '</b><br />';
    }
}

class ExtensionFilter extends FilterIterator
{
    private $ext;
    private $it;

    public function __construct(DirectoryIterator $it, $ext)
    {
        parent::__construct($it);
        $this->it = $it;
        $this->ext = $ext;
    }

    /**
     * @inheritDoc
     */
    public function accept()
    {
        if (!$this->it->isDir()) {
            $ext = pathinfo($this->current(), PATHINFO_EXTENSION);
            return $ext != $this->ext;
        }
        return true;
    }
}

$filter = new ExtensionFilter(new DirectoryIterator('.'), 'php');

foreach ($filter as $item) {
    echo $item . '<br />';
}

echo '<br />';
echo '<br />';

$limit = new LimitIterator(new ExtensionFilter(new DirectoryIterator('.'), 'php'), 2, 5);

foreach ($limit as $file) {
    echo $file . '<br />';
}

echo '<br />';
echo '<br />';

function recursion_dir($path)
{
    static $depth = 0;

    $dir = opendir($path);
    while (($file = readdir($dir)) !== false) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        echo str_repeat('|&nbsp&nbsp&nbsp&nbsp', $depth) . $file . '<br />';
        if (is_dir($path . '/' . $file)) {
            $depth++;
            recursion_dir($path . '/' . $file);
            $depth--;
        }
    }
    closedir($dir);
}

//recursion_dir('.');

$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'), true);

foreach ($dir as $file)
{
    echo str_repeat('|&nbsp&nbsp&nbsp&nbsp', $dir->getDepth()) . ' ' . $file . '<br />';
}






























