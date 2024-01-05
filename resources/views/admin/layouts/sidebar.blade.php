    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-primary">
                    <li class="{{ 'Business_Building' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a href="{{ config('app.url') }}" class="collapsed" target='_blank'>
                            <i class="bi bi-globe"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                                </svg></i>
                            <p>Website</p>

                        </a>

                    </li>
                    <li
                        class="{{ 'logo' == request()->path() ? 'nav-item active' : ('cms-management' == request()->path() ? 'nav-item active' : 'nav-item') }}">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Layout</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'logo' == request()->path() ? 'show' : ('cms-management' == request()->path() ? 'show' : '') }} "
                            id="base">
                            <ul class="nav nav-collapse" id="logo_padding">
                                <li>
                                    <a href="{{ route('logo_management') }}"
                                        class="nav-link {{ 'logo' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Logo Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cms_management') }}"
                                        class="nav-link {{ 'cms-management' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">CMS Management</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li class="{{ 'location-management' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#location">

                            <i class="fas fa-location-arrow" aria-hidden="true"></i>
                            <p>Location Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'location-management' == request()->path() ? 'show' : '' }}" id="location">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('location_management') }}"
                                        class="nav-link {{ 'location-management' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Add Location</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Team Management --}}
                    <li
                        class="{{ 'team-management' == request()->path() ||
                        'speciality-management' == request()->path()
                        ? 'nav-item active' : ('team-management' == request()->path() ? 'nav-item active' : 'nav-item') }}">
                        <a data-toggle="collapse" href="#team_management">
                            <i class="fas fa-users"></i>
                            <p>Team Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse
                        {{ 'team-management' == request()->path() || 'speciality-management' == request()->path()
                        ? 'show' : ('team-management' == request()->path() ? 'show' : '')  }}"
                            id="team_management">
                            <ul class="nav nav-collapse" id="team_management">
                                <li>
                                    <a href="{{ route('speciality_management') }}"
                                        class="nav-link {{ 'speciality-management' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Add Speciality</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('team_management') }}"
                                        class="nav-link {{ 'team-management' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Add Therapist</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    {{-- <li class="{{ 'client_details' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Our Clients</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'client_details' == request()->path() ? 'show' : '' }}" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('client_details') }}"
                                        class="nav-link {{ 'client_details' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Clients Management</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="{{ 'services_details' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#subscription">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                            <p>Services</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'services_details' == request()->path() ? 'show' : '' }}"
                            id="subscription">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('services_details') }}"
                                        class="nav-link {{ 'services_details' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Services Management</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="{{ 'testimonial_details' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#subnav1">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>Quote</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'testimonial_details' == request()->path() ? 'show' : '' }}"
                            id="subnav1">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('testimonial_details') }}"
                                        class="nav-link {{ 'testimonial_details' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item" style="font-size: 12px">Quote
                                            Management</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                    <li class="{{ 'schedule' == request()->path() ||
                                    'intake-form' == request()->path() ||
                                    'referral-form-show' == request()->path() ||
                                    'informed-consent-form' == request()->path() ||
                                    'credit-card-form-show' == request()->path() ||
                                    'non-secure-release-form-show' == request()->path() ||
                                    'release-of-information-form-show' == request()->path() ||
                                    'sliding-scale-form-show' == request()->path() ||
                                    'telehealth-form-show' == request()->path()  ||
                                    'agency_management' == request()->path()

                                ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#schedule_tab">
                            <i class="fab fa-wpforms"></i>
                            <p>Resources Forms</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'schedule' == request()->path() ||
                                'intake-form' == request()->path() ||
                                'referral-form-show' == request()->path() ||
                                'informed-consent-form' == request()->path() ||
                                'credit-card-form-show' == request()->path() ||
                                'non-secure-release-form-show' == request()->path() ||
                                'release-of-information-form-show' == request()->path() ||
                                'sliding-scale-form-show' == request()->path() ||
                                'telehealth-form-show' == request()->path() ||
                                'agency_management' == request()->path()


                                ? 'show' : '' }}" id="schedule_tab">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('schedule.index') }}"
                                        class="nav-link {{ 'schedule' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Schedule Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('referral_index') }}"
                                        class="nav-link {{ 'referral-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Referral Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('intake_form_show') }}"
                                        class="nav-link {{ 'intake-form' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Intake Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('informed_consent_form_index') }}"
                                        class="nav-link {{ 'informed-consent-form' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Informed Consent Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('credit_card_form_form_index') }}"
                                        class="nav-link {{ 'credit-card-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Credit Card Authorization Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('non_secure_release_form_form_index') }}"
                                        class="nav-link {{ 'non-secure-release-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Non-Secure Release Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('release_of_information_form_index') }}"
                                        class="nav-link {{ 'release-of-information-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Release of Information Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('sliding_scale_form_index') }}"
                                        class="nav-link {{ 'sliding-scale-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Sliding Scale Free Aplication Form</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('telehealth_form_index') }}"
                                        class="nav-link {{ 'telehealth-form-show' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Telehealth Treatment Consent Form</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    <li class="{{ 'packages' == request()->path() || 'package/add_new_package' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#tables">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <p>Package Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'packages' == request()->path() || 'package/add_new_package' == request()->path() ? 'show' : '' }}" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('packages') }}"
                                        class="nav-link {{ 'packages' == request()->path()  ? 'activeate' : '' }}">
                                        <span class="sub-item">Packages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="{{ 'faq' == request()->path() || 'faq' == request()->path() || 'faq-type' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#faq">
                            <i class="fa fa-question" aria-hidden="true"></i>
                            <p>F.A.Q Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'faq' == request()->path() || 'faq-type' == request()->path() ?  'show' : '' }}" id="faq">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('faq_index_type') }}"
                                        class="nav-link {{ 'faq-type' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">F.A.Q Type</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq_index') }}"
                                        class="nav-link {{ 'faq' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">F.A.Q</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="{{ 'contact-views' == request()->path() || '/contact-views' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#contact">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>Contact Inquiry</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'contact-views' == request()->path() ? 'show' : '' }}" id="contact">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('contact_views') }}"
                                        class="nav-link {{ 'contact-views' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Contact Management</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="{{ 'agency-management-show' == request()->path() || 'agency-management-show' == request()->path() || 'pdf-downloader-users' == request()->path() ?  'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#agency_management">
                            <i class="fas fa-home"></i>
                            <p>Agency Management</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'agency-management-show' == request()->path() || 'pdf-downloader-users' == request()->path() ?  'show' : '' }}" id="agency_management">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('agency_management_index') }}"
                                        class="nav-link {{ 'agency-management-show' == request()->path()  ? 'activeate' : '' }}">
                                        <span class="sub-item">Agency Listing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pdf-downloader_index') }}"
                                        class="nav-link {{ 'pdf-downloader-users' == request()->path()  ? 'activeate' : '' }}">
                                        <span class="sub-item">PDF Downloaders Listing</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    {{-- Role Management --}}
                    @if (Auth::check() && Auth::user()->role == 1)
                        
                    <li class="{{ 'role-management' == request()->path() ? 'nav-item active' : ('role-management' == request()->path() ? 'nav-item active' : 'nav-item') }}">
                        
                        <a href="{{ route('role_management') }}">
                            <i class="fas fa-users"></i>
                            <p>Role Management</p>
                        </a>
                        
                    </li>
                    @endif
                    

                    <li class="{{ 'pdf-upload-list' == request()->path() ||  'pdf-upload-list' == request()->path()  ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#pdf-uploader">
                            <i class="fas fa-file-pdf"></i>
                            <p>PDF Upload</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'pdf-upload-list' == request()->path() ? 'show' : '' }}" id="pdf-uploader">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('pdf_upload_index') }}"
                                        class="nav-link {{ 'pdf-upload-list' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">PDF Upload List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="{{ 'setting' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a data-toggle="collapse" href="#maps">
                            <i class="fas fa-users-cog"></i>
                            <p>General Setting</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ 'setting' == request()->path() ? 'show' : '' }}" id="maps">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('setting') }}"
                                        class="nav-link {{ 'setting' == request()->path() ? 'activeate' : '' }}">
                                        <span class="sub-item">Setting</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
