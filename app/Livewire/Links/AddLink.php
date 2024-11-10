<?php

namespace App\Livewire\Links;

use App\Models\Link;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Tuupola\Base62;

class AddLink extends Component
{
    #[Validate('required', message: 'No URL provided.')]
    #[Validate('url', message: 'You didnt provide a valid URL.')]
    public string $long_url;

    #[Validate('nullable')]
    #[Validate('regex:/^[a-zā-žA-ZĀ-Ž0-9\-_]+$/', message: 'The shortened address can only contain Latin letters, numbers, and dashes.')]
    #[Validate('unique:links', message: 'Such short link already exists.')]
    public string $short_url = '';

    public bool $isShortUrlOptionVisible = false;

    public function addLink(): void
    {
        $this->validate();
        if (empty($this->short_url)) {
            $this->encodeShortUrl();
        }
        try {
            if (auth()->check()) {
                auth()->user()->links()->create($this->pull());
            } else {
                Link::create($this->pull());
            }

            session()->flash('success', 'Saite veiksmīgi saīsināta.');
            $this->redirect(route('dashboard'), navigate: true);
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash('error', 'Kaut kas nogāja greizi. Lūdzu, mēģini vēlreiz.');
            $this->redirect(route('dashboard'), navigate: true);
        }
    }

    private function encodeShortUrl(): void
    {
        $base62          = new Base62();
        $this->short_url = $base62->encode(random_bytes(random_int(1, 8)));
    }

    public function toggleShortUrlOption(): void
    {
        $this->isShortUrlOptionVisible = ! $this->isShortUrlOptionVisible;
    }

    public function render()
    {
        return view('livewire.links.add-link');
    }
}
