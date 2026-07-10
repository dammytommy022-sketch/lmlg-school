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
            <input type="text" name="title" class="form-control" value="{{ old('title', $slide->title) }}" required>
        </div>

        <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $slide->subtitle) }}">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Button 1 Label</label>
                    <input type="text" name="button1_label" class="form-control" value="{{ old('button1_label', $slide->button1_label) }}" placeholder="e.g. READ MORE">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Button 1 Link</label>
                    <input type="text" name="button1_link" class="form-control" value="{{ old('button1_link', $slide->button1_link) }}" placeholder="/about">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Button 2 Label</label>
                    <input type="text" name="button2_label" class="form-control" value="{{ old('button2_label', $slide->button2_label) }}" placeholder="e.g. Admission">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Button 2 Link</label>
                    <input type="text" name="button2_link" class="form-control" value="{{ old('button2_link', $slide->button2_link) }}" placeholder="/admissions">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Display Order</label>
            <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $slide->sort_order) }}">
            <small class="text-muted">Lower numbers appear first.</small>
        </div>

        <div class="form-group">
            <label class="d-block">Background Image</label>
            @if ($slide->exists)
                <img src="{{ $slide->image_url }}" alt="{{ $slide->title }}" class="img-fluid rounded mb-2" style="max-height:150px;">
            @endif
            <input type="file" name="image" class="form-control" accept="image/*" {{ $slide->exists ? '' : 'required' }}>
            @if ($slide->exists)
                <small class="text-muted">Leave blank to keep the current image.</small>
            @endif
        </div>

        <div class="form-group form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" {{ old('is_active', $slide->exists ? $slide->is_active : true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active (visible on the homepage)</label>
        </div>

        <button type="submit" class="btn btn-primary">{{ $slide->exists ? 'Update Slide' : 'Create Slide' }}</button>
    </div>
</div>
