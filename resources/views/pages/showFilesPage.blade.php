@extends('../index')
@section('title', 'All Files')
@section('content')
    <div class="font-['Poppins'] flex justify-center items-center w-100 h-[100vh] bg-slate-900">
        <div class="relative overflow-x-auto">
            <p class="font-semibold text-slate-400 text-[1.5rem]">Total: 30 Files</p>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            File
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            File name 1
                        </th>
                        <td class="px-6 py-4">
                            File 1 Description
                        </td>
                        <td class="px-6 py-4">
                            View | Download
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
