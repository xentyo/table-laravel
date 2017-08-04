<?php

namespace Xentyo\TableRenderizer;

/**
 *
 */
class TableList
{
    protected $values = [];
    public function __construct($values = [])
    {
        $this->values = $values;
    }

    public function value($key, $newValue = null)
    {
        if (is_null($newValue)) {
            return $this->values[$key];
        } else {
            return $this->values[$key] = $newValue;
        }
    }

    public function values(array $indexes = [])
    {
        if (count($indexes) > 0) {
            $result = $this->values;
            foreach ($indexes as $index) {
                if (!is_null($result[$index])) {
                    unset($result[$index]);
                }
            }
            return $result;
        }
        return $this->values;
    }
}
