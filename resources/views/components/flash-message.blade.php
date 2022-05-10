@if (session()->has('message'))
    <div x-data="{ show: true }" x-init='setTimeout(()=> show = false, 2000)' x-show="show"
        class="fixed top-0 left-1/2 transform bg-laravel text-white px-24 py-3 transform -translate-x-1/2">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endIf
