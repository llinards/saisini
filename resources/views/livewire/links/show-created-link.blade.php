<div class="mt-4">
    <p>{{ __('Generated link is') }} -
        <a class="pr-2 text-blue-500 underline hover:text-blue-700" target="_blank"
           href="{{ URL::to('/') . '/' . $short_url }}">
            {{ URL::to('/') . '/' . $short_url }}
        </a>
    </p>
</div>
