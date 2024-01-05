<option disabled value="" >Select...</option>
<option value="Excellent" {{ old('relation_with_father') == 'Excellent' ? 'selected' : ''}}>Excellent</option>
<option value="Good" {{ old('relation_with_father') == 'Good' ? 'selected' : ''}}>Good</option>
<option value="Fair" {{ old('relation_with_father') == 'Fair' ? 'selected' : ''}}>Fair</option>
<option value="Poor" {{ old('relation_with_father') == 'Poor' ? 'selected' : ''}}>Poor</option>