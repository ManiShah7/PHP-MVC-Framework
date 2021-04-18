<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public Model $model;
    public string $type;
    public string $attribute;
    public string $fieldName;

    public function __construct(\app\core\Model $model, string $attribute, string $fieldName)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
        $this->fieldName = $fieldName;
    }

    public function __toString()
    {
        return sprintf(
            '
        <div class="form-group">
            <label>%s</label>
            <input type="%s" class="form-control %s" value="%s" name="%s">
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ',
            $this->fieldName,
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
            $this->attribute,
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
