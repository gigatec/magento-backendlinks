<?php
/**
 * Renderer for URL key input
 * Allows to manage and overwrite URL Rewrites History save settings
 *
 * @category   Gigatec
 * @package    Gigatec_BackendLinks
 */

class Gigatec_BackendLinks_Block_Urlkey extends Mage_Adminhtml_Block_Catalog_Form_Renderer_Attribute_Urlkey
{
	public function getElementHtml()
	{
		$element = $this->getElement();
		if(!$element->getValue()) {
			return parent::getElementHtml();
		}
		$urlSuffix = Mage::helper('catalog/product')->getProductUrlSuffix();
		$url = Mage::getUrl($element->getValue() . $urlSuffix);
		return parent::getElementHtml() . '<br/><a href="' . $url . '" target="_blank">' . $url . '</a>';
	}
}
