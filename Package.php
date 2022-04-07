<?php

class Package {

    private string $someField;


    public function __construct(private string $field)
    {
        $this->someField = $field;
    }


    public function getField()
    {
        return $this->field;
    }

}