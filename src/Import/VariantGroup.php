<?php


namespace Dandomain\Import;


class VariantGroup extends Import
{
    protected $xmlStart = '<?xml version="1.0" encoding="utf-8"?><VARIANT_EXPORT type="VARIANTS"><ELEMENTS>';
    protected $xmlEnd = '</ELEMENTS></VARIANT_EXPORT>';
}