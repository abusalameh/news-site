<div class="form-group row">
    <label for="name_ar" class="col-sm-4 col-form-label text-md-right">{{ __('Arabic Name') }}</label>

    <div class="col-md-6">
        <input id="name_ar" type="text" class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}" name="name_ar" value="{{ $category->name_ar or old('name_ar') }}" required autofocus>

        @if ($errors->has('name_ar'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name_ar') }}</strong>
            </span>
        @endif
    </div>
    </div>
    <div class="form-group row">
    <label for="name_en" class="col-sm-4 col-form-label text-md-right">{{ __('English Name') }}</label>

    <div class="col-md-6">
        <input id="name_en" type="text" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{  $category->name_en or old('name_en')    }}" required autofocus>

        @if ($errors->has('name_en'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name_en') }}</strong>
            </span>
        @endif
    </div>
    </div>
    <div class="form-group row">
    <label for="name_fr" class="col-sm-4 col-form-label text-md-right">{{ __('French Name') }}</label>

    <div class="col-md-6">
        <input id="name_fr" type="text" class="form-control{{ $errors->has('name_fr') ? ' is-invalid' : '' }}" name="name_fr" value="{{  $category->name_fr or old('name_fr') }}" required autofocus>

        @if ($errors->has('name_fr'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name_fr') }}</strong>
            </span>
        @endif
    </div>
    </div>