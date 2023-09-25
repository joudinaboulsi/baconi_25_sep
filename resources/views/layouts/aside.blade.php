<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('homePage') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="{{ asset('front/logodark.png') }}" alt="" width="150">
        </span>
       
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ (\Request::route()->getName() == 'seoCms') ? 'active' : '' }} || {{ (\Request::route()->getName() == 'home') ? 'active' : '' }} ">
        <a href="{{ route('seoCms') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Seo</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-item {{ (\Request::route()->getName() == 'settingsCms') ? 'active' : '' }}">
        <a href="{{ route('settingsCms') }}" class="menu-link ">
          <i class="bx bx-cog me-2"></i>
          <div data-i18n="Layouts">Settings</div>
        </a>

   
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <li class="menu-item {{ (\Request::route()->getName() == 'homeCms') ? 'active' : '' }} || {{ (\Request::route()->getName() == 'sliderCms') ? 'active' : '' }} || {{ (\Request::route()->getName() == 'companyLogo') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
  
      
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Home Page</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('homeCms') }}" class="menu-link">
              <div data-i18n="Without menu">Content Home Page</div>
            </a>
          </li>

          <li class="menu-item ">
            <a href="{{ route('sliderCms') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Home Sliders</div>
            </a>
           
          </li>

          <li class="menu-item ">
            <a href="{{ route('companyLogo') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Companies Logo</div>
            </a>
           
          </li>
        </ul>
      </li>
      
    <li class="menu-item {{ (\Request::route()->getName() == 'aboutCms') ? 'active' : '' }} || {{ (\Request::route()->getName() == 'teamCms') ? 'active' : '' }} ||
      {{ (\Request::route()->getName() == 'AboutSlider') ? 'active' : '' }}  ||{{ (\Request::route()->getName() == 'principles') ? 'active' : '' }} || {{ (\Request::route()->getName() == 'membership') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Misc">About Page</div> </a>
       
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('aboutCms') }}" class="menu-link">
                <div data-i18n="Without menu">Content About Page</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('teamCms') }}" class="menu-link">
                <div data-i18n="Without menu">Team Section</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('AboutSlider') }}" class="menu-link">
                <div data-i18n="Without menu">Sliders Section</div>
              </a>
            </li>
            
          <li class="menu-item">
              <a href="{{ route('principles') }}" class="menu-link">
                <div data-i18n="Without menu">Principles Section</div>
              </a>
            </li>

          <li class="menu-item">
              <a href="{{ route('membership') }}" class="menu-link">
                <div data-i18n="Without menu">Memberships Section</div>
              </a>
            </li>
          </ul>
       
      </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Misc">Service Page</div> </a>
       
          <ul class="menu-sub">
          <li class="menu-item {{ (\Request::route()->getName() == 'serviceCms') ? 'active' : '' }}">
              <a href="{{ route('serviceCms') }}" class="menu-link">
                <div data-i18n="Without menu">Content Service Page</div>
              </a>
            </li>
          <li class="menu-item {{ (\Request::route()->getName() == 'tabOne') ? 'active' : '' }}">
              <a href="{{ route('tabOne') }}" class="menu-link">
                <div data-i18n="Without menu">TabOne Section</div>
              </a>
            </li>

          
          </ul>
       
      </li>
    <li class="menu-item {{ (\Request::route()->getName() == 'companyCms') ? 'active' : '' }} ||  {{ (\Request::route()->getName() == 'sliderCompany') ? 'active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">Companies</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('companyCms') }}" class="menu-link">
              <div data-i18n="Without menu">Content Company  Page</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('sliderCompany') }}" class="menu-link">
              <div data-i18n="Without menu"> Company SLiders Section</div>
            </a>
          </li>
        </ul>
      </li>
    <li class="menu-item {{ (\Request::route()->getName() == 'blogCms') ? 'active' : '' }}">
        <a href="{{ route('blogCms') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
          <div data-i18n="Misc">Blog</div>
        </a>
        
      </li>
      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
      <!-- Cards -->
    <li class="menu-item {{ (\Request::route()->getName() == 'contactCms') ? 'active' : '' }}">
        <a href="{{ route('contactCms') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-collection"></i>
          <div data-i18n="Basic">Contact</div>
        </a>
      </li>
      <!-- User interface -->
    <li class="menu-item">
        <a href="{{ route('logout') }}" class="menu-link"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
         <i class="bx bx-power-off me-2"></i>
          <div data-i18n="bx bx-power-off me-2">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </li>

  

     
    </ul>
  </aside>