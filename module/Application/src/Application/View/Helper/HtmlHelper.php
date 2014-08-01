<?php

/**
 * Classe para criação de html padrao
 *
 * @author reginaldo.junior
 */

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class HtmlHelper extends AbstractHelper {
    /*
     * metodo para cria html de group 
     */
    
    private $configFormGroup;
    
    public function getConfigFormGroup() {
        return $this->configFormGroup;
    }

    public function setConfigFormGroup($configFormGroup) {
        $this->configFormGroup = $configFormGroup;
    }    
    public function formGroup($input, $label = NULL) {
        $elementsHtml = $this->getConfigFormGroup();        
        try {            
            $out = "<div class='form-group'>";
            if (isset($elementsHtml['label'])) {
                $out .= "<label ";
                if (is_array($elementsHtml['label']['attributes'])) {
                    $out .= $this->montarAttr($elementsHtml['label']['attributes']);
                }
                $out .= ">".$label."</label>";
            }
            if (isset($elementsHtml['attributes'])) {
                $out .= "<div ";
                $out .= $this->montarAttr($elementsHtml['attributes']);
                $out .= ">". $input . "</div>";
            }
            $out .= "</div>";
            
            return $out;
        } catch (Zend_Exception $exc) {
            echo "Caught exception: " . get_class($e) . "\n";
            echo "Message: " . $e->getMessage() . "\n";
        }
    }

    protected function montarAttr(array $attr) {
        $out = "";
        foreach ($attr as $key => $val) {
            $out .= $key . '=' . '"' . $val . '" ';
        }
        return $out;
    }

}
