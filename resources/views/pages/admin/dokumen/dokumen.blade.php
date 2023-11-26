@include('pages.partials.__adminBar');
<script>
    Fancybox.bind('[data-fancybox="berita"]', {
        Carousel: {
            transition: "classic",
        },
    });
</script>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
        <div class="relative top-[0px] md:top-[50px] right-0">
            <a href="{{route('dokumen-baru')}}" class="flex justify-center w-20 h-auto bg-blue-500 rounded-lg drop-shadow-md text-white font-semibold py-1">NEW+</a>
        </div>
        <div class="flex justify-center py-2 mb-2 border-b-4 border-amber-400">
            <h1 class="text-4xl font-bold  text-sky-600">DOKUMEN</h1>
        </div>
        <div class="flex items-center justify-center h-auto pt-2 px-4 rounded bg-gray-50">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500" id="datatables">
                    <thead class="text-xs text-sky-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="p-4 px-6">
                                OPD
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peraturan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Updated at
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokumen as $q)
                        <tr class="bg-white border-b hover:bg-sky-50">
                            <td class="px-6 py-4">
                                {{$q->OPD}}
                            </td>
                            <td class="px-6 py-4">
                                {{$q->peraturan}}
                            </td>
                            <th scope="row" class="px-6 py-4">
                                {{ Illuminate\Support\Str::limit($q->judul_dok, $limit = 100, $end = '. . .') }}
                            </th>
                            <td class="px-1 py-4">
                                {{$q->status_dok}}
                            </td>
                            <td class="px-1 py-4">
                                {{$q->keterangan_dok}}   
                            </td>
                            <td class="px-1 py-4">
                                {{$q->created_at}}   
                            </td>
                            <td class="px-1 py-4">
                                {{$q->updated_at}}
                            </td>
                            <td class="px-1 py-4">
                                <div class="flex flex-row justify-center align-center items-center px-2 py-4">
                                    <a href="{{route('edit-dokumen/', ['id' => $q->id])}}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    <a href="#" onclick="confirmDelete({{ $q->id }})" class="font-medium text-red-600 hover:underline ms-3">Remove</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(id) {
        var confirmation = window.confirm("Are you sure you want to delete this berita?");

        if (confirmation) {
            // If the user confirms, redirect to the delete route
            window.location.href = "{{ url('/process-delete-dokumen') }}/" + id;
        } else {
            // If the user cancels, do nothing or show a message
            // You can customize this part based on your requirements
            console.log("Deletion canceled");
        }
    }
</script>