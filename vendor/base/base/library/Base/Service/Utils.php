<?php

namespace Base\Service;

class Utils {

    private $mvcEvent;

    function __construct($mvcEvent)
    {
        $this->mvcEvent = $mvcEvent;
    }

    public function getModule()
    {
        $request = $this->mvcEvent->getRequest();
        $uri = $request->getRequestUri();
        $url = explode('/', $uri);
        return $url[1];
    }

}
