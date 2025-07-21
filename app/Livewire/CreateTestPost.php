<?php

namespace App\Livewire;

use App\Models\Testpost;
use Livewire\Component;

class CreateTestPost extends Component
{

    // #[Rule('required', message: 'hey, add title')] 
    // #[Rule('min:4', message: 'hey, too short title')] => when we apply this validation it will allow us to enforce customised validation and multiple validations
    public $title = '';

    // #[Rule('required', message: 'hey, add title')]
    public $content = '';
    public function save()
    {

        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        Testpost::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/testposttest');
    }
    public function render()
    {
        return view('livewire.create-test-post');
    }
}
