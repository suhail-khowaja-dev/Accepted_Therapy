<option disabled selected value="" >Select</option>
<option value="Aetna" {{ old('insurance_provider_1') == 'Aetna' ? 'selected' : '' }}>Aetna</option>
<option value="Blue Cross Blue Shield" {{ old('insurance_provider_1') == 'Blue Cross Blue Shield' ? 'selected' : '' }}>Blue Cross Blue Shield</option>
<option value="Cigna" {{ old('insurance_provider_1') == 'Cigna' ? 'selected' : '' }}>Cigna</option>
<option value="Tricare" {{ old('insurance_provider_1') == 'Tricare' ? 'selected' : '' }}>Tricare</option>
<option value="United Healthcare/UMR" {{ old('insurance_provider_1') == 'United Healthcare/UMR' ? 'selected' : '' }}>United Healthcare/UMR</option>
<option value="Other" {{ old('insurance_provider_1') == 'Other' ? 'selected' : '' }}>Other</option>