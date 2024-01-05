<option disabled selected value="" >Insurance Provider</option>
<option value="Aetna" {{ old('insurance_provider_2') == 'Aetna' ? 'selected' : '' }}>Aetna</option>
<option value="Blue Cross Blue Shield" {{ old('insurance_provider_2') == 'Blue Cross Blue Shield' ? 'selected' : '' }}>Blue Cross Blue Shield</option>
<option value="Cigna" {{ old('insurance_provider_2') == 'Cigna' ? 'selected' : '' }}>Cigna</option>
<option value="Tricare" {{ old('insurance_provider_2') == 'Tricare' ? 'selected' : '' }}>Tricare</option>
<option value="United Healthcare/UMR" {{ old('insurance_provider_2') == 'United Healthcare/UMR' ? 'selected' : '' }}>United Healthcare/UMR</option>
<option value="Other" {{ old('insurance_provider_2') == 'Other' ? 'selected' : '' }}>Other</option>