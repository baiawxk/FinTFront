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
  <div id="app" class="theme-white">
    <div class="panel panel-left panel-cover">
      <div class="view panel-view"></div>
    </div>
    <div class="views">
      <div class="view view-main" data-name="main" data-url="/tabPage">
      </div>
      <div class="login-screen">
        <!-- Default view-page layout -->
        <div class="view">
          <div class="page">
            <!-- page-content has additional login-screen content -->
            <div class="page-content login-screen-content">
              <div class="login-screen-title">My App</div>
              <!-- Login form -->
              <form>
                <div class="list">
                  <ul>
                    <li class="item-content item-input">
                      <div class="item-inner">
                        <div class="item-title item-label">Username</div>
                        <div class="item-input-wrap">
                          <input type="text" name="username" placeholder="Username">
                          <span class="input-clear-button"></span>
                        </div>
                      </div>
                    </li>
                    <li class="item-content item-input">
                      <div class="item-inner">
                        <div class="item-title item-label">Password</div>
                        <div class="item-input-wrap">
                          <input type="password" name="password" placeholder="Password">
                          <span class="input-clear-button"></span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="list">
                  <ul>
                    <li>
                      <a href="#" class="item-link list-button">Sign In</a>
                    </li>
                  </ul>
                  <div class="block-footer">Some text with login information.</div>
                </div>
              </form>
            </div>
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
    routes: [{
        path: '/tabPage',
        componentUrl: '/pages/get/qyjf_tab_page',
      },
      {
        path: '/checkLogin',
        componentUrl: '/pages/get/qyjf_check_login',
      },
      {
        path: '/login',
        componentUrl: '/pages/get/qyjf_login',
      }
    ],
  });

  // Export selectors engine
  var $$ = Dom7;
  var mainView = app.views.create('.view-main', {
    url: '/checkLogin'
  });


  </script>
</body>

</html>
