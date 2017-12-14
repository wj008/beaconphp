<?php
/**
 * Created by PhpStorm.
 * User: wj008
 * Date: 2017/12/14
 * Time: 18:02
 */

namespace widget;


use beacon\Field;

class Textarea extends Hidden
{

    public function code(Field $field, $args)
    {
        $args['type'] = '';
        if (isset($args['value'])) {
            $field->value = $args['value'];
        }
        $args['value'] = '';
        $field->explodeAttr($attr, $args);
        $field->explodeData($attr);
        return '<textarea ' . join(' ', $attr) . '>' . htmlspecialchars($field->value) . '</textarea>';
    }

    public function assign(Field $field, string $method = '')
    {
        $field->varType = 'string';
        return parent::assign($field, $method);
    }
}