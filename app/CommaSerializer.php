<?php

namespace App;

class CommaSerializer implements ISerializer {
    public function serializeArray($arr) {
        return implode(",", $arr);
    }
}
