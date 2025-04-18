<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>As-Sa'ad Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/bundle.js') }}" defer></script>
</head>

<body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
      x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
               $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">

    <div x-show="loaded"
         x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
         class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
    </div>

    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        @unless (isset($hideSidebar) && $hideSidebar)
            <x-sidebar />
        @endunless

        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            {{-- Header --}}
            @unless (isset($hideHeader) && $hideHeader)
                <x-header />
            @endunless

            {{ $slot }}
        </div>
    </div>

</body>
</html>
