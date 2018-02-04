<template>
  <div class="page" data-name="tabPage">
    <div class="tabs-swipeable-wrap">
      <div class="tabs">
        <div class="page-content tab tab-active" id="page1">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="center title">账户</div>
            </div>
          </div>
          <div class="content-block-title"><span>Hi,</span><span id="userName">--</span></div>
          <div class="content-block">
            <p><span>参考总市值：</span><span id="totalBal">--</span></p>
            <p id="lastLogin"></p>
          </div>
        </div>
        <div class="page-content tab" id="page2">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="center title">询价</div>
            </div>
          </div>
          <div style="width: 100%;height: 100%;">
            <iframe src="http://tools.fintgroup.com/" frameborder="0" width="100%" height="100%"></iframe>
          </div>
        </div>
        <div class="page-content tab" id="page3">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="center title">持仓</div>
            </div>
          </div>
          <div style="width: 100%;height: 100%;">
            <p>3</p>
          </div>
        </div>
      </div>
    </div>
    <div class="toolbar tabbar tabbar-labels">
      <div class="toolbar-inner">
        <a href="#page1" class="tab-link tab-link-active"> <i class="icon tabbar-demo-icon-3"></i><span class="tabbar-label">账户</span></a>
        <a href="#page2" class="tab-link"> <i class="icon tabbar-demo-icon-1"></i><span class="tabbar-label">询价</span></a>
        <a href="#page3" class="tab-link"> <i class="icon tabbar-demo-icon-2"></i><span class="tabbar-label">持仓</span></a>
      </div>
    </div>
  </div>
</template>
<script>
return {
  methods: {
    initPersonInfo: function() {
      console.log('initPersonInfo');
      const self = this;
      getPersonInfo().then(function(data) {
        const user = data['user'];
        const count_a = data['count_a'];
        const name = user['name'];
        const logs = data['logs'];
        let lastStr = "";
        self.$el.find('#userName').text(name);
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
