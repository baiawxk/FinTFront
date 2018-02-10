<template>
  <div class="page no-toolbar1 no-navbar">
    <!-- page-content has additional login-screen content -->
    <div class="page-content">
      <div class="navbar">
        <div class="navbar-inner sliding">
          <div class="left">
            <a href="#" class="link back">
              <i class="icon icon-back"></i>
              <span class="ios-only">返回</span>
            </a>
          </div>
        </div>
      </div>
      <form>
        <div class="list">
          <ul>
            <li class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">充值金额</div>
                <div class="item-input-wrap">
                  <input type="number" name="money" id="money" placeholder="">
                  <span class="input-clear-button"></span>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="list">
          <ul>
            <li>
              <a href="#" class="item-link list-button" @click="recharge">确认金额并提交</a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
return {
  methods: {
    recharge: function() {
      const self = this;
      let money = self.$el.find('#money').val();
      let num = parseInt(money, 10);
      if($.trim(money)==="" )
      {
        qAlert('请输入充值金额');
        return;
      }
      if (num <= 0) {
        qAlert('请输入合法的数值');
        return;
      } else {
        addCapital(num).then(function(data) {
          var status = data['status'];
          var msg = data['msg'];
          if (status === true) {
            qAlert('充值成功').on('close', function() {
              mainView.router.navigate('/AccountIndex');
            })
          } else
            qAlert('充值失败:' + msg);
        }, function(data) {
          var status = data['status'];
          var msg = data['msg'];
          qAlert('充值失败');
        })
      }
    }
  },
  on: {
    pageInit: function() {

    }
  }
}

</script>
