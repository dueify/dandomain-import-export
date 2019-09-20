<?php


namespace Dandomain\Xml\VariantGroup;

use Dandomain\Xml\Element;

class AdvancedVariant extends Element
{
    protected $relatedProductNumber;
    protected $advancedVariantText;

    public function __construct($relatedProductNumber = null, $advancedVariantText = null)
    {
        $this->relatedProductNumber = $relatedProductNumber;
        $this->advancedVariantText = $advancedVariantText;
    }

    public function getXml()
    {
        $xml = '<ADV_VAR>';
        $xml .= '<ADV_VAR_TEXT>' . $this->advancedVariantText . '</ADV_VAR_TEXT>';
        $xml .= '<REL_PROD_NUM>' . $this->relatedProductNumber . '</REL_PROD_NUM>';
        $xml .= '</ADV_VAR>';
        return $xml;
    }
}