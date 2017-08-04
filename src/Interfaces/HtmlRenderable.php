<?php

namespace Xentyo\TableRenderizer\Interfaces;

use Xentyo\TableRenderizer\Property;

interface HtmlRenderable extends Renderable
{
    public function hasProperty($key);
    public function addProperty(Property $prop);
    public function removeProperty($key);
}
