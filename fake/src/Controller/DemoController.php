<?php

namespace FakeTcv\Fake\Controller;

use Illuminate\Routing\Controller;

class DemoController extends Controller
{
    public function index()
    {
        dd(1234);
        return 123;
    }
}
