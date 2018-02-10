<template>
  <div class="page no-toolbar " data-name="first_login">
    <div class="page-content">
      <div class="block">
        <div class="text-align-left">
          您好，尊敬的<span id="userName">--</span>
        </div>
      </div>
      <div class="list">
        <ul>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">姓名</div>
              <div class="item-input-wrap">
                <input type="text" name="name" id="name" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">电子邮件</div>
              <div class="item-input-wrap">
                <input type="email" name="email" id="email" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="block">
        <div class="row">
          <button class="col button" @click="reset">重设</button>
          <button class="col button button-fill" @click="confirm">确认</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
return {
  methods: {
    reset: function() {
      const self = this;
      self.$el.find('#name').val('');
      self.$el.find('#email').val('');
    },
    confirm: function() {
      const self = this;
      let name = self.$el.find('#name').val();
      let email= self.$el.find('#email').val();
      if($.trim(name)==="")
      {
        qAlert('请输入姓名');
        return ;
      }
      if($.trim(email)==="")
      {
        qAlert('请输入邮箱');
        return ;  
      }
      mainView.router.navigate('/tabPage');
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
