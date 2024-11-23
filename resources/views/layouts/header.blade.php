<header class="nav sticky overflow-hidden top-0 z-10 shadow-md">
    <nav class="bg-slate-100">
        <div class="nav-menu container py-2 flex justify-between items-center">
            <div class="menu-item">
                <a href="/">
                    <x-svg-brand-logo title="{{config('app.name')}}" class="w-12 h-12" />
                </a>
            </div>
            <div class="quick-options-wrapper flex gap-8">
                <div class="menu-item">
                    <x-svg-outline.search title="Search" class="w-7 h-7" />
                </div>
                <div class="menu-item">
                    <x-svg-outline.code title="Code Playground" class="w-7 h-7" />
                </div>
                <div class="menu-item">
                    <x-svg-outline.academic-cap title="Quiz" class="w-7 h-7" />
                </div>
                <div class="menu-item">
                    <x-svg-outline.cart title="Your Cart" class="w-7 h-7" />
                </div>
                <div class="menu-item">
                    <x-svg-outline.moon title="Dark Mode" class="w-7 h-7" />
                </div>
                <div class="menu-item">
                    <x-svg-outline.user title="Your Profile" class="w-7 h-7" />
                </div>
            </div>
        </div>
    </nav>
    <nav>
        <div class="nav-submenu container flex py-4 gap-20 bg-white">
            <div class="submenu-item">
                Bestsellers
            </div>
            <div class="submenu-item">
                Bestsellers
            </div>
            <div class="submenu-item">
                Bestsellers
            </div>
            <div class="submenu-item">
                Bestsellers
            </div>
        </div>
    </nav>
</header>