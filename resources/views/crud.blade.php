<x-main>
    <x-slot name="title">CRUD</x-slot>
    <x-slot name="content">
      
    <section class="pb-20 mt-20">

            <div class="w-11/12 mx-auto mb-5 flex justify-between">
              <label for="my-modal" class="btn btn-accent modal-button text-white">Add New Item</label>
              <form class="flex">
              <input type="text" placeholder="Search" class="input input-bordered w-full max-w-xs" name="search" id="search" />
              <button type="submit" class="btn ml-2">Search</button>
              </form>
            </div>

            @if (session('status'))
            <div class="w-11/12 mx-auto alert mb-5 alert-success">
                <p class="text-center text-white">{{ session('status') }}</p>
            </div>
            @endif
            
            <!-- Pop Up Modal Taro sini -->
            <input type="checkbox" id="my-modal" class="modal-toggle" />
            <div class="modal">
                <form action="/admin/crud" enctype="multipart/form-data" method="post" class="flex flex-col w-[40rem] bg-white rounded-3xl myshadow">
                  @csrf
                  <div class="flex w-11/12 mt-10 mx-auto justify-between mb-5">
                    <div class="w-96 flex flex-col w-fit">
                        <input type="text" id="name" name="name" placeholder="Name" class="rounded-2xl border-0 mb-5 w-full mx-auto bg-[rgba(0,0,0,0)] mt-5" >
                        @error('name') <p class="text-[#e74c3c] ml-3">{{ $message }}</p> @enderror
                        <input type="text" id="description" name="description" placeholder="Description" class="rounded-2xl border-0 mb-5 w-full mx-auto bg-[rgba(0,0,0,0)]" >
                        @error('description') <p class="text-[#e74c3c] ml-3">{{ $message }}</p> @enderror
                        <input type="number" id="price" name="price" placeholder="price" class="rounded-2xl border-0 mb-5 w-full mx-auto bg-[rgba(0,0,0,0)]" >
                        @error('price') <p class="text-[#e74c3c] ml-3">{{ $message }}</p> @enderror
                        <input type="file" id="image" name="image" class="ml-3 w-[6.3rem] mb-5">
                        @error('image') <p class="text-[#e74c3c] ml-3">{{ $message }}</p> @enderror
                        <select class="select w-full max-w-xs" id="category" name="category">
                          <option disabled selected>Choose Category</option>
                          @foreach($crud_category as $select)
                          <option>{{ $select->name }}</option>
                          @endforeach
                        </select>
                        @error('category') <p class="text-[#e74c3c] ml-3">{{ $message }}</p> @enderror
                    </div>
                    <div class="w-96 flex justify-center items-center">
                        <img id="preview-image-before-upload" src="/notfound.webp" alt="preview image" class="h-[10rem]">
                    </div>
                  </div>
                  <button class="w-10/12 btn btn-primary mx-auto mb-5" type="submit">Submit</button>
                  <label for="my-modal" class="btn w-10/12 mx-auto mb-5">Cancel</label>
                </form>                  
            </div>

            <div class="overflow-x-auto z-10 w-11/12 mx-auto myshadow">
                <table class="table w-full">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>description</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach ($crud as $item)
                    <tr>
                        <td>
                          <div class="flex items-center space-x-3">
                            <div class="avatar">
                              <div class="mask mask-squircle w-12 h-12">
                                <img src="/storage/image/{{ $item->image }}" alt="pic" />
                              </div>
                            </div>
                            <div>
                              <div class="font-bold">{{ $item->name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                            <p>{{ $item->description }}</p>
                        </td>
                        <td>{{ number_format($item->price, 2,',','.') }}</td>
                        <td>{{ $item->category->name }}</td>
                        <th class="flex flex-col">
                          <div><form action="/admin/crud/{{ $item->id }}/edit"><button class="btn btn-ghost btn-xs" type="submit"><x-icons.pencil-alt /></button></form></div>
                          <div class="w-fit">
                            <form action="/admin/crud/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-ghost btn-xs text-[#e74c3c]" type="submit"><x-icons.trash/></button>
                            </form>
                          </div>
                        </th>
                      </tr>
                    @endforeach
                    
                </table>
              </div>
    </section>
    </x-slot>
    
</x-main>
