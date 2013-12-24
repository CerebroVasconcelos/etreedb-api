<?php

namespace Db\Entity;

abstract class AbstractEntity
{
    public function getArrayCopy()
    {
        $reflect = new \ReflectionObject($this);
        $return = array();
        foreach ($reflect->getProperties() as $property) {
            $property->setAccessible(true);
            $return[$property->getName()] = $property->getValue($this);
        }

        return $return;
    }

    public function exchangeArray($values)
    {
        foreach ($values as $key => $value) {
            if ($key == 'id') continue;
            $this->$key = $value;
        }
    }
}