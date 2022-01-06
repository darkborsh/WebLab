<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    public function info($id)
    {
        $product = Title::query()
            ->where(['id' => $id])
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        return $product;
    }
}
