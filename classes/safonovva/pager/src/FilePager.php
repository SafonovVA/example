<?php


namespace safonovva\pager;


class FilePager extends Pager
{
    protected string $filename;

    public function __construct(
        View $view,
        string $filename = '.',
        int $items_per_page = 10,
        int $links_count = 3,
        ?int $get_params = null,
        string $counter_param = 'page'
    ) {
        $this->filename = $filename;

        parent::__construct($view, $items_per_page, $links_count, $get_params, $counter_param);
    }

    public function getItemsCount(): int
    {
        $count_line = 0;

        $fd = fopen($this->filename, 'r');

        if ($fd) {
            while (!feof($fd)) {
                fgets($fd, 10000);
                $count_line++;
            }
            fclose($fd);
        }

        return $count_line;
    }

    public function getItems(): array
    {
        $current_page = $this->getCurrentPage();
    }
}