<template>
  <div class="page no-toolbar1 " data-name="first_login">
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
    <div class="page-content">
      <div class="block">
        <div class="text-align-left">
          当前可用余额：<span id="userName">--</span>
        </div>
      </div>
      <div class="list">
        <ul>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">开户姓名</div>
              <div class="item-input-wrap">
                <input type="text" name="name" id="name" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">银行名称</div>
              <div class="item-input-wrap">
                <input type="text" name="bankName" id="bankName" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">支行名称</div>
              <div class="item-input-wrap">
                <input type="text" name="branchName" id="branchName" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
          <li class="item-content item-input">
            <div class="item-inner">
              <div class="item-title item-label">银行卡号</div>
              <div class="item-input-wrap">
                <input type="text" name="bankNo" id="bankNo" placeholder="">
                <span class="input-clear-button"></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="list">
        <ul>
          <li>
            <a href="#" class="item-link list-button" @click="confirm">确认修改并提交</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
return {
  methods: {
    confirm: function() {
      const self = this;
      let name = self.$el.find('#name').val();
      let bankName = self.$el.find('#bankName').val();
      let branchName = self.$el.find('#branchName').val();
      let bankNo = self.$el.find('#bankNo').val();
      if ($.trim(name) === "") {
        qAlert('请输入开户姓名');
        return;
      }
      if ($.trim(bankName) === "") {
        qAlert('请输入银行名称');
        return;
      }
      if ($.trim(branchName) === "") {
        qAlert('请输入支行名称');
        return;
      }
      if ($.trim(bankNo) === "") {
        qAlert('请输入银行卡号');
        return;
      }
      qAlert('添加成功').on('close', function() {
        mainView.router.navigate('/AccountIndex');
      })
    }
  },
  on: {

  }
}

</script>
