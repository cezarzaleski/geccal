<?php

/**
 * Classe contendo métodos auxiliares
 *
 * @author cezar.zaleski
 */

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class UtilHelper extends AbstractHelper {

    private $utils;

    public function __construct($utils)
    {
        $this->utils = $utils;
    }

    /*
     * retorna arquivo .js referente a página caregada
     */

    public function getJavaScript()
    {
        return "/js" . $this->utils->getRequest()->getUri()->getPath() . ".js";
    }

}
