<div>
    <div class="w-full">
        <div class="bg-white py-6 sm:py-8 lg:py-12" >
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8 overflow-y-auto "  style="height: 32vh;">
                <div class="grid grid-cols-7 gap-4 ">
                    @foreach ($brands as $mark)
                        <div wire:key="{{ $mark->id }}" wire:click="loadData({{ $mark->id }})" class=" cursor-pointer flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-green-400 sm:h-32 @if($brand_id === $mark->id) bg-primary-500 @else bg-gray-100 @endif">
                            {{ $mark->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="border border-gray-300 my-4 mb-0"></div>
            @if($models)
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8 overflow-y-auto mt-2" style="height: 45vh;">
                <div class="flex flex-wrap gap-2 justify-center">
                    @foreach ($models as $model)
                        <div wire:key="{{ $model->id }}" class="hover:shadow w-1/10 rounded-lg bg-green p-2 bg-primary-500 ">
                            {{ $model->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
