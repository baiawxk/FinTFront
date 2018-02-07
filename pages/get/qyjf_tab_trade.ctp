<template>
  <div data-page="index" class="page">
    <!-- /End of Top Navbar-->
    <div class="page-content">
      <!-- Top Navbar-->
      <div class="navbar">
            <div class="navbar-inner">
              <div class="center title">交易</div>
            </div>
          </div>
          <div style="width: 100%;height: 100%;">

<!--Trade  Daniel-->
<!--Trade  Daniel-->

            <!--<iframe src="http://tools.fintgroup.com/" frameborder="0" width="100%" height="100%"></iframe>-->






            <div class="block">
                <div class="searchbar-backdrop"></div>
                <form class="searchbar">
                  <div class="searchbar-inner">
                    <div class="searchbar-input-wrap">
                      <input type="search" placeholder="如0001.SZ，平安银行">
                      <i class="searchbar-icon"></i>
                      <span class="input-clear-button"></span>
                    </div>
                    <span class="searchbar-disable-button">Cancel</span>
                  </div>
                </form>
              </div>




             <div class="card data-table">

                <table>

                  <thead>
                    <tr>
                      <th class="label-cell">股票名称</th>
                      <th class="numeric-cell">行权价</th>
                      <th class="numeric-cell">期限</th>
                      <th class="numeric-cell">期权类型</th>
                      <th class="numeric-cell">有效期</th>
                    </tr>
                  </thead>


                  <tbody>
                    <tr>
                      <td class="label-cell">浦发银行（600000）</td>
                      <td class="numeric-cell">100%</td>
                      <td class="numeric-cell">1周</td>
                      <td class="numeric-cell">认购</td>
                      <td class="numeric-cell">2018-06-01</td>
                    </tr>


                  </tbody>
                </table>
            </div>

  <div> <br>
  </div>  



  <!-- purchase scroll bar-->
  <!-- purchase scroll bar-->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 15px;
    border-radius: 5px;
    background: #FFFFFF;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #FFFFFF;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #FFFFFF;
    cursor: pointer;
}
</style>
</head>

<body>


 <div class="block">

<div class="block-title">购买金额:</div>
<div class="list simple-list">
  <ul>
    <li>
 
      <div class="item-cell flex-shrink-3">
        <!-- range slider, enable labels -->
        <div class="range-slider range-slider-init color-orange" data-label="true">
          <input type="range" min="500" max="50000" step="100" value="500">
        </div>
      </div>
    
    </li>
  </ul>
</div>


</div>


</body>
</html>



  <!-- purchase scroll bar end-->
  <!-- purchase scroll bar end-->


           <div class="block">

                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"><a href="#"  class="col button button-fill" @click="confirmterms"> &nbsp &nbsp 购买 &nbsp &nbsp </a></div>
                    <div class="col-sm-3"><a href="#"  class="col button button-fill" @click="login2"> 收益计算</a></div>

                    <div class="col-sm-3"> </div>
                  </div>
          </div>



          <div class="block">

                    <div class="col-sm-3"></div>
                    
                    <div class="col-sm-3"><a class="link popover-open" href="#" data-popover=".popover-about">实例说明及交易须知</a></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>


    <div class="popover popover-about">
    <div class="popover-inner">
      <div class="block">
        <p>实例说明及交易须知</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac diam ac quam euismod porta vel a nunc. Quisque sodales scelerisque est, at porta justo cursus ac.</p>
      </div>
    </div>
  </div>
  
          </div>



 <div class="card data-table" style="display: none;" id="ratetable">

            <table>

                <thead>
                  <tr>
                    <th class="label-cell">到期日涨跌幅</th>
                    <th class="numeric-cell">盈亏</th>
                    <th class="numeric-cell">盈亏%</th>
                  
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td class="label-cell">-10%</td>
                    <td class="numeric-cell">-500</td>
                    <td class="numeric-cell">-100%</td>

                  </tr>
                  <tr>
                    <td class="label-cell">+10%</td>
                    <td class="numeric-cell">750</td>
                    <td class="numeric-cell">+150%</td>
                 
                  </tr>
     
                </tbody>
              </table>

 </div>



<!--Trade  Daniel-->
<!--Trade  Daniel-->





          </div>
      ...
    </div>
  </div>
</template>
<script>
return {
  methods: {
    confirmterms: function() {
      qAlert("请确认");
      return;
    },
    initPersonInfo: function() {
      console.log('initPersonInfo');
      const self = this;
      getPersonInfo().then(function(data) {
        let msg = data['msg'];
        if (msg != null) {
          msg = JSON.parse(msg);
        }
        let amount = msg['amount'];
        let name = "";
        if (amount != null) {

        }
        let user_info = msg['user_info'];
        if (user_info != null) {
          name = user_info['name'];
          if (name != null) {
            self.$el.find('#userName').text(name);
          }
        }
        return;
        const logs = data['logs'];
        let lastStr = "";
        self.$el.find('#totalBal').text(count_a);
        if (logs != null && logs.length > 0) {
          const last = logs[0];
          lastStr = `最近登陆：${last.ip} ${last.msg}`;
        }
        self.$el.find('#lastLogin').text(lastStr);
        console.log('done', name, user, count_a, logs, lastStr);
      }, function(error) {
        console.log('fali', error);
      })
    }
  },
  on: {
    pageInit: function() {
      // console.log('tabPage');
      // this.initPersonInfo();
    }
  }
}

</script>
