<div class="min-h-screen flex flex-row sm:justify-around items-center pt-6 sm:pt-0 bg-white-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-red-600 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>