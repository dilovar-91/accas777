<div>
    <div class="w-full">
        <div class="bg-white py-6 sm:py-8 lg:py-12" >
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8 overflow-y-auto "  style="height: 32vh;">
                <div class="grid grid-cols-7 gap-2 ">
                    @foreach ($brands as $mark)
                        <div wire:key="{{ $mark->id }}" wire:click="loadData({{ $mark->id }})" class=" cursor-pointer flex h-12 items-center justify-center rounded-lg p-3 sm:h-11 text-white" style="background-color: @if($brand_id === $mark->id) #dc2626    @else #10b981  @endif;">
                            {{ $mark->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="border border-gray-300 my-4 mb-0"></div>
            @if($models)
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8 overflow-y-auto mt-2" style="height: 45vh;">
                <div class="grid grid-cols-7 gap-2">
                    @foreach ($models as $model)
                        <div wire:key="{{ $model->id }}" class="hover:shadow w-1/10 rounded-lg p-2 text-center" style="background-color: #7dd3fc;">
                            {{ $model->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
