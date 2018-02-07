<template>
  <div class="page no-toolbar no-navbar">
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
                <div class="item-title item-label">提现金额</div>
                <div class="item-input-wrap">
                  <input type="number" name="phoneNo" placeholder="">
                  <span class="input-clear-button"></span>
                </div>
              </div>
            </li>
            <li class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">当前银行卡</div>
                <div class="item-input-wrap">
                  <input type="number" name="phoneNo" placeholder="">
                  <span class="input-clear-button"></span>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="list">
          <ul>
          	<li>
              <a href="#" class="item-link list-button" @click="addCard">添加/编辑银行卡</a>
            </li>
            <li>
              <a href="#" class="item-link list-button" @click="reflect">确认金额并提交</a>
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
  	addCard:function() {
      qAlert('待开发')
    },
    reflect:function() {
      qAlert('待开发')
    }
  },
  on: {
    pageInit: function() {

    }
  }
}

</script>
