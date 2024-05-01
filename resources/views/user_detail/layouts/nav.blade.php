<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link :href="route('user-detail.index')" :active="request()->routeIs('user-detail.index')">
                    User Details
                </x-nav-link>
            </div>
        </div>
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link :href="route('user-detail.create')" :active="request()->routeIs('user-detail.create')">
                    User Details Create
                </x-nav-link>
            </div>
        </div>
    </div>
</div>