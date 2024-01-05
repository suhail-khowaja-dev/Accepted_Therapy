<option disabled selected value="" >Select</option>
<option value="married" {{ old('marital_status') == 'married' ? 'selected' : ''}}>Married</option>
<option value="single" {{ old('marital_status') == 'single' ? 'selected' : ''}}>Single</option>
<option value="widowed" {{ old('marital_status') == 'widowed' ? 'selected' : ''}}>Widowed</option>
<option value="divorced" {{ old('marital_status') == 'divorced' ? 'selected' : ''}}>Divorced</option>
<option value="separated" {{ old('marital_status') == 'separated' ? 'selected' : ''}}>Separated </option>
<option value="common-law" {{ old('marital_status') == 'common-law' ? 'selected' : ''}}>Common Law</option>
<option value="living-together" {{ old('marital_status') == 'living-together' ? 'selected' : ''}}>Living Together</option>
<option value="partners" {{ old('marital_status') == 'partners' ? 'selected' : ''}}>Partners</option>
<option value="engage" {{ old('marital_status') == 'engage' ? 'selected' : ''}}>Engaged</option>