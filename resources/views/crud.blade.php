<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="w-10/12 flex justify-between mt-20 mx-auto">
        <form action="" class="flex flex-col w-[20rem] bg-white rounded-3xl">
            <input type="text" id="name" name="name" placeholder="Name" class="rounded-2xl border-0 mb-5 w-10/12 mx-auto bg-[rgba(0,0,0,0)] mt-5" >
            <input type="text" id="name" name="name" placeholder="Description" class="rounded-2xl border-0 mb-5 w-10/12 mx-auto bg-[rgba(0,0,0,0)]" >
            <button class="btn btn-primary w-10/12 mx-auto mb-5" type="submit">Submit</button>
        </form>
    </section>

    
</x-app-layout>
