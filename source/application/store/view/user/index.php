<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<style>
    .el-dropdown-link {
        cursor: pointer;
        color: #409EFF;
    }
    .el-icon-arrow-down {
        font-size: 12px;
    }
    .el-input{
        width: 230px;
    }
    .el-table{
        font-size: 10px;
    }
</style>

<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">用户列表</div>
                </div>
                <div class="widget-body am-fr">
                    <div id="app" style="padding: 10px;">
                        <div style="margin: 20px 0 20px 0;">

                            <el-select v-model="selectProvinceId"  placeholder="省份" @change="changeProvince">
                                <el-option v-for="item in provinces" :label="item.name" :value="item.id"> </el-option>
                            </el-select>

                            <el-select v-model="selectCityId" placeholder="城市">
                                <el-option v-for="item in currentCitys" :label="item.name" :value="item.id"> </el-option>
                            </el-select>

                            <el-select v-model="slecetGender">
                                <el-option label="性别" value="-1"> </el-option>
                                <el-option label="男" value="1"> </el-option>
                                <el-option label="女" value="2"> </el-option>
                                <el-option label="未知" value="0"> </el-option>
                            </el-select>

                            <el-input placeholder="昵称/手机/收货人/收货电话" v-model="searchValue" clearable></el-input>

                            <el-button type="primary" @click="searchParamsChange" icon="el-icon-search"></el-button>
                        </div>

                        <template>
                            <el-table :data="tableData" >

                                <el-table-column label="用户ID"  align="center" width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.user_id }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="微信头像" align="center"width="80">
                                    <template slot-scope="scope">
                                        <img :src="scope.row.avatarUrl" style="width: 70px; height: 70px;">
                                    </template>
                                </el-table-column>

                                <el-table-column label="微信昵称"  align="center"width="80">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.nickName }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="累计消费"  align="center"width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.money }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="累计贡献"  align="center"width="90">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.totalContribution}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="当前贡献"  align="center"width="90">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.contribution }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="累计分红"  align="center"width="100">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.bonus}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="当前分红"  align="center"width="100">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.totalDividend}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="累计提现"  align="center"width="70">
                                    <template slot-scope="scope">
                                        <el-button type="primary" size="mini" @click="jumpToWithdrawPage(scope.row.user_id)" round plain>{{ scope.row.withdraw }}</el-button>
                                    </template>
                                </el-table-column>

                                <el-table-column label="昵称"  align="center"width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.nickName}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="收货人"  align="center"width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.name}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="性别"  align="center"width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.gender}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="微信手机"  align="center" width="100">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.mobile}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="收货电话"  align="center" width="100">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.phone}}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="微信地址"  align="center" width="70">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.province}}{{ scope.row.city}}{{ scope.row.region}}</span>
                                    </template>
                                </el-table-column>

                                <!-- API未开放，暂时隐藏
                                <el-table-column label="定位地址" align="center" min-width="230">
                                        <template slot-scope="scope">
                                        <span>{{ scope.row.location_province }}{{ scope.row.location_city }}{{ scope.row.location_district }}{{ scope.row.location_street }}</span>
                                    </template>
                                </el-table-column>
                                -->

                                <el-table-column label="收货地址"  align="center" min-width="230">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.receiveProvince}}{{ scope.row.receiveCity}}{{ scope.row.receiveRegion}}{{ scope.row.detail}}</span>
                                    </template>
                                </el-table-column>


                                <el-table-column label="注册时间" align="center" width="150">
                                    <template slot-scope="scope">
                                        <span>{{ scope.row.create_time }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="最后登录" align="center" width="150">
                                    <template slot-scope="scope">
                                        <span>{{ unixTimeToDateTime(scope.row.last_login_time) }}</span>
                                    </template>
                                </el-table-column>

                                <el-table-column label="操作" align="center" width="120">
                                    <template slot-scope="scope">
                                        <div style="margin-bottom: 5px;">
                                            <el-button type="danger" @click="openRechargeWindow(scope.row)" icon="el-icon-delete" size="mini" plain>充值</el-button>
                                        </div>
                                        <div style="margin-bottom: 5px;">
                                            <el-dropdown trigger="click" @command="locationTo">
                                                <el-button type="primary" size="mini" plain>
                                                    更多<i class="el-icon-arrow-down el-icon--right"></i>
                                                </el-button>
                                                <el-dropdown-menu slot="dropdown">
                                                    <el-dropdown-item :command="'index.php?s=/store/order/all_list/user_id/' + scope.row.user_id">用户订单</el-dropdown-item>
                                                    <el-dropdown-item :command="'index.php?s=/store/user.recharge/order/user_id/' + scope.row.user_id">充值记录</el-dropdown-item>
                                                    <el-dropdown-item :command="'index.php?s=/store/user.balance/log/user_id/' + scope.row.user_id">余额明细</el-dropdown-item>
                                                </el-dropdown-menu>
                                            </el-dropdown>
                                        </div>
                                        <div style="margin-bottom: 5px;">
                                            <el-button type="danger" @click="changeUserDeleteStatus(scope.$index)" icon="el-icon-delete" size="mini" v-if="scope.row.is_delete==0">
                                                删除
                                            </el-button>
                                            <el-button type="info" @click="changeUserDeleteStatus(scope.$index)" icon="el-icon-delete" size="mini" v-if="scope.row.is_delete==1">
                                                恢复
                                            </el-button>
                                            <!-- 删除用户对话框 -->
                                        </div>
                                    </template>
                                </el-table-column>

                            </el-table>
                            <div class="block">
                                <el-pagination @size-change="sizeChange" @current-change="currentChange" :current-page="currentPage" :page-sizes="[10, 50, 250, 1250]" :page-size="limit" layout="total, sizes, prev, pager, next, jumper" :total="dataTotal">
                                </el-pagination>
                            </div>
                        </template>

                        <!-- 后台充值窗口 -->
                        <template>
                            <el-dialog title="用户充值" :visible.sync="displayRechargeEdit" width="40%" center>
                                <el-form ref="form" ref="form" label-width="120px">
                                    <el-form-item label="当前余额">
                                        <span>{{ rechargeFormCurrentMoney }}</span>
                                    </el-form-item>

                                    <!-- inc dec final -->
                                    <el-form-item label="充值方式">
                                        <el-radio-group v-model="rechargeFormType">
                                            <el-radio :label="0">增加</el-radio>
                                            <el-radio :label="1">减少</el-radio>
                                            <el-radio :label="2">最终金额</el-radio>
                                        </el-radio-group>
                                    </el-form-item>

                                    <el-form-item label="变更金额">
                                        <el-input type="number" placeholder="请输入要变更的金额" v-model="rechargeFormRechargeMoney"></el-input>
                                    </el-form-item>

                                    <el-form-item label="管理员备注">
                                        <el-input type="textarea" :rows="2" placeholder="请输入管理员备注" v-model="rechargeFormRemark">
                                        </el-input>
                                    </el-form-item>

                                    <el-form-item>
                                        <el-button type="primary" @click="recharge">确 定</el-button>
                                        <el-button @click="displayRechargeEdit=false">取 消</el-button>
                                    </el-form-item>
                                </el-form>
                            </el-dialog>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.min.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script>
    // Vue异步信息
    var Main = {
        data() {
            return {
                selectProvinceId: null, // 已选择省份ID
                selectCityId: null,     // 已选择城市ID
                slecetGender: '-1',   // 已选择性别
                searchValue: '',      // 搜索的内容

                provinces: [],          //下拉菜单所有省份
                currentCitys: [],       //已选省份的城市
                citys: [],              //下拉菜单所有城市

                dataTotal: 0,           // 总条数
                tableData: [],          // 当页用户信息

                currentPage: 1,     // 当前页
                limit: 10,          // 每页条数

                displayRechargeEdit: false, // 充值窗口开关

                rechargeFormCurrentMoney: 0,     //当前余额
                rechargeFormType: 0,         //充值方式
                rechargeFormRechargeMoney: 0,    //充值额度
                rechargeFormRemark: '',          //管理员备注
                rechargeUserId: '',              //充值的用户ID

                rechargeType: ['inc', 'dec', 'final'], //充值方式信息
            }
        },
        methods: {
            // 每页条数改变
            sizeChange(val) {
                this.limit = val;
                this.recordGet();
            },
            // 当前页改变
            currentChange(val) {
                this.currentPage = val;
                this.recordGet();
            },
            // 搜索按钮事件
            searchParamsChange(){
                this.currentPage = 1;
                this.recordGet();
            },
            /* 下拉菜单省份改变 */
            changeProvince(val){
                this.currentCitys = [];
                this.selectCityId = null;
                var key = 0;
                for(var item in this.citys){
                    if (this.citys[item].pid == val) {
                        Vue.set(this.currentCitys, key, this.citys[item]);
                        key++;
                    }
                }
                console.log(this.currentCitys);
            },
            // 时间戳转换成时间
            unixTimeToDateTime (unixTime) {
                var checkHour = function (m) {
                    return m<10?'0'+m:m
                };
                var time = new Date(unixTime * 1000);
                var y = time.getFullYear();
                var m = time.getMonth()+1;
                var d = time.getDate();
                var h = time.getHours();
                var mm = time.getMinutes();
                var s = time.getSeconds();
                return y+'-'+checkHour(m)+'-'+checkHour(d)+' '+checkHour(h)+':'+checkHour(mm)+':'+checkHour(s);
            },
            // 表格下拉菜单跳转
            locationTo(command){
                window.open(command, '_blank');
            },
            // 跳转到当前用户提现清单
            jumpToWithdrawPage(userId){
                window.open('index.php?s=/store/user.withdraw/withdrawfinishpage&user_id='+ userId, '_self');
            },
            /* 获取所有地区并分类 */
            regionTreeGet(){
                var url = 'index.php?s=/store/region/get_cache_all';
                axios.get(url).then((res) => {
                    if ( res.data.code == 0){
                        var regionData = res.data.data;
                        var key1 = 0;
                        var key2 = 0;
                        for(var item in regionData){
                            switch (regionData[item].level) {
                                case 1: Vue.set(this.provinces, key1, regionData[item]); key1++; break;
                                case 2: Vue.set(this.citys, key2, regionData[item]); key2++; break;
                            }
                        }
                    }
                }).catch((error) => {
                    this.$message({
                        type: 'error',
                        message: error.msg
                    });
                });
            },
            // 获取用户列表
            recordGet(){
                if (this.selectProvinceId == null){
                    this.selectProvinceId = '';
                }
                if (this.selectCityId == null){
                    this.selectCityId = '';
                }
                var url = 'index.php?s=/store/user/get_user_list' + '&provinceId=' + this.selectProvinceId + '&cityId=' + this.selectCityId + '&gender=' + this.slecetGender + '&keywords=' + this.searchValue + '&limit=' + this.limit + '&page=' + this.currentPage;
                axios.get(url).then((res) => {
                    if ( res.data.code == 0){
                        this.dataTotal = res.data.data.total;
                        this.tableData = res.data.data.data;
                    } else {
                        this.$message({
                            type: 'error',
                            message: res.data.msg
                        });
                    }
                }).catch((error) => {
                    this.$message({
                        type: 'error',
                        message: error.msg
                    });
                });
            },
            // 软删除当前用户
            changeUserDeleteStatus(index){
                var oprate = '';
                var url = '';
                if (this.tableData[index].is_delete == 0){
                    oprate = '删除';
                    url = 'index.php?s=/store/user/delete' + '&user_id=' + this.tableData[index].user_id;
                } else{
                    oprate = '恢复';
                    url = 'index.php?s=/store/user/recovery' + '&user_id=' + this.tableData[index].user_id;
                }
                    this.$confirm('此操作将'+ oprate +'该用户, 是否继续?', '提示', {
                        confirmButtonText: '确定',
                        cancelButtonText: '取消',
                        type: 'warning'
                    }).then(() => {
                        axios.get(url).then((res) => {
                            if ( res.data.code == 0){
                                this.$message({
                                    type: 'success',
                                    message: res.data.msg,
                                });
                                this.recordGet();
                            } else {
                                this.$message({
                                    type: 'error',
                                    message: res.data.msg
                                });
                            }
                        }).catch((error) => {
                            this.$message({
                                type: 'error',
                                message: error.msg
                            });
                        });
                    }).catch(() => {
                        this.$message({
                            type: 'info',
                            message: '已' + oprate + '删除'
                        });
                    });
            },
            // 打开充值窗口
            openRechargeWindow(item){
                this.rechargeFormCurrentMoney = item.balance; //当前余额
                this.rechargeUserId = item.user_id;           //充值的用户ID
                this.displayRechargeEdit = true;
            },
            // 充值
            recharge(){
                var row = {
                    mode: this.rechargeType[this.rechargeFormType],
                    money: this.rechargeFormRechargeMoney,
                    remark: this.rechargeFormRemark,
                };
                var url = 'index.php?s=/store/user/recharged' + '&user_id=' + this.rechargeUserId;
                axios.put(url, row).then((res) =>{
                    if ( res.data.code == 0){
                        this.displayRechargeEdit = false;
                        this.recordGet();
                    } else {
                        this.$message({
                            type: 'error',
                            message: res.data.msg
                        });
                        this.displayAddressEdit = false;
                    }
                }).catch((error) =>{
                    this.$message({
                        type: 'error',
                        message: error.msg
                    });
                });
            }
        },
        mounted: function () {
            this.regionTreeGet();
            this.recordGet();
        },
    };
    var Ctor = Vue.extend(Main);
    new Ctor().$mount('#app');
</script>
