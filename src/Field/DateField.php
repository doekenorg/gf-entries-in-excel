<?php

namespace GFExcel\Field;

use GFCommon;

class DateField extends BaseField
{
    /**
     * {@inheritdoc)
     * Get date in the format set in the field.
     *
     * @param array $entry
     * @return array|string
     */
    protected function getFieldValue($entry)
    {
        if (!$value = parent::getFieldValue($entry)) {
            return $value;
        }

        // Get the preferred format
        $format = gf_apply_filters([
            'gfexcel_field_date_format',
            $this->field->formId,
            $this->field->id,
        ], $this->field->dateFormat);

        return GFCommon::date_display($value, $format);
    }
}
