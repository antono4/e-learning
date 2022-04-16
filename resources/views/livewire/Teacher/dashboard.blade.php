<div class="pt-32">
    <div class="container mx-auto">
        <table class="border w-full rounded-md shadow overflow-hidden">
            <tr class="border bg-gray-800 text-white">
                <td class="px-6 w-[60px]"></td>
                <td class="py-3">
                    <span class="font-bold">Nama Siswa</span>
                </td>
                <td>
                    <span class="font-bold">Nilai</span>
                </td>
                <td>
                    <span class="font-bold">Status</span>
                </td>
            </tr>

            @forelse ($scores as $index => $score)
                <tr 
                    class="
                        border
                        @if ($index %2 == 1)
                            bg-gray-100
                        @else
                            bg-white
                        @endif
                ">
                    <td class="py-3 px-4">
                        <span class="font-semibold">{{ $index+1 }}</span>
                    </td>
                    <td>
                        {{ $score->user->name }}
                    </td>
                    <td>
                        {{ $score->score }}
                    </td>
                    <td>
                        <span 
                            class="px-3 text-sm rounded-xl text-white"
                            style="
                            @if($score->status == 'Diatas KKM')
                                background: linear-gradient(213deg,#3ba5b4 0,#38ba8a 100%)
                            @elseif($score->status == 'Dibawah KKM')
                                background-image: linear-gradient(315deg, #fe8c00 0%, #f83600 74%)
                            @elseif($score->status == 'Setara KKM')
                                background-image: linear-gradient(315deg, #FF8008 0%, #FFC837 74%)
                            @endif
                            "    
                        >{{ $score->status }}</span>
                    </td>
                </tr>
            @empty
                <tr class="bg-white">
                    <th class="py-3 px-4" colspan="4">
                        Belum ada siswa submit nilai
                    </th>
                </tr>
            @endforelse
        </table>
    </div>
</div>