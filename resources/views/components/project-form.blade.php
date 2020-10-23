<div class="p-4">
    <form action={{$action}} method="post">
        @csrf

        <div class="my-4">
            <x-jet-label for="title" value="{{ __('Project Title') }}" />
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" required />
        </div>
        <div class="my-4">
            <x-jet-label for="url" value="{{ __('Project Url') }}" />
            <x-jet-input id="url" class="block mt-1 w-full" type="text" name="url" />
        </div>

        @trix(App\Project::class, 'content')

        <x-jet-button class="my-4">
            {{ __($task) }}
        </x-jet-button>

        {{-- <input class="text-center mx-auto mt-4 display-block" type="submit" value="Create Project"> --}}
    </form>
</div>
