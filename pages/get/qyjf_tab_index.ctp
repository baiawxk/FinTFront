<template>
  <div data-page="index" class="page">
    <div class="tabs-swipeable-wrap">
      <div class="tabs">
        <div class="page-content tab tab-active" id="page1">
          <div class="block">
            <div class="text-align-left">
              您好，尊敬的<span id="userName">--</span>
            </div>
          </div>
          <div class="block block-strong inset">
            <br>
            <br>
            <div class="text-align-center">
              最近登录：<span id="lastLogin">--</span>
            </div>
            <br>
            <br>
          </div>
          <div class="block block-strong inset">
            <br>
            <br>
            <div class="text-align-center">
              参考总市值：<span id="totalBal">--</span>
            </div>
            <br>
            <br>
          </div>
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
      console.log('tabPage');
      this.initPersonInfo();
    }
  }
}

</script>
