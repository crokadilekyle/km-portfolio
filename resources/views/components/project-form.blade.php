<div class="p-4">
    <form action={{$action}} method="post" enctype="multipart/form-data">
        @csrf
        @if($task == "Update Project")
        @method('PUT')
        @endif
        <div class="my-4">
            <x-jet-label for="title" value="{{ __('Project Title') }}" />
            @if($task == "Update Project")
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$project->title}}" required />
            @else
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" required />
            @endif
        </div>
        <div class="my-4">
            <x-jet-label for="url" value="{{ __('Project Url') }}" />
            @if($task == "Update Project")
            <x-jet-input id="url" class="block mt-1 w-full" type="text" name="url" value="{{$project->url}}" />
            @else
            <x-jet-input id="url" class="block mt-1 w-full" type="text" name="url" />
            @endif
        </div>
        <div class="my-4">
            <x-jet-label for="slug" value="{{ __('Project Slug') }}" />
            @if($task == "Update Project")
            <x-jet-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{$project->slug}}" />
            @else
            <x-jet-input id="slug" class="block mt-1 w-full" type="text" name="slug" />
            @endif
        </div>
        <div class="my-4">
            <x-jet-label for="excerpt" value="{{ __('Project Excerpt') }}" />
            @if($task == "Update Project")
            <x-jet-input id="excerpt" class="block mt-1 w-full" type="text" name="excerpt" value="{{$project->excerpt}}" />
            @else
            <x-jet-input id="excerpt" class="block mt-1 w-full" type="text" name="excerpt" />
            @endif
        </div>
        <div class="my-4">
            @if($task == "Update Project")
            <p>Current Image</p>
            <img src="{{asset('storage/'.$project->featured_image)}}" width="200px" height="200px" /></br>
            <x-jet-label for="featured_image" value="{{ __('Update Project Featured Image') }}" />
            <x-jet-input id="featured_image" class="block mt-1 w-full" type="file" name="featured_image" />
            @else
            <x-jet-label for="featured_image" value="{{ __('Project Featured Image') }}" />
            <x-jet-input id="featured_image" class="block mt-1 w-full" type="file" name="featured_image" />
            @endif
        </div>
        <div class="my-4">
            <x-jet-label for="project-trixFields[content]" value="{{ __('Project Content') }}" />
            @if($task == "Update Project")
            @trix($project, 'content')
            @else
            @trix(\App\Models\Project::class, 'content')
            @endif
        </div>

        <x-jet-button class="my-4">
            {{ __($task) }}
        </x-jet-button>

        {{-- <input class="text-center mx-auto mt-4 display-block" type="submit" value="Create Project"> --}}
    </form>
</div>
