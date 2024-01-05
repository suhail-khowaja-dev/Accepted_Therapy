<option disabled selected value="">Select</option>
<option value="male" {{ old('legal_gender') == 'male' ? 'selected' : ''}}>Male</option>
<option value="female" {{ old('legal_gender') == 'female' ? 'selected' : ''}}>Female</option>
<option value="transMF" {{ old('legal_gender') == 'transMF' ? 'selected' : ''}}>Transgendered M-F</option>
<option value="transFM" {{ old('legal_gender') == 'transFM' ? 'selected' : ''}}>Transgendered F-M</option>
<option value="non-binary" {{ old('legal_gender') == 'non-binary' ? 'selected' : ''}}>Non-Binary</option>
<option value="others" {{ old('legal_gender') == 'others' ? 'selected' : ''}}>Others</option>