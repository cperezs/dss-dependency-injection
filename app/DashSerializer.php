<?php

namespace App;

class DashSerializer implements ISerializer {
    public function serializeArray($arr) {
        return implode("-", $arr);
    }
}
