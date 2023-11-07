<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>@yield('title')</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
  </head>

  <body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

      'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                  - Theme helper buttons [data-toggle="theme"],
                                                  - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                  - ..and/or One.layout('dark_mode_[on/off/toggle]')

    SIDEBAR & SIDE OVERLAY

      'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
      'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
      'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
      'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
      'sidebar-dark'                              Dark themed sidebar

      'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
      'side-overlay-o'                            Visible Side Overlay by default

      'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

      'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

      ''                                          Static Header if no class is added
      'page-header-fixed'                         Fixed Header

    HEADER STYLE

      ''                                          Light themed Header
      'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

      ''                                          Full width Main Content if no class is added
      'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
      'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

      'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header border-bottom">
          <!-- User Avatar -->
          <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="{{url('belakang/src/assets/media/avatars/avatar10.jpg')}}" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
          </div>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->
      </aside>
      <!-- END Side Overlay -->

      @include('includes.admin.sidebar')

      @include('includes.admin.header')

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                Dashboard
              </h1>
              <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything looks great.
              </h2>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        @yield('content')
      </main>
      <!-- END Main Container -->

      @include('includes.admin.footer')
    </div>
    <!-- END Page Container -->

    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
  </body>
</html>
