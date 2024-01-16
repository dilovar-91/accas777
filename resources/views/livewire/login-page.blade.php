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

    <div class="flex justify-center items-center h-screen bg-indigo-600">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i>Войти</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Email</label>
                <input type="text" wire:model="email" id="email" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Введите email" />
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Пароль</label>
                <input type="password" wire:model="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Введите пароль" />
            </div>

            <div class="mt-5">
                <button type="submit" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold" wire:click.prevent="login"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Войти</button>
            </div>
        </div>
    </div>



</div>
