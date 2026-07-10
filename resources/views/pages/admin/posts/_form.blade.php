@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label>Excerpt</label>
            <textarea name="excerpt" rows="2" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea name="body" rows="10" class="form-control" required>{{ old('body', $post->body) }}</textarea>
            <small class="text-muted">Separate paragraphs with a blank line.</small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $post->category) }}" placeholder="e.g. Latest News, Recent Highlight">
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $post->author) }}">
        </div>

        <div class="form-group">
            <label>Published Date</label>
            <input type="date" name="published_at" class="form-control" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d')) }}">
        </div>

        <div class="form-group">
            <label class="d-block">Image</label>
            @if ($post->image)
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-fluid rounded mb-2" style="max-height:120px;">
            @endif
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">Leave blank to keep the current image.</small>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" name="is_published" id="is_published" class="form-check-input" value="1" {{ old('is_published', $post->exists ? $post->is_published : true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Published (visible on the public site)</label>
        </div>

        <button type="submit" class="btn btn-primary">{{ $post->exists ? 'Update Post' : 'Create Post' }}</button>
    </div>
</div>
