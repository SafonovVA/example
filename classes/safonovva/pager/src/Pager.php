<?php
namespace safonovva\pager;

abstract class Pager
{
    protected View $view;
    protected ?int $parameters;
    protected string $counter_param;
    protected int $links_count;
    protected int $items_per_page;

    public function __construct(
        View $view,
        $items_per_page = 10,
        $links_count = 3,
        $get_params = null,
        $counter_param = 'page'
    ) {
        $this->view             = $view;
        $this->parameters       = $get_params;
        $this->counter_param    = $counter_param;
        $this->items_per_page   = $items_per_page;
        $this->links_count      = $links_count;
    }

    abstract public function getItemsCount();
    abstract public function getItems();

    public function getVisibleLinkCount()
    {
        return $this->links_count;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function getCounterParam()
    {
        return $this->counter_param;
    }

    public function getItemsPerPage()
    {
        return $this->items_per_page;
    }

    public function getCurrentPagePath()
    {
        return $_SERVER['PHP_SELF'];
    }

    public function getCurrentPage()
    {
        return (isset($_GET[$this->getCounterParam()])) ? intval($_GET[$this->getCounterParam()]) : 1;
    }

    public function getPagesCount() 
    {
        $total = $this->getItemsCount();
        $result = (int)($total / $this->getItemsPerPage());
        if ((float)($total / $this->getItemsPerPage()) - $result != 0) {
            $result++;
        } 
        return $result;
    }

    public function render()
    {
        return $this->view->render($this);
    }

    public function __toString()
    {
        return $this->render();
    }
}
