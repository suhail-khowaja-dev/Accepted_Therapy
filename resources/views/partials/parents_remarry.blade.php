<option selected disabled value="" >Select...</option>
<option value="Married" {{ old('parents_remarry') == 'Married' ? 'selected' : ''}}>Married</option>
<option value="Divorced" {{ old('parents_remarry') == 'Divorced' ? 'selected' : ''}}>Divorced</option>
<option value="Separated" {{ old('parents_remarry') == 'Separated' ? 'selected' : ''}}>Separated</option>
<option value="Step Parents" {{ old('parents_remarry') == 'Step Parents' ? 'selected' : ''}}>Step Parents</option>
<option value="Widowed" {{ old('parents_remarry') == 'Widowed' ? 'selected' : ''}}>Widowed</option>