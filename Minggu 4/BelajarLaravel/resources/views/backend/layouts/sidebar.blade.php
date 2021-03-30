<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="active">
          <a class="" href="{{ asset('backend/index.html')}}">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Forms</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
          <ul class="sub">
            <li><a class="" href="{{ asset('backend/form_component.html')}}">Form Elements</a></li>
            <li><a class="" href="{{ asset ('backend/form_validation.html')}}">Form Validation</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>UI Fitures</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
          <ul class="sub">
            <li><a class="" href="{{ asset ('backend/general.html')}}">Elements</a></li>
            <li><a class="" href="{{ asset ('backend/buttons.html')}}">Buttons</a></li>
            <li><a class="" href="{{ asset ('backend/grids.html')}}">Grids</a></li>
          </ul>
        </li>
        <li>
          <a class="" href="{{ asset ('backend/widgets.html')}}">
                        <i class="icon_genius"></i>
                        <span>Widgets</span>
                    </a>
        </li>
        <li>
          <a class="" href="{{ asset ('backend/chart-chartjs.html')}}">
                        <i class="icon_piechart"></i>
                        <span>Charts</span>

                    </a>

        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>Tables</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
          <ul class="sub">
            <li><a class="" href="{{ asset ('backend/basic_table.html')}}">Basic Table</a></li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="">
                        <i class="icon_documents_alt"></i>
                        <span>Pages</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
          <ul class="sub">
            <li><a class="" href="{{ asset('backend/profile.html')}}">Profile</a></li>
            <li><a class="" href="{{ asset('backend/login.html')}}"><span>Login Page</span></a></li>
            <li><a class="" href={{  asset('backend/contact.html')}}"><span>Contact Page</span></a></li>
            <li><a class="" href="{{ asset('backend/blank.html')}}">Blank Page</a></li>
            <li><a class="" href="{{ asset('backend/404.html')}}">404 Error</a></li>
          </ul>
        </li>

      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->