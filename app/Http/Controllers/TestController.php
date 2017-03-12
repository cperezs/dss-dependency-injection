<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ISerializer;

class TestController extends Controller
{
    protected $serializer;

    public function __construct(ISerializer $serializer) {
        $this->serializer = $serializer;
    }

    public function index() {
        //return "hello!";
        $arr = array(1, 2, 3, 4);
        return $this->serializer->serializeArray($arr);
    }
}
