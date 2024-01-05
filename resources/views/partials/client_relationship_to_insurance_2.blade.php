<option disabled selected value="">Client’s’ Relationship to Insured</option>
<option value="Self" {{ old('relationship_with_client_2') == 'Self' ? 'selected' : '' }}>Self</option>
<option value="Spouse" {{ old('relationship_with_client_2') == 'Spouse' ? 'selected' : '' }}>Spouse</option>
<option value="Child" {{ old('relationship_with_client_2') == 'Child' ? 'selected' : '' }}>Child</option>
<option value="Other" {{ old('relationship_with_client_2') == 'Other' ? 'selected' : '' }}>Other</option>