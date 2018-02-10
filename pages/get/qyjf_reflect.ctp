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
      <div class="list">
        <ul>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">提现金额</div>
              <div class="item-input-wrap">
                <input type="number" name="money" id="money" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">当前银行卡</div>
              <div class="item-input-wrap">
                <input type="number" name="bankNo" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="list">
        <ul>
          <li>
            <a href="/addBankInfo" class="item-link list-button" @click="addCard">添加/编辑银行卡</a>
          </li>
          <li>
            <a href="#" class="item-link list-button" @click="reflect">确认金额并提交</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
return {
  methods: {
    addCard: function() {

    },
    reflect: function() {
      const self = this;
      let money = self.$el.find('#money').val();
      let num = parseInt(money, 10);
      if ($.trim(money) === "") {
        qAlert('请输入提现金额');
        return;
      }
      if (num <= 0) {
        qAlert('请输入合法的数值');
        return;
      } else {
        addCapital(-num).then(function(data) {
          var status = data['status'];
          var msg = data['msg'];
          if (status === true) {
            qAlert('提现成功').on('close', function() {
              mainView.router.navigate('/AccountIndex');
            })
          } else
            qAlert('提现失败:' + msg);
        }, function(data) {
          var status = data['status'];
          var msg = data['msg'];
          qAlert('提现失败:' + msg);
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
