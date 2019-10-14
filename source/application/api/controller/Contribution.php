<?php

namespace app\api\controller;

use app\common\exception\BaseException;
use app\api\model\Contribution as ContributionModel;

/**
 * 贡献控制器
 * Class Contribution
 * @package app\api\controller
 */
class Contribution extends Controller {
    /**
     * 贡献列表
     * @param $category_id
     * @param $search
     * @param $sortType
     * @param $sortPrice
     * @return array
     * @throws \think\exception\DbException
     */
    public function lists($user_id, $type = 'normal', $page,  $limit = 15, $business_type = '') {
        $model = new ContributionModel;
        $list = $model->getList($user_id, $type, $page, $limit, $business_type);
        return $this->renderSuccess(compact('list'));
    }

    /**
     * 获取贡献详情
     */
    public function detail($user_id, $order_id, $goods_id, $goods_sku_id) {
        if(!$user_id || !$order_id || !$goods_id)
            throw new BaseException(['code' => -1, 'msg' => '缺少必要的参数：user_id']);

        list($detail, $total_lost_contribution) = ContributionModel::detail($user_id, $order_id, $goods_id, $goods_sku_id);

        return $this->renderSuccess(compact('detail', 'total_lost_contribution'));
    }
}
