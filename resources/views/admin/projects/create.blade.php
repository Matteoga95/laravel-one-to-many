@extends('layouts.admin')


@section('content')

<h1>Create a new Project</h1>

@include('partials.errors')


<form action="{{route('admin.projects.store')}}" method="post">

    @csrf

    <div class="mb-3">
        <label for="project_title" class="form-label">Project project title</label>
        <input type="text" name="project_title" id="project_title"
            class="form-control @error('project_title') is-invalid @enderror" placeholder="learning laravel"
            aria-describedby="project_titleHelper" value="{{old('project_title')}}>
        <small id=" project_titleHelper" class="text-muted">Add a project title for the current post, max 100
        characters,
        must be
        unique</small>
    </div>



    <div class="mb-3">
        <label for="body" class="form-label">Project description and goals</label>
        <textarea class="form-control" name="body" id="body" rows="10">value="{{old('body')}}</textarea>
    </div>

    <button type="submit" class="btn btn-prymary">Create</button>
</form>


@endsection