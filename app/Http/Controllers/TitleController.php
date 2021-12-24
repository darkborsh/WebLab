<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Routing\Controller;

Class TitleController extends Controller {
    public $arr = [];

    public function init()
    {
        $this->arr = Title::query()->get();
    }

    /**
     * Список товаров.
     * @return array
     */
    public function list()
    {
        $this->init();
        return $this->arr;
    }

    /**
     * Информация о товаре
     * @param $id
     * @return array
     */
    public function info($id)
    {
        $this->init();
        return  $this->arr[$id-1];
    }
}
