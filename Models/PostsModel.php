<?php
/**
 * An example of what a Model could look like
 */

namespace BasicMVC\Models;

use BasicMVC\Models\BaseModel as BaseModel;

class PostsModel extends BaseModel
{
    public function getEntries()
    {
        $return = [];
        $return[0] = ['title' => 'Hello world'];
        $return[1] = ['title' => 'Hello universe'];
        return $return;
    }
}
