<div class="mt-1">
  <h2 class="text-2xl font-semibold mb-4">📊 Negara Pembeli Senjata</h2>
  <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="px-4 py-2 text-left">Negara</th>
        <th class="px-4 py-2 text-left">Kode</th>
        <th class="px-4 py-2 text-left">Jumlah Unit</th>
        <th class="px-4 py-2 text-left">Nilai Kontrak</th>
        <th class="px-4 py-2 text-left">Tahun</th>
        <th class="px-4 py-2 text-left">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($buyers as $buyer)
      <tr class="border-b">
        <td class="px-4 py-2 font-medium">{{ $buyer['country'] }}</td>
        <td class="px-4 py-2">{{ strtoupper($buyer['code']) }}</td>
        <td class="px-4 py-2">{{ $buyer['units'] }}</td>
        <td class="px-4 py-2">Rp {{ number_format($buyer['value'], 0, ',', '.') }}</td>
        <td class="px-4 py-2">{{ $buyer['year'] }}</td>
        <td class="px-4 py-2">
          @if($buyer['status'] === 'Selesai')
            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">{{ $buyer['status'] }}</span>
          @elseif($buyer['status'] === 'Dalam Proses')
            <span class="bg-yellow-400 text-black px-3 py-1 rounded-full text-sm">{{ $buyer['status'] }}</span>
          @else
            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm">{{ $buyer['status'] }}</span>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
