<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{--<link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">--}}
    {{--<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">--}}

    <title>Programa Abrazo</title>

    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="{{URL::to('bower_components/weather-icons/css/weather-icons.min.css')}}" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="{{URL::to('bower_components/metrics-graphics/dist/metricsgraphics.css')}}">
    <!-- c3.js (charts) -->
    <link rel="stylesheet" href="{{URL::to('bower_components/c3js-chart/c3.min.css')}}">




    <!-- uikit -->
    <link rel="stylesheet" href="{{URL::to('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- kendo UI -->
    <link rel="stylesheet" href="{{URL::to('bower_components/kendo-ui-core/styles/kendo.common-material.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('bower_components/kendo-ui-core/styles/kendo.material.min.css')}}"/>

    <!-- flag icons -->
    <link rel="stylesheet" href="{{URL::to('assets/icons/flags/flags.min.css')}}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{URL::to('assets/css/main.min.css')}}" media="all">

</head>
<body class="sidebar_main_open">
<!-- main header -->
<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">
            <!-- main sidebar switch -->
            <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>
            <!-- secondary sidebar switch -->
            {{--<a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">--}}
                {{--<span class="sSwitchIcon"></span>--}}
            {{--</a>--}}
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav user_actions">
                    {{--<li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>--}}


                    <li data-uk-dropdown="{mode:'click'}">
                        <a href="#" class="user_action_image">{{Auth::user()->nombre}} &nbsp;<img class="md-user-image" src="{{URL::to('assets/img/avatars/avatar_11_tn.png')}}" alt=""/></a>
                        <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                            <ul class="uk-nav js-uk-prevent">
                                {{--<li><a href="page_user_profile.html">My profile</a></li>--}}
                                {{--<li><a href="page_settings.html">Settings</a></li>--}}
                                <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_main_search_form">
        <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
        <form class="uk-form">
            <input type="text" class="header_main_search_input" />
            <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
        </form>
    </div>
</header><!-- main header end -->

<!-- main sidebar -->
<aside id="sidebar_main">
    <a href="#" class="uk-close sidebar_main_close_button"></a>
    <div class="sidebar_main_header">
        <div class="sidebar_logo"><a href="{{URL::to('/inicio')}}"><img src="{{URL::to('assets/img/logo.jpg')}}" alt="" height="15" width="71"/></a></div>
        {{--<div class="sidebar_actions">--}}
            {{--<select id="lang_switcher" name="lang_switcher">--}}
                {{--<option value="gb" selected>English</option>--}}
            {{--</select>--}}
        {{--</div>--}}
    </div>
    <div class="menu_section">
        <ul>
            <li class="act_section">
                <a href="{{URL::to('/inicio')}}">
                    <span class="menu_icon uk-icon-th-large"></span>
                    Dashboard
                </a>
            </li>
            {{--<li>--}}
                {{--<a href="page_mailbox.html">--}}
                    {{--<span class="menu_icon uk-icon-envelope-o"></span>--}}
                    {{--Mailbox--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_invoices.html">--}}
                    {{--<span class="menu_icon uk-icon-usd"></span>--}}
                    {{--Invoices--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_snippets.html">--}}
                    {{--<span class="menu_icon uk-icon-code"></span>--}}
                    {{--Snippets--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_user_profile.html">--}}
                    {{--<span class="menu_icon uk-icon-user"></span>--}}
                    {{--User Profile--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-list-alt"></span>--}}
                    {{--Forms--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="forms_regular.html">Regular Elements</a></li>--}}
                    {{--<li><a href="forms_advanced.html">Advanced Elements</a></li>--}}
                    {{--<li><a href="forms_file_upload.html">File Upload</a></li>--}}
                    {{--<li><a href="forms_validation.html">Validation</a></li>--}}
                {{--</ul>--}}
            {{--</li> <li>--}}
                {{--<a href="page_mailbox.html">--}}
                    {{--<span class="menu_icon uk-icon-envelope-o"></span>--}}
                    {{--Mailbox--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_invoices.html">--}}
                    {{--<span class="menu_icon uk-icon-usd"></span>--}}
                    {{--Invoices--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_snippets.html">--}}
                    {{--<span class="menu_icon uk-icon-code"></span>--}}
                    {{--Snippets--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="page_user_profile.html">--}}
                    {{--<span class="menu_icon uk-icon-user"></span>--}}
                    {{--User Profile--}}
                {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="#">
                    <span class="menu_icon uk-icon-list-alt"></span>
                    Formularios
                </a>
                <ul>
                    @if(Auth::user()->tipo_cargo == 2)

                    <li><a href="{{URL::to('/responsable')}}">Responsable</a></li>
                    <li><a href="{{URL::to('/educador')}}">Educador</a></li>
                    @endif
                    <li><a href="{{URL::to('/nino')}}">Niño</a></li>
                        @if(Auth::user()->tipo_cargo == 2)
                    <li><a href="{{URL::to('/listado')}}">Listado Educador</a></li>
                        @endif
                    <li><a href="{{URL::to('/listadonino')}}">Listado Niño</a></li>

                </ul>
            </li>

            <li>
                <a href="#">
                    <span class="menu_icon uk-icon-list-alt"></span>
                    Formularios Educador
                </a>
                <ul>
                    <li><a href="{{URL::to('/fuenteCalle')}}">Fuente Calle</a></li>
                    <li><a href="{{URL::to('/listadoFuenteCalle')}}">Listado Fuente Calle</a></li>
                    <li><a href="{{URL::to('/apoyofamiliar')}}">Apoyo Familiar</a></li>
                    <li><a href="{{URL::to('/listadoApoyoFamiliar')}}">listado Apoyo Familiar</a></li>
                </ul>
            </li>



            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-flask"></span>--}}
                    {{--Kendo UI Widgets--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="kendoui_autocomplete.html">Autocomplete</a></li>--}}
                    {{--<li><a href="kendoui_calendar.html">Calendar</a></li>--}}
                    {{--<li><a href="kendoui_colorpicker.html">ColorPicker</a></li>--}}
                    {{--<li><a href="kendoui_combobox.html">ComboBox</a></li>--}}
                    {{--<li><a href="kendoui_datepicker.html">DatePicker</a></li>--}}
                    {{--<li><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>--}}
                    {{--<li><a href="kendoui_dropdown_list.html">DropDownList</a></li>--}}
                    {{--<li><a href="kendoui_masked_input.html">Masked Input</a></li>--}}
                    {{--<li><a href="kendoui_menu.html">Menu</a></li>--}}
                    {{--<li><a href="kendoui_multiselect.html">MultiSelect</a></li>--}}
                    {{--<li><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>--}}
                    {{--<li><a href="kendoui_panelbar.html">PanelBar</a></li>--}}
                    {{--<li><a href="kendoui_timepicker.html">TimePicker</a></li>--}}
                    {{--<li><a href="kendoui_toolbar.html">Toolbar</a></li>--}}
                    {{--<li><a href="kendoui_window.html">Window</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-newspaper-o"></span>--}}
                    {{--Components--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="components_accordion.html">Accordions</a></li>--}}
                    {{--<li><a href="components_buttons.html">Buttons</a></li>--}}
                    {{--<li><a href="components_cards.html">Cards</a></li>--}}
                    {{--<li><a href="components_common.html">Common</a></li>--}}
                    {{--<li><a href="components_dropdowns.html">Dropdowns</a></li>--}}
                    {{--<li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>--}}
                    {{--<li><a href="components_grid.html">Grid</a></li>--}}
                    {{--<li><a href="components_icons.html">Icons</a></li>--}}
                    {{--<li><a href="components_modal.html">Lightbox/Modal</a></li>--}}
                    {{--<li><a href="components_lists.html">Lists</a></li>--}}
                    {{--<li><a href="components_nestable.html">Nestable</a></li>--}}
                    {{--<li><a href="components_notifications.html">Notifications</a></li>--}}
                    {{--<li><a href="components_preloaders.html">Preloaders</a></li>--}}
                    {{--<li><a href="components_sortable.html">Sortable</a></li>--}}
                    {{--<li><a href="components_tables.html">Tables</a></li>--}}
                    {{--<li><a href="components_tooltips.html">Tooltips</a></li>--}}
                    {{--<li><a href="components_tabs.html">Tabs</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li >--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-shopping-cart"></span>--}}
                    {{--E-commerce--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="ecommerce_product_details.html">Product Details</a></li>--}}
                    {{--<li><a href="ecommerce_product_edit.html">Product Edit</a></li>--}}
                    {{--<li><a href="ecommerce_products_grid.html">Products Grid</a></li>--}}
                    {{--<li><a href="ecommerce_products_list.html">Products List</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li >--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-plug"></span>--}}
                    {{--Plugins--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="plugins_calendar.html">Calendar</a></li>--}}
                    {{--<li><a href="plugins_charts.html">Charts</a></li>--}}
                    {{--<li><a href="plugins_datatables.html">Datatables</a></li>--}}
                    {{--<li><a href="plugins_gantt_chart.html">Gantt Chart</a></li>--}}
                    {{--<li><a href="plugins_google_maps.html">Google Maps</a></li>--}}
                    {{--<li><a href="plugins_vector_maps.html">Vector Maps</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li >--}}
                {{--<a href="#">--}}
                    {{--<span class="menu_icon uk-icon-folder-o"></span>--}}
                    {{--Pages--}}
                {{--</a>--}}
                {{--<ul>--}}
                    {{--<li><a href="page_blank.html">Blank</a></li>--}}
                    {{--<li><a href="page_contact_list.html">Contact List</a></li>--}}
                    {{--<li><a href="error_404.html">Error 404</a></li>--}}
                    {{--<li><a href="error_500.html">Error 500</a></li>--}}
                    {{--<li><a href="page_help.html">Help/Faq</a></li>--}}
                    {{--<li><a href="login.html">Login Page</a></li>--}}
                    {{--<li><a href="page_notes.html"> Notes </a> </li>--}}
                    {{--<li><a href="page_settings.html">Settings</a></li>--}}
                    {{--<li><a href="page_user_edit.html">User edit</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</aside><!-- main sidebar end -->

<div id="page_content">
    <div id="page_content_inner">

        @include('admin.alert.request')
    @include('admin.alert.success')
        @include('admin.alert.error')
   @yield('contenido')




    </div>
</div>

<!-- secondary sidebar -->
<aside id="sidebar_secondary">
    <div class="sidebar_secondary_wrapper">
       
        <h4 class="heading_c uk-margin-bottom">Recent Activity</h4>

        <div class="timeline timeline_small">
            <div class="timeline_item">
                <div class="timeline_icon timeline_icon_success"><i class="material-icons">&#xE85D;</i></div>
                <div class="timeline_date">
                    09 <span>Jul</span>
                </div>
                <div class="timeline_content">Created ticket <a href="#"><strong>#3289</strong></a></div>
            </div>
            <div class="timeline_item">
                <div class="timeline_icon timeline_icon_danger"><i class="material-icons">&#xE5CD;</i></div>
                <div class="timeline_date">
                    15 <span>Jul</span>
                </div>
                <div class="timeline_content">Deleted post <a href="#"><strong>Quia vel impedit sed.</strong></a></div>
            </div>
            <div class="timeline_item">
                <div class="timeline_icon"><i class="material-icons">&#xE410;</i></div>
                <div class="timeline_date">
                    19 <span>Jul</span>
                </div>
                <div class="timeline_content">
                    Added photo
                    <div class="timeline_content_addon">
                        <img src="{{URL::to('assets/img/gallery/Image16.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
            <div class="timeline_item">
                <div class="timeline_icon timeline_icon_primary"><i class="material-icons">&#xE0B9;</i></div>
                <div class="timeline_date">
                    21 <span>Jul</span>
                </div>
                <div class="timeline_content">
                    New comment on post <a href="#"><strong>Voluptatem ratione et magni totam.</strong></a>
                    <div class="timeline_content_addon">
                        <blockquote>
                            Earum cumque suscipit quod cum consectetur dolore cumque adipisci.&hellip;
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="timeline_item">
                <div class="timeline_icon timeline_icon_warning"><i class="material-icons">&#xE7FE;</i></div>
                <div class="timeline_date">
                    29 <span>Jul</span>
                </div>
                <div class="timeline_content">
                    Added to Friends
                    <div class="timeline_content_addon">
                        <ul class="md-list md-list-addon">
                            <li>
                                <div class="md-list-addon-element">
                                    <img class="md-user-image md-list-addon-avatar" src="{{URL::to('assets/img/avatars/avatar_02_tn.png')}}" alt=""/>
                                </div>
                                <div class="md-list-content">
                                    <span class="md-list-heading">Amie Upton</span>
                                    <span class="uk-text-small uk-text-muted">Impedit voluptas esse.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</aside><!-- secondary sidebar end -->

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- inputmask-->
{{--<script src="{{URL::to('bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js')}}"></script>--}}

<!-- momentJS date library -->
<script src="{{URL::to('bower_components/moment/min/moment.min.js')}}"></script>

<!-- common functions -->
<script src="{{URL::to('assets/js/common.min.js')}}"></script>
<!-- uikit functions -->
<script src="{{URL::to('assets/js/uikit_custom.min.js')}}"></script>
<!-- altair common functions/helpers -->
<script src="{{URL::to('assets/js/altair_admin_common.min.js')}}"></script>

<!-- page specific plugins -->
<!-- d3 -->
<script src="{{URL::to('bower_components/d3/d3.min.js')}}"></script>
<!-- metrics graphics (charts) -->
<script src="{{URL::to('bower_components/metrics-graphics/dist/metricsgraphics.min.js')}}"></script>
<!-- c3.js (charts) -->
<script src="{{URL::to('bower_components/c3js-chart/c3.min.js')}}"></script>
<!-- maplace (google maps) -->
<script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyA9z_akDP3uw-0P32z9sBCZmrCbfiS3knc"></script>
<script src="{{URL::to('assets/js/pages/plugins_google_maps.js')}}"></script>
<script src="{{URL::to('bower_components/maplace.js/src/maplace-0.1.3.js')}}"></script>
<!-- peity (small charts) -->
<script src="{{URL::to('bower_components/peity/jquery.peity.min.js')}}"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="{{URL::to('bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
<!-- countUp -->
<script src="{{URL::to('bower_components/countUp.js/countUp.min.js')}}"></script>
<script src="{{URL::to('bower_components/fitvids/jquery.fitvids.js')}}"></script>

<!--  dashbord functions -->
<script src="{{URL::to('assets/js/pages/dashboard.min.js')}}"></script>

<!-- page specific plugins -->
<!-- ionrangeslider -->
<script src="{{URL::to('bower_components/ionrangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!-- htmleditor (codeMirror) -->
<script src="{{URL::to('assets/js/uikit_htmleditor_custom.min.js')}}"></script>
<!-- inputmask-->
<script src="{{URL::to('bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js')}}"></script>

<!--  forms advanced functions -->
<script src="{{URL::to('assets/js/pages/forms_advanced.min.js')}}"></script>
<!-- kendo UI -->
<script src="{{URL::to('assets/js/kendoui.custom.min.js')}}"></script>

<!--  kendoui functions -->
<script src="{{URL::to('assets/js/pages/kendoui.min.js')}}"></script>
@yield('js')
@yield('js2')






<!-- enable hires images -->
<script>
    $(function() {
        altair_helpers.retina_images();
    });
</script>

</body>
</html>