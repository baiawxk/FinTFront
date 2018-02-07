<template>
  <div data-page="index" class="page">
    <!-- /End of Top Navbar-->
    <div class="page-content">
      <!-- Top Navbar-->
      <p>Other content goes here trade</p>
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
