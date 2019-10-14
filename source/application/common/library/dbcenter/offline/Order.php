<?php
/**
 * 数据中心订单接口(内部)
 *
 * @package app\api\controller\dbcenter
 * @author Jerry <tanping@dedeshijie.com>
 * @version 1.0
 * @created 2019-03-01
 */

namespace app\common\library\dbcenter\offline;

use app\api\model\offline\Order as OrderModel;
use app\api\model\Setting as SettingModel;
use app\common\library\dbcenter\Util;
use think\Config;

class Order {
    /**
     * 上报订单
     * @return boolean
     * @param integer $order_id 订单ID
     * @param integer $usser_id 用户ID
     * @throws \app\common\exception\BaseException
     * @throws \think\exception\DbException
     */
    public function report($order_id, $user_id) {
        $setting   = SettingModel::getItem('newbie');
        $orderInfo = OrderModel::getUserOrderDetail($order_id, $user_id);
        if($orderInfo) {
            $goodsItems = [
                [
                    'goodsId' => 0,
                    'goodsName' => '线下订单',
                    'goodsNum' => 1,
                    'goodsSkuId' => 0,
                    'goodsPrice' => intval(strval((floatval($orderInfo['total_price'])) * 100)),
                    'contributionRate' => 0.1,
                    'goodsType' => 20,
                    'canRefund' => 40,
                ]
            ];

            $attach  = 'offline|' . $order_id . '|' . $user_id;
            $isFirst = (new OrderModel)->isFirstOrder($user_id);
            if($isFirst)
                $attach .= '|isOpen:' . $setting['first_order']['is_open'] . '|firstOrderContributionRate:' . ($setting['first_order']['referee']/100);

            $data = [
                'merchantCode'      => Config::get('dbcenter.merchantCode'),
                'userCode'          => $orderInfo['user_id'],
                'orderId'           => $orderInfo['order_no'],
                'orderAmount'       => intval(strval((floatval($orderInfo['total_price'])) * 100)),
                'callbackUrl'       => Config::get('dbcenter.callbackUrl'),
                'goodsItems'        => $goodsItems,
                'attach'            => $attach,
                'isFirst'           => (int)$isFirst,
                'orderType'         => 40 //线下订单
            ];
            $sign = (new Util)->makePaySign($data);
            $data['sign'] = $sign;
            write_log(print_r($data, true));
            Util::request(Config::get('dbcenter.apiUrl') . 'dc/order/trade/report', $data);
        } else {
            return $this->renderError('订单不存在');
        }
    }
}
