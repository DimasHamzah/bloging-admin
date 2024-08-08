<x-app-layout>
   <x-icon.button-menus-icon />

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   <div class="flex items-center">
                       User
                       <a href="#">
                           <x-icon.filter-icon />
                       </a>
                   </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Category
                        <a href="#">
                           <x-icon.filter-icon />
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Title
                        <a href="#">
                            <x-icon.filter-icon />
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        description
                        <a href="#">
                            <x-icon.filter-icon />
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       {{ $blog->user_id }}
                    </th>
                    <td class="px-6 py-4">
                       {{ $blog->category_id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $blog->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $blog->description }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <script>
        $(document).ready(function () {
          $('#btn-menu').click(function () {
             $('#nav-menu').toggle(300)
          })
        })
    </script>
</x-app-layout>
