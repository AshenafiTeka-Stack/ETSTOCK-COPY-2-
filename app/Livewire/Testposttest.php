<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testpost;

class Testposttest extends Component
{

    public function delete(Testpost $post)
    {
        $post->delete();
    }

    // public function delete($postId)
    // {
    //     Testpost::find($postId)->delete();
    // }

    public function render()
    {
        return view('livewire.testposttest', [
            'posts12' => Testpost::all(),
        ]);
    }
}
