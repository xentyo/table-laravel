<?php

namespace Xentyo\TableRenderizer;

interface HtmlRenderable extends Renderable
{
    public function hasProperty($key);
    public function addProperty(Property $prop);
    public function removeProperty($key);
}
