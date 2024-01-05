<option disabled selected value="" >Select</option>
<option value="Black/African-American" {{ old('race') == 'Black/African-American' ? 'selected' : ''}}>Black/African-American</option>
<option value="Asian" {{ old('race') == 'Asian' ? 'selected' : ''}}>Asian</option>
<option value="Hispanic/Latino" {{ old('race') == 'Hispanic/Latino' ? 'selected' : ''}}>Hispanic/Latino</option>
<option value="Multiracial" {{ old('race') == 'Multiracial' ? 'selected' : ''}}>Multiracial</option>
<option value="American Indian/Alaska Native" {{ old('race') == 'American Indian/Alaska Native' ? 'selected' : ''}}>American Indian/Alaska Native</option>
<option value="Hawaiian Native/Pacific Islander" {{ old('race') == 'Hawaiian Native/Pacific Islande' ? 'selected' : ''}}>Hawaiian Native/Pacific Islander</option>
<option value="White/Caucasian" {{ old('race') == 'White/Caucasian' ? 'selected' : ''}}>White/Caucasian</option>
<option value="Others" {{ old('race') == 'Others' ? 'selected' : ''}}>Others</option>