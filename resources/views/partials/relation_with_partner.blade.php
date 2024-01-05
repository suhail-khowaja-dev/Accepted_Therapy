<option disabled selected value="" >Select...</option>
<option value="N/A" {{ old('relationship_with_your_partner') == 'N/A' ? 'selected' : ''}}>N/A</option>
<option value="Excellent" {{ old('relationship_with_your_partner') == 'Excellent' ? 'selected' : ''}}>Excellent</option>
<option value="Good" {{ old('relationship_with_your_partner') == 'Good' ? 'selected' : ''}}>Good </option>
<option value="Fair" {{ old('relationship_with_your_partner') == 'Fair' ? 'selected' : ''}}>Fair</option>
<option value="Poor" {{ old('relationship_with_your_partner') == 'Poor' ? 'selected' : ''}}>Poor</option>