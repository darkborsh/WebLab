<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    public $arr = [];

    public function init()
    {
        $this->arr = User::query()->get();
    }


    /**
     * Список пользователей.
     * @return array[]
     */
    public function list()
    {
        $this->init();
        return $this->arr;
    }

    public function info($id)
    {
        $product = User::query()
            ->where(['id' => $id])
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        return $product;
    }

    public function authorization(Request $request): array
    {
        //$this->init();
        $arr = [];
        $arr = User::query()->where(['name' => $request->get('name')])->first();
        if ($arr == NULL){
            return [
                'userId'=> -1
            ];
        }
        else
        {
            if ($arr['password'] == $request->get('password')){
                return [
                    'userId'=> $arr['id']
                ];
            }
            else
            {
                return [
                    'userId'=> -1
                ];
            }
        }
    }
}
