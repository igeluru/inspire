<?php
namespace Urponica\Inspire\Controllers;

use Illuminate\Http\Request;
use Urponica\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}