<?php
/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2017 terminal42 gmbh & Isotope eCommerce Workgroup
 * 
 * RESTful API for Isotope eCommerce
 * 
 * Copyright (C) 2017 Henry Lamorski
 * 
 * @author Henry Lamorski <henry.lamorski@mailbox.org>
 *
 * @link       https://isotopeecommerce.org
 * @link       https://github.com/HenryLamorski/isotope-rest-api
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */
 
class AttributeOption extends Generic
{
    public function tableName()
    {
        return 'tl_iso_attribute_option';
	}

  
    public function rules()
    {
        return array(
            array('isDefault,langPid','numerical','integerOnly'=>true),
            array('label,price,language', 'safe'),
        );
    }
  
    public static function model($className=__CLASS__)
	{
        return parent::model($className);
	}
}
