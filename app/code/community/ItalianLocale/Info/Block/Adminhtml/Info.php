<?php
/* @copyright Copyright (c) 2014 Black Cat - Antonio Carboni - http://antoniocarboni.com */
class ItalianLocale_Info_Block_Adminhtml_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    protected $_template = 'italianlocale/info.phtml';

    public function render(Varien_Data_Form_Element_Abstract $fieldset)
    {

        foreach ($fieldset->getSortedElements() as $element) {
            $htmlId = $element->getHtmlId();
            $this->_elements[$htmlId] = $element;
        }
        $originalData = $fieldset->getOriginalData();
  
		$this->addData(array(
            'iframe_url' => isset($originalData['iframe_url']) ? $originalData['iframe_url'] : '',
        ));

        return $this->toHtml();
    }

}
