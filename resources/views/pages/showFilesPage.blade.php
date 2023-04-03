@extends('../index')
@section('title', 'All Files')
@section('content')
    <div class="font-['Poppins'] flex justify-center items-center w-100 h-[100vh] bg-slate-900">
        <div class="relative overflow-x-auto">
            <div class="flex justify-between items-center">
                <p class="font-semibold text-slate-400 text-[1.5rem]">Total: {{ $total }} File/s</p>
                <a href="/" class="py-2 px-4 text-[.7rem] bg-emerald-400 hover:bg-emerald-700 hover:text-white rounded" >Back</a>
            </div>
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
                            View File
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Download File
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value )
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $value->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $value->description }}
                            </td>
                            <td class="px-6 py-4 hover:text-slate-300">
                                <a href="view/{{ $value->id }}">View</a>
                            </td>
                            <td class="px-6 py-4 hover:text-slate-300">
                                <a href="download/{{ $value->file }}">Download</a>
                            </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
