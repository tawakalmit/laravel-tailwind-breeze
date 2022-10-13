<div>
    <div class="w-[15rem] h-fit bg-white rounded-2xl myshadow mb-10 mx-5">
        <img src="storage/image/{{ $image }}" alt="image" class="p-3 rounded-2xl w-[15rem] h-[15rem]">
        <p class="text-2xl font-bold text-center">{{ $name }}</p>
        <p class="p-3">{{ $description }}</p>
        <p class="p-3 text-center">{{ $price }}</p>
        <div class="w-full flex justify-center pb-5">
            <form action="buy/{{ $id }}">
            <button class="btn btn-accent text-white w-[10rem] mx-auto">Buy</button>
            </form>
        </div>
    </div>
</div>