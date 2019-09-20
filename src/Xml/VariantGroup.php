<?php


namespace Dandomain\Xml;


use Dandomain\Xml\Variant\Variant;
use Doctrine\Common\Collections\ArrayCollection;

class VariantGroup extends Element
{
    /**
     * @var
     */
    protected $groupLanguageId;
    /**
     * @var
     */
    protected $groupName;
    /**
     * @var
     */
    protected $groupFreeTextVariant;
    /**
     * @var
     */
    protected $groupSort;
    /**
     * @var
     */
    protected $groupSelectedText;
    /**
     * @var
     */
    protected $groupType;

    protected $variants;

    public function __construct($groupLanguageId, $groupName, $groupFreeTextVariant, $groupSort, $groupSelectedText, $groupType, $variants = null)
    {
        $this->groupLanguageId = $groupLanguageId;
        $this->groupName = $groupName;
        $this->groupFreeTextVariant = $groupFreeTextVariant;
        $this->groupSort = $groupSort;
        $this->groupSelectedText = $groupSelectedText;
        $this->groupType = $groupType;
        $this->setVariants($variants);
    }

    public function getXml()
    {
        $xml = '<VARIANT_GROUP>';
        $xml .= '<GRP_LANGUAGE_ID>' . $this->groupLanguageId . '</GRP_LANGUAGE_ID>';
        $xml .= '<GROUP_NAME>' . $this->groupName . '</GROUP_NAME>';
        $xml .= '<GRP_FREE_TEXT_VARIANT>' . $this->groupFreeTextVariant . '</GRP_FREE_TEXT_VARIANT>';
        $xml .= '<GRP_SORT>' . $this->groupSort . '</GRP_SORT>';
        $xml .= '<GRP_SELECTED_TEXT>' . $this->groupSelectedText . '</GRP_SELECTED_TEXT>';
        $xml .= '<GRP_TYPE>' . $this->groupType . '</GRP_TYPE>';
        if($this->variants && count($this->variants)) {
            $xml .= '<VARIANTS>';
            foreach ($this->variants as $variant) {
                $xml .= $variant->getXml();
            }
            $xml .= '</VARIANTS>';
        }
        $xml .= '</VARIANT_GROUP>';
        return $xml;
    }

    /**
     * @return mixed
     */
    public function getGroupLanguageId()
    {
        return $this->groupLanguageId;
    }

    /**
     * @param mixed $groupLanguageId
     */
    public function setGroupLanguageId($groupLanguageId)
    {
        $this->groupLanguageId = $groupLanguageId;
    }

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    /**
     * @return mixed
     */
    public function getGroupFreeTextVariant()
    {
        return $this->groupFreeTextVariant;
    }

    /**
     * @param mixed $groupFreeTextVariant
     */
    public function setGroupFreeTextVariant($groupFreeTextVariant)
    {
        $this->groupFreeTextVariant = $groupFreeTextVariant;
    }

    /**
     * @return mixed
     */
    public function getGroupSort()
    {
        return $this->groupSort;
    }

    /**
     * @param mixed $groupSort
     */
    public function setGroupSort($groupSort)
    {
        $this->groupSort = $groupSort;
    }

    /**
     * @return mixed
     */
    public function getGroupSelectedText()
    {
        return $this->groupSelectedText;
    }

    /**
     * @param mixed $groupSelectedText
     */
    public function setGroupSelectedText($groupSelectedText)
    {
        $this->groupSelectedText = $groupSelectedText;
    }

    /**
     * @return mixed
     */
    public function getGroupType()
    {
        return $this->groupType;
    }

    /**
     * @param mixed $groupType
     */
    public function setGroupType($groupType)
    {
        $this->groupType = $groupType;
    }

    /**
     * Adds a category element to the product
     *
     * @param Variant $variant
     * @return VariantGroup
     */
    public function addVariant(Variant $variant) {
        $this->variants[] = $variant;
        return $this;
    }

    /**
     * @return Variant[]|ArrayCollection
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param Variant[]|ArrayCollection $variants
     * @return VariantGroup
     */
    public function setVariants($variants)
    {
        if(empty($variants)) {
            $this->variants = new ArrayCollection();
        } elseif(is_array($variants)) {
            $this->variants = new ArrayCollection($variants);
        } else {
            $this->variants = $variants;
        }
        return $this;
    }
}