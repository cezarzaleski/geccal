<?php

namespace Base\Form;

use Zend\Form\Element\Select;
use Zend\Form\Element\Checkbox;
use Zend\Form\Form;

abstract class AbstractForm extends Form {

    protected function addElement($name, $type, $label = null, 
            $attributes = array(), $options = array()) {
        switch ($type) {
            case 'select':
                $element = new Select($name);
                $element->setLabel($label)
                        ->setAttributes($attributes)
                        ->setOptions($options);
                break;
            case 'checkbox':
                $element = new Checkbox($name);
                $element->setLabel($label)
                        ->setAttributes($attributes)
                        ->setOptions($options);
                break;
            default:
                $attributes['type'] = $type;
                if ($type == 'submit') {
                    $attributes['value'] = $label;
                } else {
                    $options['label'] = $label;
                }
                $element = array(
                    'name' => $name,
                    'attributes' => $attributes,
                    'options' => $options
                );
                break;
        }
        $this->add($element);
    }

}
