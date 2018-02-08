<template>
  <div data-page="index" class="page">
    <!-- /End of Top Navbar-->
    <div class="page-content">
	  <div class="navbar">
        <div class="navbar-inner">
          <div class="title" style="margin:0 auto">持仓</div>
        </div>
      </div>
      <div class="toolbar tabbar">
              <div class="toolbar-inner">
                <a href="#tab-1" class="tab-link tab-link-active">已下单</a>
                <a href="#tab-2" class="tab-link">持仓中</a>
			    <a href="#tab-3" class="tab-link">已结算</a>
              </div>
            </div>
		    <div class="tabs">
			  <div class="tab tab-active" id="tab-1">

		      </div>
              <div class="tab" id="tab-2">
                <div class="card">
				  <div class="card-content">
					<table>
					  <tr>
					    <td>标的名称</td>
						<td>权盈金服</td>
				      </tr>
					  <tr>
					    <td>行权价</td>
						<td>100%</td>
				      </tr>
					  <tr>
					    <td>到期日</td>
						<td>2018-01-01</td>
				      </tr>
					  <tr>
					    <td>金额</td>
						<td>500</td>
				      </tr>
                    </table>
				  </div>
				  <div class="card-footer"><p style="color:red;">+666.01</p><p>平仓</p></div>
				</div>
				
			    <div class="card">
				  <div class="card-content">
				    <table>
					  <tr>
					    <td>标的名称</td>
						<td>深发展</td>
				      </tr>
					  <tr>
					    <td>行权价</td>
						<td>100%</td>
				      </tr>
					  <tr>
					    <td>到期日</td>
						<td>2018-03-01</td>
				      </tr>
					  <tr>
					    <td>金额</td>
						<td>2000</td>
				      </tr>
                    </table>
				  </div>
				  <div class="card-footer"><p style="color:green;">-466.01</p><p>平仓</p></div>
				 </div>
              </div>
              <div class="tab" id="tab-3">

              </div>
		    </div>
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
    initOrderInfo: function() {
      console.log('initOrderInfo');
      const self = this;
	  var stockName = '';
	  
	  
	  
	  
	  
	  
      getOrderInfo().then(function(data) {
        let msg = data['msg'];
        if (msg != null) {
          msg = JSON.parse(msg);
        }
		var len = msg.length;
		//console.log(len);
		var stock;
		var stockType1 = '';
		var stockType2 = '';
		var stockType3 = '';
		for (var i = 0;i<len;i++){
			stock = msg[i];
			console.log(stock);
			status = stock['status'];
			
			if(status=='审核中'){
			//console.log('check review');
			stockType1 = stockType1+"<div class='card'>"
			+"<div class='card-content'>"
			+"<table>"
			+"<tr><td>股票名称</td><td>"
			+ stock['fund_code']
			+"</td></tr><tr><td>"
			+ (stock['op_type']=='申购'? '申购价格':'赎回价格')
			+"</td><td>"
			+ (stock['op_type']=='申购'? stock['buy_amount']:stock['sell_amount'])
			+"</td></tr><tr><td>"
			+ (stock['op_type']=='申购'? '申购时间':'赎回时间')
			+"</td><td>"
			+ (stock['op_type']=='申购'? stock['buy_time']:stock['sell_time'])
			+"</td></tr><tr><td>购买数量</td><td>"
			+ stock['count']
			+"</td></tr>"
			+"</table>"
			+"</div>"
			+"</div>";	
			}else if(status=='已结算'){
			stockType3 = stockType3+"<div class='card'>"
			+"<div class='card-content'>"
			+"<table>"
			+"<tr><td>股票名称</td><td>"
			+ stock['fund_code']
			+"</td></tr><tr><td>"
			+ (stock['op_type']=='申购'? '申购价格':'赎回价格')
			+"</td><td>"
			+ (stock['op_type']=='申购'? stock['buy_amount']:stock['sell_amount'])
			+"</td></tr><tr><td>"
			+ (stock['op_type']=='申购'? '申购时间':'赎回时间')
			+"</td><td>"
			+ (stock['op_type']=='申购'? stock['buy_time']:stock['sell_time'])
			+"</td></tr><tr><td>购买数量</td><td>"
			+ stock['count']
			+"</td></tr>"
			+"</table>"
			+"</div>"
			+"<div class='card-footer'><p style='color:red;'>"
			+ (stock['op_type']=='申购'? stock['sell_amount']*stock['count']-stock['buy_amount']*stock['count']:
			stock['buy_amount']*stock['count']-stock['sell_amount']*stock['count'])
			+"</p><p>"
			+"交易号"
			+stock['id']
			+"</p></div>"
			+"</div>";	
			
			
			
			}
			
		}
		$("#tab-1").append(stockType1);
		$("#tab-3").append(stockType3);
        /*let amount = msg['amount'];
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
		
		*/
      }, function(error) {
        console.log('fali', error);
      })
    }
  },
  on: {
    pageInit: function() {
      // console.log('tabPage');
      
	  console.log('stocks');
	  this.initOrderInfo();
	  this.init
    }
  }
}

</script>
