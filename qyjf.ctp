<!DOCTYPE html>
<!-- saved from url=(0053)http://framework7.taobao.org/examples/tab-bar/#view-2 -->
<html class="pixel-ratio-2 retina android android-6 android-6-0 watch-active-state">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>权盈金服</title>
  <!-- Path to Framework7 Library CSS-->
  <link rel="stylesheet" href="/css/qyjf/framework7.ios.min.css">
  <link rel="stylesheet" href="/css/qyjf/framework7.ios.colors.min.css">
  <link rel="stylesheet" href="/css/qyjf/framework7.css">
  <!-- Path to your custom app styles-->
  <link rel="stylesheet" href="/css/qyjf/my-app.css">
</head>

<body>
  <div id="app" class1="theme-white">
    <div class="panel panel-left panel-cover">
      <div class="view panel-view"></div>
    </div>
    <div class="views">
      <div class="login-screen">
        <div class="view view-init" data-url="/login">
        </div>
      </div>
      <div class="view view-main" data-name="main">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center">权盈金服</div>
          </div>
        </div>
        <div class="toolbar tabbar tabbar-labels">
          <div class="toolbar-inner">
            <a href="/tabPage" id="tabBtn1" class="tab-link"> <i class="icon tabbar-demo-icon-3"></i><span class="tabbar-label">个人</span></a>
            <a href="/tradeIndex" id="tabBtn2" class="tab-link"> <i class="icon tabbar-demo-icon-1"></i><span class="tabbar-label">交易</span></a>
            <a href="/StockIndex" id="tabBtn3" class="tab-link"> <i class="icon tabbar-demo-icon-2"></i><span class="tabbar-label">持仓</span></a>
            <a href="/AccountIndex" id="tabBtn4" class="tab-link"> <i class="icon tabbar-demo-icon-4"></i><span class="tabbar-label">账户</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="popup">
      <div class="view popup-view"></div>
    </div>
  </div>
  <!-- Path to Framework7 Library JS-->
  <script type="text/javascript" src="/js/qyjf/framework7.js"></script>
  <script type="text/javascript" src="/js/qyjf/jquery.min.js"></script>
  <script type="text/javascript" src="/js/qyjf/lodash.min.js"></script>
  <script type="text/javascript" src="/js/qyjf/common.js"></script>
  <script>
  // Initialize your app
  var app = new Framework7({
    root: '#app',
    theme: "ios",
    view: {
      iosDynamicNavbar: false,
    },
    routes: [{
        path: '/tabPage',
        componentUrl: '/pages/get/qyjf_tab_index',
      },
      {
        path: '/tradeIndex',
        componentUrl: '/pages/get/qyjf_tab_trade',
      },
      {
        path: '/StockIndex',
        componentUrl: '/pages/get/qyjf_tab_stocks',
      },
      {
        path: '/AccountIndex',
        componentUrl: '/pages/get/qyjf_tab_account',
      },
      {
        path: '/checkLogin',
        componentUrl: '/pages/get/qyjf_check_login',
      },
      {
        path: '/login',
        componentUrl: '/pages/get/qyjf_login',
      },
      {
        path: '/recharge',
        componentUrl: '/pages/get/qyjf_recharge',
      },
      {
        path: '/reflect',
        componentUrl: '/pages/get/qyjf_reflect',
      },
      {
        path: '/firstLogin',
        componentUrl: '/pages/get/qyjf_first_login',
      },
      {
        path: '/fistAddInfo',
        componentUrl: '/pages/get/qyjf_first_add_person_info',
      },
      {
        path: '/addBankInfo',
        componentUrl: '/pages/get/qyjf_add_bankinfo',
      },
      {
        path: '/investDoc',
        componentUrl: '/pages/get/qyjf_invest_doc',
      }
    ],
  });

  // Export selectors engine
  var $$ = Dom7;

  $$('.view-main').hide();
  var mainView = app.views.create('.view-main');
  isLogin()
    .then(getLoginTimes)
    .then(function(data) {
      var status = data['status'];
      var msg = data['msg'];
      console.log('===getLoginTimes===', data);
      var times = _.parseInt(msg, 10);
      if (times < 1) {
        // mainView.router.navigate('/tabPage');
        mainView.router.navigate('/firstLogin');
      } else {
        mainView.router.navigate('/tabPage');
      }
    }, function() {
      // mainView.router.navigate('/tabPage');
      app.loginScreen.open('.login-screen');
    })
  setTimeout(function() {
    $$('.view-main').show();
  }, 1000);

  </script>
</body>

</html>
