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
                <div class="item-title item-label">充值金额</div>
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
    recharge:function() {
      qAlert('待开发')
    }
  },
  on: {
    pageInit: function() {

    }
  }
}

</script>
