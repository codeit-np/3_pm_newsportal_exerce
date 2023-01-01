<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('article.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input id="title" class="form-control" type="text" name="title" placeholder="eg.Title">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Choose Category <span class="text-danger">*</span></label>
                        <select id="category_id" class="form-control select2" name="category_id[]" multiple>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea  class="form-control summernote" name="description"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="featured">Featured Image <span class="text-danger">*</span></label>
                        <input id="featured" class="form-control-file" type="file" name="featured">
                     </div>
                     <div class="form-group">
                        <label for="metaword">Meta word (Optional)</label>
                        <textarea id="metaword" class="form-control" name="metaword" rows="3"></textarea>
                     </div>

                     <div class="form-group">
                        <label for="metadescription">Meta Description (Optional)</label>
                        <textarea id="metadescription" class="form-control" name="metadescription" rows="3"></textarea>
                     </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
