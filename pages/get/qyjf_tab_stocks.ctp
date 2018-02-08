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
                <a href="#tab-1" class="tab-link tab-link-active">处理中</a>
                <a href="#tab-2" class="tab-link">持仓中</a>
			    <a href="#tab-3" class="tab-link">已结算</a>
              </div> 
            </div>
		    <div class="tabs">
			  <div class="tab tab-active" id="tab-1">
		      </div>
              <div class="tab" id="tab-2">      
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
    },


	
	
    initOrderInfo: function() {
      console.log('initOrderInfo');
      const self = this;
	  getOrderInfo().then(function(data) {
        let msg = data['msg'];
        if (msg != null) {
          msg = JSON.parse(msg);
        }
		var len = msg.length;
		//console.log(len);
		var stock;
		var stockName = '';
		var stockType1 = '';
		var stockType2 = '';
		var stockType3 = '';
		
		
		$('.stockName').each(function(i,item){
		console.log("test");
		getStockName(item.text()).then(function(data) {
        let msg = data['msg'];
        if (msg != null) {
          msg = JSON.parse(msg);
        }
        let stockName = msg['name'];
        let name = "";
        console.log("2:"+stockName);
        
      }, function(error) {
        console.log('fali', error);
      })
	  
	  });
		
		for (var i = 0;i<len;i++){
			stock = msg[i];
			console.log(stock);
			status = stock['status'];			
			if(status=='审核中'){
			//console.log('check review');
			stockType1 = stockType1+"<div class='card'>"
			+"<div class='card-content'>"
			+"<table width='100%'>"
			+"<tr><td width='33%' class='stockName'>股票代号</td><td width='67%'>"
			+ stock['fund_code']
			+"</td></tr><tr><td>"
			+"初始价格"
			+"</td><td>"
			+ "待确定"
			+"</td></tr><tr><td>"
			+ "行权价"
			+"</td><td>"
			+ "100%"
			+"</td></tr><tr><td>到期日</td><td>"
			+ stock['deadline'].substring(0,stock['deadline'].indexOf(" "))
			+"</td></tr>"
			+"</tr><tr><td>名义本金</td><td>"
			+ stock['right_price']*stock['count']
			+"</td></tr>"
			+"<tr><td>"
			+"认购金额"
			+"</td><td>"
			+stock['buy_amount']
			+"</td></tr>"
			+"</table>"
			+"</div>"
			+"</div>";	
			}else if(status=='通过'){
			stockType2 = stockType2+"<div class='card'>"
			+"<div class='card-content'>"
			+"<table width='100%'>"
			+"<tr><td width='33%' class='stockName'>股票代号</td><td width='67%'>"
			+ stock['fund_code']
			+"</td></tr><tr><td>"
			+"初始价格"
			+"</td><td>"
			+ "待确定"
			+"</td></tr><tr><td>"
			+ "行权价"
			+"</td><td>"
			+ "100%"
			+"</td></tr><tr><td>到期日</td><td>"
			+ stock['deadline'].substring(0,stock['deadline'].indexOf(" "))
			+"</td></tr>"
			+"</tr><tr><td>名义本金</td><td>"
			+ stock['right_price']*stock['count']
			+"</td></tr>"
			+"<tr><td>"
			+"认购金额"
			+"</td><td>"
			+stock['buy_amount']
			+"</td></tr>"
			+"</table>"
			+"</div>"
			+"<div class='card-footer'><table width='100%'><tr><td width='95%'>"
			+ (stock['op_type']=='申购'? stock['sell_amount']*stock['count']-stock['buy_amount']*stock['count']:
			stock['buy_amount']*stock['count']-stock['sell_amount']*stock['count'])
			+"</td><td style='text-align:right'>"
			+"<button class='button button-fill color-yellow open-confirm'>"
			+"<a href='#' class='item-link list-button' @click='confirmterms'>平仓</a></button>"
			+"</td></tr></table>"
			+"</div>"
			+"</div>";	
			}else if(status=='结算'){
			stockType3 = stockType3+"<div class='card'>"
			+"<div class='card-content'>"
			+"<table width='100%'>"
			+"<tr><td width='33%' class='stockName'>股票代号</td><td width='67%'>"
			+ stock['fund_code']
			+"</td></tr><tr><td>"
			+"初始价格"
			+"</td><td>"
			+ "待确定"
			+"</td></tr><tr><td>"
			+ "行权价"
			+"</td><td>"
			+ "100%"
			+"</td></tr><tr><td>到期日</td><td>"
			+ stock['deadline'].substring(0,stock['deadline'].indexOf(" "))
			+"</td></tr>"
			+"</tr><tr><td>名义本金</td><td>"
			+ stock['right_price']*stock['count']
			+"</td></tr>"
			+"<tr><td>"
			+"认购金额"
			+"</td><td>"
			+stock['buy_amount']
			+"</td></tr>"
			+"</table>"
			+"</div>"
			+"<div class='card-footer'><p>"
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
	    $("#tab-2").append(stockType2);
		$("#tab-3").append(stockType3);
      }, function(error) {
        console.log('fali', error);
      })
	  console.log("end of");
    },
	
		
	initStockName: function() {
      console.log('initStockName');
      const self = this;
	  
	  
	  
      
    },
	recharge:function(e) {
      qAlert('待开发');
	  return;
    }
  },

  on: {
    pageInit: function() {
      // console.log('tabPage');
      
	  console.log('stocks');
	  this.initOrderInfo();
    }
  }
}

</script>
