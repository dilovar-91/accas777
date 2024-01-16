<div>

    <div class="grid grid-cols-1">
        <div class="col-span-12">
            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-4">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="bg-red-500 text-white p-4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <livewire:brand-page />





</div>
