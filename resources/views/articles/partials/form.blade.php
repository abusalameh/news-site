@csrf
<div class="tab-content" id="myTabContent">
    @include('articles.partials.arabic_form')
    @include('articles.partials.english_form')
    @include('articles.partials.french_form')
</div>
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10" style="margin-top:8px;">
        <input type="file" name="image" sclass="form-control" id="customFile">
    </div>
</div>
{{-- <div class="form-group row">
    <label for="publish_date" class="col-2 col-form-label">Publish Date</label>
    <div class="col-10">
        <input name="publish_date" class="form-control" type="date" id="publish_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" value="{{  $article->publish_date->format('mm-dd-YYYY') or old('publish_date')}}">
    </div>
</div> --}}
<div class="form-group row">
    <label for="category_id" class="control-label col-sm-2">
        Category
    </label>
    <div class="col-sm-10">
        <select name="category_id" id="category_id" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}">
            <option value="">-- Select -- </option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old( 'category_id', $article->category_id) == $category->id ? 'selected' : '' }} >
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="state" class="control-label col-sm-2">
        State
    </label>
    <div class="col-sm-10">
        <select name="state" id="state" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}">
            <option value=""> -- Select -- </option>
            @foreach (['DRAFT', 'LIVE','DELETED','APPROVAL'] as $state)
            <option value="{{ $state }} " {{ old( 'state', $article->state) == $state ? 'selected' : '' }} >
                {{ $state }}
            </option>
            @endforeach
        </select>
    </div>
</div>