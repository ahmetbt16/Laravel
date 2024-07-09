<div class="p-4">
    <!-- Arama Kutusu -->
    <input type="text" wire:model.live.throttle.500ms="search" placeholder="Ara..." class="mb-4 p-2 border border-gray-300 rounded">

    <!-- Yeni Post Oluşturma Butonu -->
    <button class="bg-blue-500 text-white p-2 rounded mb-4" wire:click="create">Yeni Post Oluştur</button>

    <!-- Yeni Post Formu İçin Koşullu Görüntüleme -->
    @if($isOpen)
        @include('livewire.create')
    @endif

    <!-- Postları Gösteren Tablo -->
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 py-2">Başlık</th>
            <th class="w-1/3 py-2">İçerik</th>
            <th class="w-1/3 py-2">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class="text-center border-b">
                <td class="py-2">{{ $post->title }}</td>
                <td class="py-2">{{ $post->body }}</td>
                <td class="py-2">
                    <button class="bg-green-500 text-white p-2 rounded" wire:click="edit({{ $post->id }})">Düzenle</button>
                    <button class="bg-red-500 text-white p-2 rounded" wire:click="delete({{ $post->id }})">Sil</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Sayfalama Linkleri -->
    <div class="mt-4">
        {{ $posts->links() }}
    </div>

    <!-- Başarı Mesajı -->
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mt-4">
            {{ session('message') }}
        </div>
    @endif
</div>
