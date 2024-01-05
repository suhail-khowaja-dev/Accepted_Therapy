<option disabled value="" >Select...</option>
<option value="Excellent" {{ old('relation_with_mother') == 'Excellent' ? 'selected' : ''}}>Excellent</option>
<option value="Good" {{ old('relation_with_mother') == 'Good' ? 'selected' : ''}}>Good</option>
<option value="Fair" {{ old('relation_with_mother') == 'Fair' ? 'selected' : ''}}>Fair</option>
<option value="Poor" {{ old('relation_with_mother') == 'Poor' ? 'selected' : ''}}>Poor</option>