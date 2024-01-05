<option selected disabled value="" >Select...</option>
<option value="none" {{ old('alcohole_consume') == 'none' ? 'selected' : ''}}>None</option>
<option value="1 to 2 times per week" {{ old('alcohole_consume') == '1 to 2 times per week' ? 'selected' : ''}}>1 to 2 times per week</option>
<option value="3 to 4 times per week" {{ old('alcohole_consume') == '3 to 4 times per week' ? 'selected' : ''}}>3 to 4 times per week</option>
<option value="More than 5 times per week" {{ old('alcohole_consume') == 'More than 5 times per week' ? 'selected' : ''}}>More than 5 times per week</option>