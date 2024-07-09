<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $search = '';
    public $title, $body, $post_id;
    public $post;
    public $isOpen = false;

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
    ];

    public function render()
    {

        $posts = Post::where('title', 'like', '%' . $this->search . '%')
            ->paginate(10);
        $this->post;


        return view('livewire.posts', compact('posts'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->toggleModal();
    }

    public function toggleModal()
    {
        $this->isOpen = !$this->isOpen;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->body = '';
        $this->post_id = null;
    }

    public function store()
    {
        $this->validate();

        Post::updateOrCreate(['id' => $this->post_id], [
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->resetInputFields();
        $this->toggleModal();

        session()->flash('message', $this->post_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
    }

    public function edit($id)
    {

        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->toggleModal();
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
