<option disabled value="" >Select...</option>
<option value="1 or 2" {{ old('drinks') == '1 or 2' ? 'selected' : ''}}>1 or 2</option>
<option value="3 or 4" {{ old('drinks') == '3 or 4' ? 'selected' : ''}}>3 or 4</option>
<option value="More than 5 drinks" {{ old('drinks') == 'More than 5 drinks' ? 'selected' : ''}}>More than 5 drinks</option>