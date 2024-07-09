<?php
namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class products extends Component
{
    public $users;

    public function mount()
    {
        // Veritabanından veriyi çek ve önbelleğe al
        $this->users = Cache::remember('users', 60, function () {
            return Post::all();
        });
    }

    public function render()
    {
        return view('livewire.products');
    }
}

