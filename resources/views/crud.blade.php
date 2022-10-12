<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Card CRUD') }}
        </h2>
    </x-slot>

    <section class="w-10/12 flex justify-center mt-20 mb-20 mx-auto">
        <form action="" class="flex flex-col w-[20rem] bg-white rounded-3xl">
            <input type="text" id="name" name="name" placeholder="Name" class="rounded-2xl border-0 mb-5 w-10/12 mx-auto bg-[rgba(0,0,0,0)] mt-5" >
            <input type="text" id="name" name="name" placeholder="Description" class="rounded-2xl border-0 mb-5 w-10/12 mx-auto bg-[rgba(0,0,0,0)]" >
            <button class="btn btn-primary w-10/12 mx-auto mb-5" type="submit">Submit</button>
        </form>
    </section>

    <section class="pb-20">
        <div>
            <div class="overflow-x-auto w-11/12 mx-auto myshadow">
                <table class="table w-full">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>
                        <label>
                          <input type="checkbox" class="checkbox" />
                        </label>
                      </th>
                      <th>Name</th>
                      <th>description</th>
                      <th>Created at</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach ($crud as $item)
                    <tr>
                        <th>
                          <label>
                            <input type="checkbox" class="checkbox" />
                          </label>
                        </th>
                        <td>
                          <div class="flex items-center space-x-3">
                            <div class="avatar">
                              <div class="mask mask-squircle w-12 h-12">
                                <img src="notfound.webp" alt="" />
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
                        <td>Purple</td>
                        <th class="flex flex-col">
                          <button class="btn btn-ghost btn-xs">Edit</button>
                          <button class="btn btn-ghost btn-xs">Delete</button>
                        </th>
                      </tr>
                    @endforeach
                    
                </table>
              </div>
        </div>
    </section>
    

    
</x-app-layout>
