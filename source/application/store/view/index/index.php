<div class="page-home row-content am-cf">

    <!-- 商城统计 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">商城统计</div>
                </div>
                <div class="widget-body am-cf">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__blue am-cf">
                            <div class="card-header">商品总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['widget-card']['goods_total'] ?></div>
                                <div class="card-description">当前商品总数量</div>
                                <span class="card-icon iconfont icon-goods"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__red am-cf">
                            <div class="card-header">用户总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['widget-card']['user_total'] ?></div>
                                <div class="card-description">当前用户总数量</div>
                                <span class="card-icon iconfont icon-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__violet am-cf">
                            <div class="card-header">订单总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['widget-card']['order_total'] ?></div>
                                <div class="card-description">已付款订单总数量(含拼团订单)</div>
                                <span class="card-icon iconfont icon-order"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__primary am-cf">
                            <div class="card-header">评价总量</div>
                            <div class="card-body">
                                <div class="card-value"><?= $data['widget-card']['comment_total'] ?></div>
                                <div class="card-description">订单评价总数量</div>
                                <span class="card-icon iconfont icon-haoping2"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 实时概况 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">实时概况</div>
                </div>
                <div class="widget-body am-cf">
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-y-center">
                            <div class="outline-left">
                                <img src="data:image/png;base64,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"
                                     alt="">
                            </div>
                            <div class="outline-right dis-flex flex-dir-column flex-x-between">
                                <div style="color: rgb(102, 102, 102); font-size: 1.3rem;">销售额(元)</div>
                                <div style="color: rgb(51, 51, 51); font-size: 2.4rem;"><?= $data['widget-outline']['order_total_price']['tday'] ?></div>
                                <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                    昨日：<?= $data['widget-outline']['order_total_price']['ytd'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-dir-column flex-x-between">
                            <div style="color: rgb(102, 102, 102); font-size: 1.2rem;">支付订单数</div>
                            <div style="color: rgb(51, 51, 51); font-size: 2.4rem;"><?= $data['widget-outline']['order_total']['tday'] ?></div>
                            <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                昨日：<?= $data['widget-outline']['order_total']['ytd'] ?></div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-y-center">
                            <div class="outline-left">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAACMCAMAAACd62ExAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAzUExURUdwTPn///D4/+/2//T6//D3//H3//D3//D3//H5/2aq/7DT/5HC/3az/8Ld/9zs/53I/+kzVBAAAAAKdFJOUwAOY/8hooXE4kIJnP2wAAADmUlEQVR42u2ca3fCIAyGLeFqW+j//7XTOWedbUkgYHaO784+6p6FJNxCTqdyDVpZY5zz3gN475wzVoXh1F9DsO7CsCnvjNJ9USAn3wdpUHmUu5xtTBQM0ORUM1carIcCmdACRlsolWMH0gZqxAtUCcMMpIBDhifMggcmKYZwMsCn6hHjM81NtorGArdcuQdpB/zyQchA1Q2YglZygwS3qeEx0FJevy/bVPMMDlqLEmDtaSj2MQCCeCz0ES6+etHgeBT0k8nPU9BT6v0h/qQgIahW4TVIcZy8+2joL/XebPwiLWeovrPPXlT5t+DsRRciqmIcqYqxLLpCFmY8F2lOJYvnrB/P50LNBd6cNc50LtZITz4548Tv/3NakHqCX8jmQRkn6wV3peUxUpffiZybUZ6DpIm/ppnHFDE4f82TD6vrt6MMM/66/BR/BjmPY6nTAw5nZZgl/fpcHgcG4tyJwfljGAqOIq6Pszgr913Sc0ROxJnLV+PE+eG+LwkCgbN25gCVOFujRMSxtL3MEc70iOvN9InB8aSxOsIZdwxDwnmsMzBjdYQzreK6HMeQ9p0HOIcJG43jSUvk5jj32BpABo4iuE4HHEM5smiP4ym7q/Y4P84DUnAUYSc8t8exeE++pt6xMY6hHL6lBI1xHM+RDhcO8BxbsOFo5HTeCSeg47wLjsLOWN1w9AfnIA+GD85BWv7gfHBKXVl/cP7PJCFsCpW2wBC2/EIuTuM8xx6LU4s2wdxj6Y7Mgx22fYaw7Tt32vYJ2xRLOzIQdqAi7LhJ2GGcsKNKaQe5QQSO4boE4MEJXFckLDiedoF08DdZcCztem3a/1oWHE27fLxd6y9bVR9nBhxHLWs6LnpIu6u2gqtZTCZMMxknLbfPUC+ucalnoeE87tQjyZHRE0WK47Lxs4WTDm5rM45MWKIiI+thmPOSSBmZoSruL864d6eONk6VeZ5wVsUGmFHaMU6NeVY4T7Uy6C/QRaVoOZx7XFMMsxVWleWvN5zXWhmkdspgi8sYrziFhnleWfAUea6nD5phXmYrDm9O1LjO+nFdgXC8GSaWfFY1KJ9Ol6kiFX3S/KPicmml98IeJkh7tiHtUYu0Jz/SHkRJey4m7TGdsKeG0h5iinumKu0Rr7QnztIegEt7Hi+ueQBLC4yVaRiaYYhqPCGuLYe4piXSWrqIa3gjrh2QuGZJ5FZS3nZpbiWo0Za8NmQbTdqAq0nbF7i46IS8tSAEAAAAAElFTkSuQmCC"
                                     alt="">
                            </div>
                            <div class="outline-right dis-flex flex-dir-column flex-x-between">
                                <div style="color: rgb(102, 102, 102); font-size: 1.3rem;">新增用户数</div>
                                <div style="color: rgb(51, 51, 51); font-size: 2.4rem;"><?= $data['widget-outline']['new_user_total']['tday'] ?></div>
                                <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                    昨日：<?= $data['widget-outline']['new_user_total']['ytd'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-dir-column flex-x-between">
                            <div style="color: rgb(102, 102, 102); font-size: 1.2rem;">下单用户数</div>
                            <div style="color: rgb(51, 51, 51); font-size: 2.4rem;"><?= $data['widget-outline']['order_user_total']['tday'] ?></div>
                            <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                昨日：<?= $data['widget-outline']['order_user_total']['ytd'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 近七日交易走势 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div style="width: 40%;">
                    <div class="am-alert am-alert-danger" id="my-alert" style="display: none">
                        <p>开始日期应小于结束日期！</p>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-6">
                            <button type="button" class="am-btn am-btn-primary am-btn-default am-margin-right" id="my-start">开始日期</button><span id="my-startDate"></span>
                        </div>
                        <div class="am-u-sm-6">
                            <button type="button" class="am-btn am-btn-primary am-btn-default am-margin-right" id="my-end">结束日期</button><span id="my-endDate"></span>
                        </div>
                    </div>
                </div>
                <div class="widget-head">
                    <div class="widget-title">近<span id="dateNumber" style="color: red; font-size: 1.5em;"></span>日交易走势</div>
                </div>
                <div class="widget-body am-cf">
                    <div id="echarts-trade" class="widget-echarts"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="assets/common/js/echarts.min.js"></script>
<script src="assets/common/js/echarts-walden.js"></script>
<script type="text/javascript">
    /**
     * 近七日交易走势
     * @type {HTMLElement}
     */
    const KnowledgeOPs = echarts.init(document.getElementById('echarts-trade', 'walden'));
    function echartsDisplay(data){
        var option = {
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['成交量', '成交额']
            },
            toolbox: {
                show: true,
                showTitle: false,
                feature: {
                    mark: {show: true},
                    magicType: {show: true, type: ['line', 'bar']}
                }
            },
            calculable: true,
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: data.date,    // 日期下标
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: '成交额',
                    type: 'line',
                    data: data.orderTotalPrice, //当天订单成交额
                    itemStyle: {
                        normal: {
                            color: 'rgb(58, 177, 225)',
                        },
                    },
                },
                {
                    name: '成交量',
                    type: 'line',
                    data: data.orderTotal, //当天订单成交量
                    itemStyle: {
                        normal: {
                            color: 'rgb(103, 230, 194)',
                        },
                    },
                }
            ]
        };
        KnowledgeOPs.setOption(option, true);
    }
    /**
     *  选择日期
     */
    $(function() {
        var date = new Date();
        var endDate = Date.parse(date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate()).valueOf();
        var startDate = endDate - 60 * 60 * 24 * 30 * 1000;
        var subtract = Math.ceil((endDate - startDate) / ( 60 * 60 * 24 * 1000)) + 1;
        getData(startDate, endDate);
        document.getElementById('my-startDate').innerText = unixTimeToDateTime(startDate);
        document.getElementById('my-endDate').innerText = unixTimeToDateTime(endDate);
        document.getElementById('dateNumber').innerText = subtract;
        var $alert = $('#my-alert');
        // 开始时间变动
        $('#my-start').datepicker().
        on('changeDate.datepicker.amui', function(event) {
            if (event.date.valueOf() > endDate.valueOf()) {
                $alert.find('p').text('开始日期应小于结束日期！').end().show();
            } else {
                $alert.hide();
                startDate = event.date.valueOf();
                subtract = Math.ceil((endDate - startDate) / ( 60 * 60 * 24 * 1000)) + 1;
                document.getElementById('my-startDate').innerText = unixTimeToDateTime(startDate);
                document.getElementById('dateNumber').innerText = subtract;
                $(this).datepicker('close');
                getData(startDate, endDate);
            }
        });
        // 结束时间变动
        $('#my-end').datepicker().
        on('changeDate.datepicker.amui', function(event) {
            if (event.date.valueOf() < startDate.valueOf()) {
                $alert.find('p').text('结束日期应大于开始日期！').end().show();
            } else {
                $alert.hide();
                endDate = event.date.valueOf();
                subtract = Math.ceil((endDate - startDate) / ( 60 * 60 * 24 * 1000)) + 1;
                document.getElementById('my-endDate').innerText = unixTimeToDateTime(endDate);
                document.getElementById('dateNumber').innerText = subtract;
                $(this).datepicker('close');
                getData(startDate, endDate);
            }
        });
    });

    /**
     *  转换时间戳
     */
    function unixTimeToDateTime(unixTime){
        var checkHour = function (m) {
            return m<10?'0'+m:m
        };
        var time = new Date(unixTime);
        var y = time.getFullYear();
        var m = time.getMonth()+1;
        var d = time.getDate();
        return y+'-'+checkHour(m)+'-'+checkHour(d);
    }

    /**
     * 获取对应时期的历史数据
     * @param startTime
     * @param endTime
     */
    function getData(startTime, endTime){
        var url = 'index.php?s=/store/index/echarts_data' + '&startTime=' + startTime + '&endTime=' + endTime;
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            dataType: "json",
            success: function(res){
                console.log(res);
                if (res.code == 0){
                    echartsDisplay(res.data)
                }
            }
        });
    }
</script>
