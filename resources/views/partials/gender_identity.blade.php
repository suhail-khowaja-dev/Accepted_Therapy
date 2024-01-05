<option disabled selected value="" >Select</option>
<option value="Agender" {{ old('gender_identity') == 'Agender' ? 'selected' : ''}}>Agender</option>
<option value="Female" {{ old('gender_identity') == 'Female' ? 'selected' : ''}}>Female</option>
<option value="Gender Fluid" {{ old('gender_identity') == 'Gender Fluid' ? 'selected' : ''}}>Gender Fluid</option>
<option value="Gender Non-conforming" {{ old('gender_identity') == 'Gender Non-conforming' ? 'selected' : ''}}>Gender Non-conforming</option>
<option value="Genderqueer" {{ old('gender_identity') == 'Genderqueer' ? 'selected' : ''}}>Genderqueer</option>
<option value="Intersex" {{ old('gender_identity') == 'Intersex' ? 'selected' : ''}}>Intersex</option>
<option value="Male" {{ old('gender_identity') == 'Male' ? 'selected' : ''}}>Male</option>
<option value="Non-Binary" {{ old('gender_identity') == 'Non-Binary' ? 'selected' : ''}}>Non-Binary</option>
<option value="Trans Female" {{ old('gender_identity') == 'Trans Female' ? 'selected' : ''}}>Trans Female</option>
<option value="Trans Male" {{ old('gender_identity') == 'Trans Male' ? 'selected' : ''}}>Trans Male</option>
<option value="Two Spirit" {{ old('gender_identity') == 'Two Spirit' ? 'selected' : ''}}>Two Spirit</option>
<option value="Questioning" {{ old('gender_identity') == 'Questioning' ? 'selected' : ''}}>Questioning</option>
<option value="Choose Not to Disclose" {{ old('gender_identity') == 'Choose Not to Disclose' ? 'selected' : ''}}>Choose Not to Disclose</option>
<option value="others" {{ old('gender_identity') == 'others' ? 'selected' : ''}}>Other</option>