@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
</ul>

@endif

<form action="{{ route($route, $argument) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="mb-3">
        <label for="posts-title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="posts-title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
        <label for="posts-description" class="form-label">Description</label>
        <input type="text" class="form-control" name="content" id="posts-description" value="{{ $post->content }}">
    </div>
    <div class="mb-3">
        <label for="posts-thumb" class="form-label">Image</label>
        <input type="file" class="form-control" name="img" id="posts-thumb" value="{{ $post->img }}">
    </div>

    <div class="mb-3">
        <label for="posts-category" class="form-label">Categories</label>
        <select name="category_id" id="posts-category">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        @forelse ($tags as $tag)
        <div class="form-check">
            @if ($errors->any())
            <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="{{ $tag->id }}" 
            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="tag">
                {{ $tag->name }}
            </label>
            @else
            <input class="form-check-input" type="checkbox" name="tags[]" id="tags" value="{{ $tag->id }}" 
            {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
            <label class="form-check-label" for="tag">
                {{ $tag->name }}
            </label>
            @endif
        </div>
        @empty
        Non ci sono tag da selezionare!
        @endforelse
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>