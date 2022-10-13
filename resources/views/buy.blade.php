<x-main>
    <x-slot name="title">Sofaque | Buy</x-slot>
    <x-slot name="content">
        <section class="w-full">
            <div class="w-10/12 mx-auto pt-32 flex flex-col md:flex-row justify-around">
                <img src="/storage/image/{{ $item->image }}" alt="image" class="w-[30rem] h-[30rem] rounded-2xl myshadow">
                <div class="w-96 flex flex-col justify-center mt-10 md:mt-0">
                    <p class="text-2xl text-center font-bold mb-10">{{ $item->name }}</p>
                    <p>{{ $item->description }}</p>
                    <div class="mx-auto mt-20 w-[15rem] bg-[#1abc9c] h-[3rem] flex items-center justify-center rounded-full">
                        <p class="text-xl text-white">IDR {{ number_format($item->price, 3, '.', '.') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-main>