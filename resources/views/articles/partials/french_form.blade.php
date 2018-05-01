<div class="tab-pane fade show " id="french" role="tabpanel" aria-labelledby="french-tab">
	<div class="form-group row" style="margin-top:2em">
	    <label for="headline_fr" class="col-sm-2 col-form-label">Headline</label>
	    <div class="col-sm-10">
	      <input type="text" name="headline_fr" class="form-control {{ $errors->has('headline_fr') ? ' is-invalid' : '' }}" id="headline_fr" placeholder="French news headline goes here..." value="{{ old( 'headline_fr', $article->headline_fr) }}"  autofocus>
	    
	    </div>
        
	  </div>
	  <div class="form-group row">
	    <label for="summary_fr" class="col-sm-2 col-form-label">Summary</label>
	    <div class="col-sm-10">
	      <textarea name="summary_fr" class="form-control {{ $errors->has('summary_fr') ? ' is-invalid' : '' }}" id="summary_fr" placeholder="French news summary goes here..." rows="4">{{ old( 'summary_fr', $article->summary_fr) }}</textarea>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="text_fr" class="col-sm-2 col-form-label">Text</label>
	    <div class="col-sm-10">
	      <textarea name="text_fr" class="form-control {{ $errors->has('text_fr') ? ' is-invalid' : '' }}" id="text_fr" placeholder="French news text goes here..." rows="10">{{ old( 'text_fr', $article->text_fr) }}</textarea>
	     
	    </div>
	  </div>
</div>