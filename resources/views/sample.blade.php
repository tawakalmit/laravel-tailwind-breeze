<x-main>
    <x-slot name="title">Sample Page</x-slot>
    <x-slot name="content">
        <div class="overflow-x-auto">
            <table class="table w-10/12 mx-auto mt-20">
              <!-- head -->
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th class="text-center">Mark</th>
                  <th>Favorite Color</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $sampledata)
                <tr class="hover">
                  <th>{{ $sampledata->id }}</th>
                  <td>{{ $sampledata->material_name }}</td>
                  <td class="text-center">{{ $sampledata->mark }}</td>
                  <td>Blue</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </x-slot>
</x-main>