<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Routing\Controller;

class FeatureController extends Controller {
    public function list()
    {
        return Feature::query()->get();
    }
}
