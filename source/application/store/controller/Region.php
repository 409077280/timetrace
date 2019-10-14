<?php


namespace app\store\controller;

use app\store\model\Region as RegionModel;
use think\exception\DbException;

class Region extends Controller
{
    public function get_cache_all(){
        $model = new RegionModel();
        try{
            $data = $model->getCacheAll();
            return json($this->renderJson(0, "", "", $data));
        } catch (DbException $e) {
            $message = $e->getMessage();
            return json($this->renderJson(1, $message, '', []));
        }
    }

}