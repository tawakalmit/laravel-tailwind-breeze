<x-main>
  <x-slot name="title">Admin Login</x-slot>
  <x-slot name="content">

    <section class="w-10/12 flex justify-center mt-20 mb-20 mx-auto">
        <form action="/admin/crud/{{ $crud->id }}" enctype="multipart/form-data" method="post" class="flex flex-col w-full bg-white rounded-3xl myshadow">
            @csrf
            @method('put')
            <div class="flex w-11/12 mt-10 mx-auto justify-between mb-5">
                <div class="w-full flex flex-col w-fit mt-5">
                    <label for="name" class="font-bold text-xl">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" class="rounded-2xl border-0 mb-5 w-[40rem] mx-auto bg-[rgba(0,0,0,0)]" value="{{ $crud->name }}" >
                    <label for="description" class="font-bold text-xl">Description</label>
                    <input type="text" id="description" name="description" placeholder="Description" class="rounded-2xl border-0 mb-5 w-full mx-auto bg-[rgba(0,0,0,0)]" value="{{ $crud->description }}" >
                    <input type="number" id="price" name="price" placeholder="0" class="rounded-2xl border-0 mb-5 w-full mx-auto bg-[rgba(0,0,0,0)]" value="{{ $crud->price }}" >
                    <input type="file" id="image" name="image" class="ml-3 w-[6.3rem] mb-5">
                    <select class="select w-full max-w-xs" id="category" name="category" value="{{ $crud->category->name }}">
                        <option disabled selected>{{ $crud->category->name }}</option>
                        @foreach($crud_category as $select)
                        <option>{{ $select->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="w-[40rem] flex justify-around">
                  <div class="w-fit flex justify-center items-center">
                    <img src="/storage/image/{{ $crud->image }}" alt="pic" class="h-[10rem]">
                  </div>
                  <div class="w-fit flex justify-center items-center">
                    <img id="preview-image-before-upload" src="/notfound.webp" alt="preview image" class="h-[10rem]">
                  </div>
                </div>
            </div>
            <button class="w-10/12 btn btn-primary mx-auto mb-5" type="submit">Save Changes</button>
        </form>
    </section>

  </x-slot>
    
</x-main>
