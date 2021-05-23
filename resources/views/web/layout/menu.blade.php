<div class="wrapper">
    <div class="sidebar sidebar-right py-4"><img class="d-table m-auto" src="{{ asset('web/images/logo-white.png') }}" height="50px">
    <nav class="navbar mt-4">
        <ul class="navbar-nav">
            <!-- categories -->
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('categories') }}">
                    <div class="item-title">ကဏ္ဍများ</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('horoscope') }}">
                    <div class="item-title">ဗေဒင်</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('educationvideo') }}">
                    <div class="item-title">ပညာပေးရုပ်သံ</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('braintester') }}">
                    <div class="item-title">ဉာဏ်စမ်း</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('songforkid') }}">
                    <div class="item-title">ကလေးသီချင်းများ</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('games') }}">
                    <div class="item-title">ကစားကြမယ်</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('health') }}">
                    <div class="item-title">ကျန်းမာရေး</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('storyforkid') }}">
                    <div class="item-title">ကလေးပုံပြင်များ</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-close" href="{{ url('faq') }}">
                    <div class="item-title">မေးခွန်း နှင့် အဖြေများ</div>
                </a>
            </li>
        </ul>
    </nav>
    <div class="px-3 mt-4">
        <a class="btn btn-outline-light btn-block text-left" href="{{ url('profile') }}">
            <i class="fas fa-user mr-2"></i><span>ကလေး၏ကိုယ်ပိုင်အချက်အလက်များ</span>
        </a>
    </div>
</div>