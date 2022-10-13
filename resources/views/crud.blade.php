<x-app-layout>
    <x-slot name="header">
       
    </x-slot>
    @if (session('status'))
    <div class="alert alert-success">
        <p class="text-center">{{ session('status') }}</p>
    </div>
    @endif

    <section class="w-10/12 flex justify-center mt-20 mb-20 mx-auto">
        <form action="" enctype="multipart/form-data" method="post" class="flex flex-col w-[40rem] bg-white rounded-3xl myshadow">
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
                </div>
                <div class="w-96 flex justify-center items-center">
                    <img id="preview-image-before-upload" src="notfound.webp" alt="preview image" class="h-[10rem]">
                </div>
            </div>
            <button class="w-10/12 btn btn-primary mx-auto mb-5" type="submit">Submit</button>
        </form>
    </section>

    <section class="pb-20">
        <div>
            <div class="overflow-x-auto w-11/12 mx-auto myshadow">
                <table class="table w-full">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>description</th>
                      <th>Price</th>
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
                                <img src="storage/image/{{ $item->image }}" alt="pic" />
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
                        <th class="flex flex-col">
                          <div><form action="crud/{{ $item->id }}/edit"><button class="btn btn-ghost btn-xs" type="submit">Edit</button></form></div>
                          <div>
                            <form action="crud/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-ghost btn-xs" type="submit">Delete</button>
                            </form>
                          </div>
                        </th>
                      </tr>
                    @endforeach
                    
                </table>
              </div>
        </div>
    </section>
    

    
</x-app-layout>
