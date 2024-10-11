<div>
    hello my friend
    @foreach ($this->projects() as $project)
    <div>
            <a href="{{ route('projects.show', $project) }}">
                {{ $project->id }}.  {{ $project->title }}
            </a>
        </div>
    @endforeach
</div>