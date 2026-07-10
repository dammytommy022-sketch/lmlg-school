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
            <label>Title / Caption</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $image->title) }}">
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control" required>
                <option value="">Select a category</option>
                @foreach (\App\Models\GalleryImage::CATEGORIES as $value => $label)
                    <option value="{{ $value }}" {{ old('category', $image->category) === $value ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Display Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $image->sort_order) }}">
            <small class="text-muted">Lower numbers appear first.</small>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label class="d-block">Image</label>
            @if ($image->exists)
                <img src="{{ $image->image_url }}" alt="{{ $image->title }}" class="img-fluid rounded mb-2" style="max-height:150px;">
            @endif
            <input type="file" name="image" class="form-control" accept="image/*" {{ $image->exists ? '' : 'required' }}>
            @if ($image->exists)
                <small class="text-muted">Leave blank to keep the current image.</small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ $image->exists ? 'Update Image' : 'Add Image' }}</button>
    </div>
</div>
