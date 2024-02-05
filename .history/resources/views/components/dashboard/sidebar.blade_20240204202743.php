<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <x-dashboard.nav-menu
                :active="request()->routeIs('dashboard')"
                navLink="/dashboard"
                navTitle="Dashboard"
            />

            <x-dashboard.nav-menu
                :active="request()->routeIs('sender.index')"
                navLink="/senders"
                navTitle="Senders"
            />

            <x-dashboard.nav-menu
                :active="request()->routeIs('receiver.index')"
                navLink="/receivers"
                navTitle="Receivers"
            />

            <x-dashboard.nav-menu
                :active="request()->routeIs('item.index')"
                navLink="/items"
                navTitle="Items"
            />
        </ul>
    </div>
</div>
