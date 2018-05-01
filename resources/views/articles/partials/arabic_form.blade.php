<div class="tab-pane fade show active" id="arabic" role="tabpanel" aria-labelledby="arabic-tab" style="margin-top:2rem">
	  <div class="form-group row">
	    <label for="headline_ar" class="col-sm-2 col-form-label">Headline</label>
	    <div class="col-sm-10">
	      <input type="text" name="headline_ar" class="form-control {{ $errors->has('headline_ar') ? ' is-invalid' : '' }}" id="headline_ar" placeholder="Arabic news headline goes here..." value="{{ old( 'headline_ar', $article->headline_ar) }}"  autofocus>
	    
	    </div>
        
	  </div>
	  <div class="form-group row">
	    <label for="summary_ar" class="col-sm-2 col-form-label">Summary</label>
	    <div class="col-sm-10">
	      <textarea name="summary_ar" class="form-control {{ $errors->has('summary_ar') ? ' is-invalid' : '' }}" id="summary_ar" placeholder="Arabic news summary goes here..." rows="4">{{ old( 'summary_ar', $article->summary_ar) }}</textarea>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="text_ar" class="col-sm-2 col-form-label">Text</label>
	    <div class="col-sm-10">
	      <textarea name="text_ar" class="form-control {{ $errors->has('text_ar') ? ' is-invalid' : '' }}" id="text_ar" placeholder="Arabic news text goes here..." rows="10">{{ old( 'text_ar', $article->text_ar) }}</textarea>
	     
	    </div>
	  </div>
</div>