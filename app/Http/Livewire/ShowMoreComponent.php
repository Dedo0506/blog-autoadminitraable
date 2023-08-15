<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMoreComponent extends Component
{
    public $posts;

    public $postToShowMore = null;

    public function render()
    {
        return view('livewire.show-more-component');
    }

    public function toggleDescription($postId)
    {
        if ($this->postToShowMore === $postId) {
            $this->postToShowMore = null;
        } else {
            $this->postToShowMore = $postId;
        }
    }

}