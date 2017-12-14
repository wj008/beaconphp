<?php
/**
 * Created by PhpStorm.
 * User: wj008
 * Date: 2017/12/14
 * Time: 18:02
 */

namespace widget;


use beacon\Field;

class Text extends Hidden
{

    public function code(Field $field, $args)
    {
        $field->explodeAttr($attr, $args);
        $field->explodeData($attr);
        return '<input ' . join(' ', $attr) . ' />';
    }

    public function assign(Field $field, string $method = '')
    {
        $field->varType = 'string';
        return parent::assign($field, $method);
    }
}