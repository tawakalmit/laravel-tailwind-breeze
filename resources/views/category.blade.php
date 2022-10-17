<x-main>
    <x-slot name="title">Category</x-slot>
    <x-slot name="content">
        <div class="">
            <br><br><br>
            @foreach($category_name as $category)
            <h1 class="text-center text-3xl font-bold">Category : {{ $category->name }}</h1>
            @endforeach
            
            <section class="w-10/12 flex mx-auto mt-10">
                @foreach ($desired_category as $item)
                    <x-card-container>
                        <x-slot name="image">{{ $item->image }}</x-slot>
                        <x-slot name="name">{{ $item->name }}</x-slot>
                        <x-slot name="category_url">{{ $item->category->id }}</x-slot>
                        <x-slot name="category">{{ $item->category->name }}</x-slot>
                        <x-slot name="description">{{ $item->description }}</x-slot>
                        <x-slot name="price">IDR {{ number_format($item->price, 2, ',','.') }}</x-slot>
                        <x-slot name="id">{{ $item->id }}</x-slot>
                    </x-card-container>
                @endforeach
            </section>
        </div>
    </x-slot>
</x-main>