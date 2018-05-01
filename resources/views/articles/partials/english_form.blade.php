<div class="tab-pane fade show" id="english" role="tabpanel" aria-labelledby="english-tab">
	<div class="form-group row" style="margin-top:2em">
	    <label for="headline_en" class="col-sm-2 col-form-label">Headline</label>
	    <div class="col-sm-10">
	      <input type="text" name="headline_en" class="form-control {{ $errors->has('headline_en') ? ' is-invalid' : '' }}" id="headline_en" placeholder="English news headline goes here..." value="{{ old( 'headline_en', $article->headline_en) }}"  autofocus>
	    
	    </div>
        
	  </div>
	  <div class="form-group row">
	    <label for="summary_en" class="col-sm-2 col-form-label">Summary</label>
	    <div class="col-sm-10">
	      <textarea name="summary_en" class="form-control {{ $errors->has('summary_en') ? ' is-invalid' : '' }}" id="summary_en" placeholder="English news summary goes here..." rows="4">{{ old( 'summary_en', $article->summary_en) }}</textarea>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="text_en" class="col-sm-2 col-form-label">Text</label>
	    <div class="col-sm-10">
	      <textarea name="text_en" class="form-control {{ $errors->has('text_en') ? ' is-invalid' : '' }}" id="text_en" placeholder="English news text goes here..." rows="10">{{ old( 'text_en', $article->text_en) }}</textarea>
	     
	    </div>
	  </div>
</div>