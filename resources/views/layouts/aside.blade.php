<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                        <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                        <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                        <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                    </defs>
                    @foreach ($appSetting as $row )
                    <img src="{{ asset('images/settings/'.$row->logo ?? asset('images/mohamad.jpg')) }}" width="90" rel="icon" type="image/x-icon">
                    @endforeach
                </svg>
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>  --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('user.home')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('System Settings')
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">System Settings</div>
            </a>

            <ul class="menu-sub">



                <li class="menu-item">
                    <a href="{{ route('setting.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Settings</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('email.setting.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Email Settings</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Without navbar">SEO</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Container">Api Integrations</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Fluid">Front Api</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Fluid">IOS Api</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Blank">Android Api</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @endif
        <!-- Users -->
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('Users')
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Users</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('role.index') }}" class="menu-link">
                        <div data-i18n="Account">All Role</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.all') }}" class="menu-link">
                        <div data-i18n="Without navbar">Users List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="Settings.html" class="menu-link">
                        <div data-i18n="Without menu">Department</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Container">PayRoll</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Fluid">Kpis</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Fluid">Staticts</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @endif
        <!-- Misc -->

        <li class="menu-header small text-uppercase"><span class="menu-header-text">َQueues</span></li>
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('Sales & Reservations')

        <li class="menu-item">
            <a href="{{route('user.sales')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Sales & Reservations</div>

            </a>
        </li>
        @endcan
        @endif

        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('operations')
        <li class="menu-item">
            <a href="{{ route('user.operation') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Documentation">Operations</div>
            </a>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('EVGM & PL')

        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Documentation">EVGM & PL</div>
            </a>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('EVGM & PL')

        <li class="menu-item">
            <a href="{{ route('user.profile.ticket.all') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Documentation">View All Ticket</div>
            </a>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('Users')


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Customers info</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('customer.customers') }}" class="menu-link">
                        <div data-i18n="Account">All Customer</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Notifications">All Orders</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Connections">Contacts</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('My Account')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Progrees Work</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Profile</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('customer.customers') }}" class="menu-link">
                        <div data-i18n="Account">My Salary</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Notifications">Kpis</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.ticket') }}" class="menu-link">
                        <div data-i18n="Connections">My Ticket</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @endif
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Reports</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('user.checkPrice') }}" class="menu-link">
                        <div data-i18n="Account">Success Booking</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Notifications">Employees Report</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.email') }}" class="menu-link">
                        <div data-i18n="Connections">Earnings Report</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.ticket') }}" class="menu-link">
                        <div data-i18n="Connections">Total Revenue</div>
                    </a>
                </li>
            </ul>
        </li>
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('portLines')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">port & Air lines</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Ports</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('user.checkPrice') }}" class="menu-link">
                        <div data-i18n="Account">Check Price</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Notifications">Add Ports Contact</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.email') }}" class="menu-link">
                        <div data-i18n="Connections">Send Mail To Port Line</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.ticket') }}" class="menu-link">
                        <div data-i18n="Connections">InBoxs</div>
                    </a>
                </li>
            </ul>
        </li>
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('portLines')
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Air Lines</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Account">Check Price</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Notifications">Add Air Lines Contact</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.ticket') }}" class="menu-link">
                        <div data-i18n="Connections">Send Mail To Air Line</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('user.profile.ticket') }}" class="menu-link">
                        <div data-i18n="Connections">InBoxs</div>
                    </a>
                </li>
            </ul>
            @endcan
            @endif
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('Invoices')


        <li class="menu-header small text-uppercase"><span class="menu-header-text">Accounting</span></li>

        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Invoices</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Accordion">All Invoces</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Alerts">Paid Invoces</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Badges">Un Paid Invoices</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Buttons">Monthly Report</div>
                    </a>
                </li>

            </ul>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))
        @can('Employees Salary')

        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Employees Salary</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Add Salary</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Text Divider">Monthly Report</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @endif
        @if(auth()->user()->assignRole(Auth::user()->role))

        @can('DATA CENTER')

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Center</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Rates</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('customer.excel_file') }}" class="menu-link">
                        <div data-i18n="Basic Inputs">Upload Data</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Input groups">Change Price</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Horizontal Form">Inland km Price</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Bullk</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Upload</div>
                    </a>
                </li>

            </ul>
        </li>
        @endcan
        @endif

    </ul>
</aside>
