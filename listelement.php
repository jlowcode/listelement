<?php

/**
 * Plugin element to render plain text/HTML
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.element.display
 * @copyright   Copyright (C) 2005-2016  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\Utilities\ArrayHelper;

/**
 * Plugin element to render plain text/HTML
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.element.display
 * @since       3.0
 */
class PlgFabrik_ElementListelement extends PlgFabrik_Element {

    /**
     * Draws the html form element
     *
     * @param   array  $data           To pre-populate element with
     * @param   int    $repeatCounter  Repeat group counter
     *
     * @return  string	elements html
     */
    public function render($data, $repeatCounter = 0) {
        $params = $this->getParams();
        $formModel = $this->getFormModel();
        $this->fieldForm = $formModel->getData();

        $layout = $this->getLayout('form');
        $displayData = new stdClass;

        $field_form = $params->get('listform_field_name');
        $array_field = explode('.', $field_form[0]);
        $field = $array_field[0] . '___' . $array_field[1];

        $listid = $params->get('listform_table_filter');
        $fieldnm = $params->get('listform_field_filter');
        $field1 = $this->fieldForm[$field];

        $model = JModelLegacy::getInstance('List', 'FabrikFEModel');
        $model->setId($listid[0]);
        $table = $model->getTable();
        
        $nameTable = $table->db_table_name . '___' . $fieldnm[0];        

        $displayData->url = JUri::base() . 'index.php?option=com_fabrik&task=list.view&tmpl=component&ajax=1&listid=' . $listid[0] .
                '&' . $nameTable . '_raw=' . $field1 . '&resetfilters=1';

        return $layout->render($displayData);
    }
}
