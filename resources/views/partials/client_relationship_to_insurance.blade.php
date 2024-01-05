<option disabled selected value="">Client’s’ Relationship to Insured</option>
<option value="Self" {{ old('client_relationship_to_insurance_1') == 'Self' ? 'selected' : '' }}>Self</option>
<option value="Spouse" {{ old('client_relationship_to_insurance_1') == 'Spouse' ? 'selected' : '' }}>Spouse</option>
<option value="Child" {{ old('client_relationship_to_insurance_1') == 'Child' ? 'selected' : '' }}>Child</option>
<option value="Other" {{ old('client_relationship_to_insurance_1') == 'Other' ? 'selected' : '' }}>Other</option>