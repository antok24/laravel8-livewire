<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed ">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock  navbar-dark gradient-45deg-indigo-light-blue">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a class="brand-logo darken-1" href="/home">
                  <img src="images/logo/materialize-logo.png" alt="materialize logo">
                  <span class="logo-text hide-on-med-and-down">
                    Antrian Apps
                  </span>
                </a>
              </h1>
            </li>
          </ul>
          <div class="header-search-wrapper hide-on-med-and-down">
            <i class="material-icons">search</i>
            <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Cari sesuatu ..."
              data-search="template-list">
            <ul class="search-list collection display-none"></ul>
          </div>
          <ul class="navbar-list right">
            <li class="hide-on-med-and-down">
              <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                <i class="material-icons">settings_overscan</i>
              </a>
            </li>
            <li class="hide-on-large-only">
              <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                <i class="material-icons">search </i>
              </a>
            </li>
            <li>
              <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                data-target="notifications-dropdown">
                <i class="material-icons">notifications_none
                  <small class="notification-badge orange accent-3">5</small>
                </i>
              </a>
            </li>
            <li>
              <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                data-target="profile-dropdown">
                <span class="avatar-status avatar-online">
                  <img src="images/avatar/avatar-7.png" alt="avatar">
                  <i></i>
                </span>
              </a>
            </li>
          </ul>
          <ul class="dropdown-content" id="notifications-dropdown">
            <li>
              <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
            </li>
            <li class="divider"></li>
          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li>
              <a class="grey-text text-darken-1" href="user-profile-page.html">
                <i class="material-icons">person_outline</i>
                Profile
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="app-chat.html">
                <i class="material-icons">chat_bubble_outline</i>
                Chat
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="page-faq.html">
                <i class="material-icons">help_outline</i>
                Help
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="grey-text text-darken-1" href="user-lock-screen.html">
                <i class="material-icons">lock_outline</i>
                Lock
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="material-icons">keyboard_tab</i>
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </div>
        <nav class="display-none search-sm">
          <div class="nav-wrapper">
            <form id="navbarForm">
              <div class="input-field search-input-sm">
                <input class="search-box-sm" type="search" required="" placeholder='Explore Materialize' id="search"
                  data-search="template-list">
                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i
                  class="material-icons search-sm-close">close</i>
                <ul class="search-list collection search-list-sm display-none"></ul>
              </div>
            </form>
          </div>
        </nav>
      </nav>
      <!-- BEGIN: Horizontal nav start-->
      <nav class="white hide-on-med-and-down" id="horizontal-nav">
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
            <li>
              <a class="dropdown-menu" href="javascript:void(0)" data-target="DashboardDropdown">
                <i class="material-icons">dashboard</i>
                <span>
                  <span class="dropdown-title" data-i18n="DaftarAntrian">Daftar Antrian</span>
                  <i class="material-icons right">keyboard_arrow_down</i>
                </span>
              </a>
              <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown">
                <li class="" data-menu="">
                  <a href="/kategori" data-turbolinks-eval="true" class="" data-target=""><span data-i18n="Modern">Kategori</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="/home" data-turbolinks-eval="true" class="" data-target="">
                    <span data-i18n="eCommerce">Home</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="analytics.html" class="" data-target="">
                    <span data-i18n="Analytics">Analytics</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-menu" href="javascript:void(0)" data-target="TemplatesDropdown">
                <i class="material-icons">cast</i>
                <span>
                  <span class="dropdown-title" data-i18n="Templates">Pemanggilan</span>
                  <i class="material-icons right">keyboard_arrow_down</i>
                </span>
              </a>
              <ul class="dropdown-content dropdown-horizontal-list" id="TemplatesDropdown">
                <li class="" data-menu="">
                  <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/" class=""
                  data-target="">
                    <span data-i18n="Modern Menu">Modernes Menü</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-2/" class=""
                  data-target="">
                    <span data-i18n="Navbar Dark">Navbar Dark</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/" class="" data-target="">
                    <span data-i18n="Gradient Menu">Verlaufsmenü</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-4/" class="" data-target="">
                    <span data-i18n="Dark Menu">Dunkles Menü</span>
                  </a>
                </li>
                <li class="" data-menu="">
                  <a href="index.html" class="" data-target="">
                    <span data-i18n="Horizontal Menu">Horizontales Menü</span>
                  </a>
                </li>
              </ul>
            </ul>
        </div>
      </nav>
      <!-- END: Horizontal nav start-->
    </div>  
  </header>