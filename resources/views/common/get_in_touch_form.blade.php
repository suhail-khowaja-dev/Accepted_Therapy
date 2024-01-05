<div id="errors"></div>
<form id="contactForm" action="{{ route('contact_us') }}" method="POST">
    @csrf
    <div class="mb-4">
        <input type="text" name="name" id="contact_name" class="form-control py-3" placeholder="Name"
            aria-label="Name">
            <span class="text-danger error-text name_error"></span>
    </div>
    <div class="mb-4">
        <input type="email" name="email" placeholder="Email" id="contact_email" class="form-control py-3"
            id="exampleInputEmail1">
            <span class="text-danger error-text email_error"></span>
    </div>
    <div class="mb-4">
        <select name="location" class="selectLocationField">
            @if (count($locations) > 0)
                <option value="" selected>Select Location</option>
                @foreach ($locations as $location)
                    <option value="{{ $location->city.','.$location->state.','.$location->country }}">{{ $location->city.','.$location->state.','.$location->country }}</option>
                @endforeach
            @else
            <option value="no-location">No Location</option>
            @endif
        </select>
    </div>
    <div class="form-group mb-5">
        <textarea class="form-control" name="message" id="contact_message" placeholder="Message"
            id="exampleFormControlTextarea1" rows="8"></textarea>
            <span class="text-danger error-text message_error"></span>
    </div>
    <div class="getin-touch-btn">
        <a href="javascript:void(0)" id="contact_anchor" class="w-100">
            <button type="submit" class="btn">
                Send
            </button>
        </a>
    </div>

</form>




