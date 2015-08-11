<?php

class ViewFactory
{
    protected function __construct()
    {

    }

    /**
     * @return ViewFactory
     */
    protected static function getInstance()
    {
        static $self;

        if (is_null($self)) {
            $self = new self();
        }

        return $self;
    }

    /**
     * @param $viewType
     * @return View
     */
    public function getViewByViewType($viewType)
    {

    }

    /**
     * @param $viewType
     * @return View
     */
    public static function getView($viewType)
    {
        $instance = self::getInstance();
        return $instance->getViewByViewType($viewType);
    }
}