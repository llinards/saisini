<?php

namespace App\Livewire\Links;

use App\Models\Link;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Component;

class DeleteLink extends Component
{
    public Link $link;

    public function deleteLink($link): void
    {
        try {
            $this->link->delete();
            session()->flash('success', 'Saīsinātā saite veiksmīgi dzēsta.');

            $this->redirect(route('dashboard'), navigate: true);
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash('error', 'Kaut kas nogāja greizi. Lūdzu, mēģini vēlreiz.');
            $this->redirect(route('dashboard'), navigate: true);
        }
    }

    public function render(): View
    {
        return view('livewire.links.delete-link');
    }
}
