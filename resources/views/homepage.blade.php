<x-main>
    <x-slot name="title">Homepage</x-slot>
    <x-slot name="content">
        <img src="jumbotron4.jpg" alt="jumbo" class="h-screen mx-auto w-full">

        <section class="w-10/12 mt-20 mx-auto pb-20 flex flex-wrap justify-around">
            @foreach ($mycard as $item)
                    <x-card-container>
                        <x-slot name="image">{{ $item->image }}</x-slot>
                        <x-slot name="name">{{ $item->name }}</x-slot>
                        <x-slot name="description">{{ $item->description }}</x-slot>
                        <x-slot name="price">IDR {{ number_format($item->price, 2, ',','.') }}</x-slot>
                        <x-slot name="id">{{ $item->id }}</x-slot>
                    </x-card-container>
            @endforeach
        </section>

        <section>
            <livewire:counter />
        </section>
    </x-slot>
</x-main>