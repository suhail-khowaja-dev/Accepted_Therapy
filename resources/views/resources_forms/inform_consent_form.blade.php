@extends('layouts.master')
@section('content')

<!-- ==================================   Informed Consent FORM ============================= -->
<section class="forms">
    <div class="container form-intake form-reff">
        <div class="container form1">
            <fieldset class="border">
                <legend class="text-center text-capitalize">
                    Informed Consent
                </legend>
                <div class="position-relative therapy-border d-flex justify-content-center flex-wrap pt-4">
                    <div class="therapy-border-img">
                        <img src="{{ asset('assets/images/logo2.svg') }}" alt="logo">
                    </div>
                </div>
                <!-- FORM -->
                <div class="container form-fileds mt-5">
                    <!-- Release Info  -->
                    <form action="{{ route('inform_consent_form_store') }}" method="post" id="consent-info-forms" class="">
                        @csrf
                        <div class="consent-fields">
                            <div>
                                <p>
                                    Welcome to Accepted Therapy Services. This document contains important
                                    information about our professional services and business policies. Although
                                    these documents are long and sometimes complex, it is very important that
                                    you understand them. When you sign this document, it will also represent an
                                    agreement between us. If you have any questions, we can discuss them prior
                                    to you signing the document; however, no therapy services will be provided
                                    until a signed copy of this document has been received.
                                </p>
                            </div>
                            <div class="therapy-service">
                                <div class="row">
                                    <h3>Therapy Services</h3>
                                </div>
                                <p>
                                    The first 2-4 sessions will involve establishing a relationship, developing
                                    treatment goals, and creating an initial treatment plan. During this time, I
                                    will have an opportunity to get to know my therapist and to make my own
                                    assessment about whether I feel comfortable working with them. If I have
                                    questions about the procedures that are outlined in this document, I will
                                    discuss them whenever they arise. If my doubts persist, I will ask my
                                    therapist to help me set up a meeting with another mental health
                                    professional for a second opinion.
                                </p>
                                <p>
                                    Psychotherapy requires a very active effort on my part. In order to be most
                                    successful, I may have to work on things that are discussed outside of
                                    sessions. This may be through homework which, if assigned, will be specific
                                    to the work that I am doing in sessions. Any homework assignment that is
                                    given to me, will be tailored to my experiences and current level of coping
                                    or functioning.
                                </p>
                                <div>
                                    <div class="row">
                                        <h5>Benefits and Risks of Therapy</h5>
                                    </div>
                                    <p>
                                        The benefits of therapy can include:
                                    </p>
                                    <ul class="">
                                        <li>
                                            <p>
                                                One of the benefits of therapy is having someone that I can talk
                                                to and who is on my side. Sometimes, my therapist may challenge
                                                or
                                                push me to improve in a certain area. I understand that this
                                                pushing
                                                or challenging is for my benefit so that I may change the areas
                                                that
                                                are preventing me from having a life worth living. Sometimes,
                                                having
                                                someone to help me carry my burdens is helpful.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Other benefits of therapy may include:
                                            </p>
                                            <ul class="list-style-disc">
                                                <li>
                                                    Improved relationships
                                                </li>
                                                <li>
                                                    Ability to set boundaries
                                                </li>
                                                <li>
                                                    Improved coping skills (stress relief and/or management)
                                                </li>
                                                <li>
                                                    Clearer personal goals
                                                </li>
                                                <li>
                                                    More confidence
                                                </li>
                                                <li>
                                                    Ability to emotionally regulate
                                                </li>
                                                <li>
                                                    Coming to terms with past experiences </li>
                                                <li>
                                                    Decreased levels of depression and anxiety </li>
                                                <li>
                                                    Increased self-acceptance </li>
                                            </ul>
                                        </li>
                                        <li class="list-disc">
                                            <p>
                                                The risks of therapy can include:
                                            </p>
                                            <ul class="list-style-disc">
                                                <li>
                                                    Therapy requires an extreme sense of vulnerability and
                                                    looking
                                                    at painful experiences. As these experiences are remembered,
                                                    I
                                                    may experience some uncomfortable emotions, such as sadness,
                                                    guilt, shame, anger, or anxiety.
                                                </li>
                                                <li>
                                                    Because therapy often focuses on unpleasant and painful
                                                    issues, it may seem like things are getting worse. Remember
                                                    that
                                                    things often get worse before they improve.
                                                </li>
                                                <li>
                                                    In order for therapy to be successful, change will be
                                                    required. Most of the time, change is hard and uncomfortable
                                                    (even when it is good).
                                                </li>
                                            </ul>
                                        </li>

                                </div>
                                <div class="">
                                    <div class="row">
                                        <h5>Appointments</h5>
                                    </div>
                                    <div>
                                        <p>
                                            Sessions are 50-60 minutes in duration on an agreed upon day and
                                            time,
                                            as needed. I recognize that the time scheduled for my session is set
                                            aside for me. I am responsible for coming to my session on time. I
                                            understand that if I am late to my session, my appointment will
                                            still
                                            end at the same time it would have ended if I would’ve been on time.
                                            My
                                            therapist has the right to cancel the appointment if I am more than
                                            10
                                            minutes late to my session.
                                        </p>
                                        <p>

                                            If I need to cancel or reschedule a session, I agree to provide my
                                            therapist with 24 hours’ notice. If I miss a session without
                                            canceling,
                                            or cancel with less than 24-hour notice, my therapist may collect a
                                            fee
                                            in the amount of $75 [unless it is agreed upon in writing that I was
                                            unable to attend due to circumstances beyond my control]. It is
                                            important to note that insurance companies do not provide
                                            reimbursement
                                            for cancelled sessions; thus, I will be responsible for the portion
                                            of
                                            the fee as described above.

                                        </p>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="">Signature box</label>
                                        <div class="sign-main">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="benefit_signature" value="{{ old('benefit_signature') }}">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <h5>Telehealth</h5>
                                    </div>
                                    <div>
                                        <p>
                                            I understand that there may be instances where telehealth services are provided through TheraNest. Telehealth includes any video or over the phone sessions. I understand that the therapy I will be receiving
                                            will
                                            not be the same as a direct client/health care provider visit due to
                                            the
                                            fact that I will not be in the same room as my provider. I
                                            understand
                                            that a telehealth consultation has potential benefits including
                                            easier
                                            access to care and the convenience of meeting from a location of my
                                            choosing.
                                        </p>
                                        <p>
                                            I accept responsibility for ensuring that my session is private when using telehealth services through Theranest. The location that I
                                            choose
                                            for my session should be in a quiet, private room where the session
                                            can
                                            not be over heard. If I choose to have a telehealth therapy session
                                            in a
                                            public place, Accepted Therapy Services or my therapist is not
                                            responsible for any information that may be overheard by others. I
                                            understand that my therapist will always be in a confidential
                                            location
                                            when telehealth services are being provided.
                                        </p>
                                        <p>
                                            I understand there are potential risks to this technology, including
                                            interruptions, unauthorized access, and technical difficulties. I
                                            understand that my therapist or I can discontinue the telehealth
                                            consult/visit if it is felt that the videoconferencing connections
                                            are
                                            not adequate for the situation.
                                        </p>
                                        <p>
                                            To maintain confidentiality, I will not share my account access
                                            information with anyone unauthorized to attend the appointment.
                                        </p>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="">Signature box</label>
                                        <div class="sign-main">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="telehealth_signature" value="{{ old('telehealth_signature') }}">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>

                            <div class="Proffesional">
                                <div class="row">
                                    <h3>Professional Fees</h3>
                                </div>
                                <div>
                                    <p>
                                        Payment can be made by credit card, check, cash, CashApp ($AcceptedTherapy), or Venmo (@AcceptedTherapy).There will be a convenience fee of $2.00 for each invoice that is paid for with a credit or debit card. To avoid this fee, I can pay with cash, check (made out to Accepted Therapy Services) CashApp ($AcceptedTherapy) or Venmo (@AcceptedTherapy).
                                    </p>
                                    <p>
                                        Any checks returned to Accepted Therapy Services are subjected to an additional fee of up to $50.00 to cover the bank fee that is incurred. If I refuse to pay my debt, of any fees that are owed to Accepted Therapy Services, I understand that Accepted Therapy Services reserves the right to use an attorney or collection agency to secure payment.
                                    </p>
                                    <p>
                                        In addition to fees accrued during sessions, I understand that a prorated fee will be charged for other professional services that I may require such as report writing, telephone conversations that last longer than 15 minutes, meetings or consultations which I have requested my therapist to attend, or the time required to perform any other service which I may request of my therapist.
                                    </p>

                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="professional_fees_signature" value="{{ old('professional_fees_signature') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    

                                </div>
                                <div class="session">
                                    <div class="row">
                                        <h5>Session Fees</h5>
                                        <p>
                                            The standard fee for the initial intake and each subsequent
                                            session is $150.00 per session. In the event that I choose to
                                            participate in EMDR therapy, it may be recommended that the
                                            sessions will be 90 minutes long with a fee of $225.00. I am
                                            responsible for paying at the time of my session unless prior
                                            arrangements have been made in writing.
                                        </p>
                                    </div>

                                </div>
                                <div class="late-cancellation">
                                    <div class="row">
                                        <h5>Late Cancellation Fees</h5>
                                        <p>
                                            If I am more than 10 minutes late to a session, miss a session
                                            without canceling, or cancel with less than 24-hour notice, a fee in
                                            the amount of $75 [unless it is agreed upon in writing that I was
                                            unable to attend due to circumstances beyond my control] will be
                                            charged. It is important to note that insurance companies do not
                                            provide reimbursement for cancelled sessions; thus, I will be
                                            responsible for the portion of the fee as described above.
                                        </p>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="">Signature box</label>
                                        <div class="sign-main">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="session_fees_signature" value="{{ old('session_fees_signature') }}">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        

                                    </div>

                                </div>
                                <div class="book-fees">
                                    <div class="row">
                                        <h5>Book Fees</h5>
                                        <p>
                                            My therapist has a library of books that is available to me if I
                                            wish to read on various topics that may be discussed during therapy.
                                            Books that are loaned to me should be returned within a reasonable
                                            time frame (two month maximum). If the book is not returned or is
                                            damaged upon return a fee of $25 plus the cover cost of the book,
                                            will be charged to my card on file.
                                        </p>
                                    </div>

                                </div>
                                <div class="court">
                                    <div class="row">
                                        <h5>Court</h5>
                                        <p>
                                            If I anticipate becoming involved in a court case, I will
                                            discuss this fully with my therapist before I waive my right to
                                            confidentiality. If my case requires my therapist’s
                                            participation, I will be expected to pay for the professional
                                            time required even if another party compels my therapist to
                                            testify.
                                        </p>
                                        <li class="list-unstyled">
                                            <p>
                                                The fees for court involvement are:
                                            <ul>
                                                <li>
                                                    Preparation of statement for attorney or legal use: $200
                                                </li>
                                                <li>
                                                    Phone calls regarding legal issues: $50 for 15 minutes or
                                                    $200 an hour
                                                </li>
                                                <li>
                                                    Travel to court/attorney’s office: $25 minimum or $1 per
                                                    mile.
                                                <li>
                                                    Testimony in court (including time spent waiting to be
                                                    called at witness): $250 per hour
                                                </li>
                                            </ul>
                                            </p>
                                        </li>

                                    </div>

                                </div>
                            </div>
                            <div class="insurance">
                                <div class="row">
                                    <h3>Insurance </h3>
                                </div>
                                <p>
                                    In order for us to set realistic treatment goals and priorities, it is
                                    important to evaluate what resources I have available to pay for my
                                    treatment. If I have a health insurance policy, it will usually provide some
                                    coverage for mental health treatment. With my permission, my therapist will
                                    assist me to the extent possible in filing claims if she is an in-network
                                    provider for my insurance. I understand that I am responsible for knowing my
                                    coverage (including co-insurance and co-pays) and for letting Accepted
                                    Therapy Service know if/when my coverage changes. If my therapist is not a
                                    participating provider for my insurance plan, I understand that she will
                                    supply me with a receipt of payment or superbill, upon request, for services
                                    which I can submit to my insurance company for reimbursement. Please note
                                    that not all insurance companies reimburse for out-of-network providers. If
                                    I prefer to use a participating provider, my therapist will refer me to
                                    another mental health professional.
                                </p>
                                <p>
                                    I am aware that most insurance companies require my therapist to provide
                                    them with a clinical diagnosis/diagnoses. (Diagnoses are technical terms
                                    that describe the nature of my problems and whether they are short-term or
                                    long-term problems. All diagnoses come from a book entitled the Diagnostic
                                    and Statistical Manuel 5th Edition or DSM-5. There is a copy in my
                                    therapist’s office that I can look at if I would like to learn more about my
                                    diagnosis, if applicable.). Sometimes my therapist may have to provide
                                    additional clinical information such as treatment plans or summaries, or
                                    copies of the entire record (in rare cases). This information will become
                                    part of the insurance company files and will probably be stored in a
                                    computer. Though all insurance companies claim to keep such information
                                    confidential, I recognize that my therapist does not have control over what
                                    the insurance company does with it once it is in their hands. In some cases,
                                    they may share the information with a national medical information databank.
                                    If I want a copy of any report my therapist submits, I can request it at any
                                    time. By signing this agreement, I agree that Accepted Therapy Services can provide requested information to your carrier if you plan to pay with insurance.
                                </p>
                                <p>
                                    In addition, if I plan to use my insurance, authorization from the insurance
                                    company may be required before they will cover therapy fees. If I do obtain
                                    authorization and it is required, I may be responsible for full payment of
                                    any fees accrued. Many policies leave a percentage of the fee (which is
                                    called co-insurance) or a flat dollar amount (referred to as a co-payment)
                                    to be covered by me (the client). Either amount is to be paid at the time of
                                    the visit via any of the accepted payment methods. In addition, some
                                    insurance companies also have a deductible, which is an out-of-pocket
                                    amount, that must be paid by me (the client) before the insurance company is
                                    willing to begin paying any amount for services. This will typically mean
                                    that I will be responsible to pay for initial sessions with my therapist
                                    until my deductible has been met. The deductible amount may also need to be
                                    met at the start of each calendar year. Once we have all of the information
                                    about your insurance coverage, we will discuss what we can reasonably expect
                                    to accomplish with the benefits that are available and what will happen if
                                    coverage ends before I feel ready to end my sessions. I understand that I
                                    always have the right to pay for my therapy services out-of-pocket if I wish
                                    to avoid any of the problems described above.
                                </p>
                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="book_fees_signature" value="{{ old('book_fees_signature') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="proff-records">
                                <div class="row">
                                    <h3>Professional Records</h3>
                                </div>
                                <p>
                                    I understand that my therapist is required to keep appropriate records of
                                    the therapy services that are provided. My records are maintained in a
                                    secure electronic medical record (EMR) through TheraNest. The records kept
                                    in my EMR may include information such as: dates of services, reasons for
                                    seeking services, goals for treatment, progress in treatment, prognosis,
                                    diagnosis, topics discussed in sessions, and billing records.
                                </p>
                                <p>
                                    I have access to my records in most instances, upon request, unless there
                                    are unusual circumstances that may result in emotional distress or harm me
                                    if were to review my records. Because these are professional records, there
                                    is a chance that they may be misinterpreted and/or upsetting to untrained
                                    readers. For this reason, it is recommended that if I wish to review my
                                    records, I initially review them with my therapist or have them forwarded to
                                    another mental health professional to discuss the contents. If my therapist
                                    refuses my request for access to my records, I have a right to have her
                                    decision reviewed by another mental health professional, which will be
                                    discussed with me upon my request. I also have the right to request that a
                                    copy of my file be made available to any other health care provider at my
                                    written request.
                                </p>

                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="professional_record_signature" value="{{ old('professional_record_signature') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="confiden">
                                <div class="row">
                                    <h3>Confidentiality</h3>
                                </div>
                                <p>
                                    The therapeutic relationship is a confidential relationship where no
                                    information will be disclosed about me, or the fact that I am receiving
                                    services from Accepted Therapy Services, without my written consent.
                                    Healthcare providers are legally allowed to use or disclose records or
                                    information for treatment, payment, and healthcare operations and purposes.
                                    I understand that my therapist does not routinely disclose information in
                                    such circumstances, so she will require my permission in advance, either
                                    through my consent at the onset of the therapeutic relationship or through
                                    my written authorization at any time a need for disclosure arises. I may
                                    revoke my permission, in writing, at any time, by contacting Accepted
                                    Therapy Services.
                                </p>
                                <div class="limits-confi">
                                    <div class="row">
                                        <h5>Limits to Confidentiality</h5>
                                        <p>
                                            As mentioned above, the information that I share with my
                                            therapist is confidential unless a written consent is received.
                                            There are; however, a few limits to confidentiality (or
                                            instances in which my therapist may disclose confidential
                                            information without my consent) that I should be aware of before
                                            beginning services with Accepted Therapy Services.
                                        </p>
                                    </div>
                                    <div>
                                        <ul class="upper-alpha">
                                            <li>
                                                Suicidal or Homicidal Ideations
                                            </li>
                                            <ul class="upper-roman">
                                                <li>
                                                    If I (the client) threaten or attempt to commit suicide
                                                    or
                                                    otherwise conducts myself in a manner in which there is
                                                    a
                                                    substantial risk of incurring serious bodily harm then
                                                    the
                                                    proper authorities will be notified.
                                                </li>
                                                <li>
                                                    If I (the client) threaten grave bodily harm or death to
                                                    another person then the proper authorities and/or the
                                                    person
                                                    who harm is threatened against will be notified.
                                                </li>
                                            </ul>
                                            <li>
                                                Abuse or Neglect
                                            </li>
                                            <ul class="upper-roman">
                                                <li>
                                                    If there is disclosure or reasonable suspicion that I
                                                    (the client) or other named victim is the perpetrator,
                                                    observer of, or actual victim of neglect, physical
                                                    abuse,
                                                    emotional abuse, or sexual abuse of children under the
                                                    age
                                                    of 18. I understand that my therapist is a mandated reporter and will be required to report the suspicion of or abuse to the Department of Child Protective Services in my state.
                                                </li>
                                                <li>
                                                    If there is a disclosure or reasonable suspicion of
                                                    elder abuse then a report will be made to Mississippi
                                                    Department of Human Services.
                                                </li>
                                                <li>
                                                    If a report needs to be made, my therapist will try to
                                                    notify me prior to the report being made; however, I
                                                    understand that <i>
                                                        my therapist is not required to notify me prior to
                                                        reporting.
                                                    </i>
                                                </li>
                                            </ul>
                                            <li>
                                                Subpoenas
                                            </li>
                                            <ul class="upper-roman">
                                                <li>
                                                    If a court of law issues a legitimate subpoena, the
                                                    information, as specifically stated on the subpoena may
                                                    be
                                                    released.
                                                </li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div>
                                        <p>
                                            The staff of Accepted Therapy Services meets weekly to discuss cases
                                            including but not limited to progress in treatment, barriers to
                                            progress, and/or other concerns that may be noted by my therapist.
                                        </p>
                                        <p>
                                            Occasionally, my therapist may need to consult with other
                                            professionals in their areas of expertise in order to provide the
                                            best treatment for me. I understand that information about me may be
                                            shared in this context without using my name or any other protected
                                            health information (PHI).
                                        </p>
                                    </div>


                                </div>

                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="confidentiality_signature" value="{{ old('confidentiality_signature') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="parents-minors">
                                <div class="row">
                                    <h3>Parents and Minors</h3>
                                    <p>
                                        While privacy in therapy is crucial to successful progress, parental
                                        involvement can also be essential. I understand that it is the policy of
                                        Accepted Therapy Services not to provide treatment to a child under age
                                        13
                                        unless the child agrees that information can be shared when necessary
                                        with a
                                        parent.
                                    </p>
                                    <p>
                                        For children 14 and older, an agreement between the client and the
                                        parents
                                        allowing the therapist to share general information about treatment
                                        progress
                                        and attendance, as well as a treatment summary upon completion of
                                        therapy.
                                        All other communication will require the child’s agreement, unless there
                                        is
                                        a safety concern (see above section on limits to confidentiality).
                                        Accepted
                                        Therapy Services will make every effort to notify the child of any
                                        intention
                                        to disclose information ahead of time and make every effort to handle
                                        any
                                        objections that are raised.
                                    </p>
                                </div>
                            </div>
                            <div class="contacting-therapist">
                                <div class="row">
                                    <h3>Contacting My Therapist</h3>
                                    <p>
                                        I understand that Accepted Therapy Services is <b>NOT</b> an Emergency
                                        Service
                                        and in the event of an emergency, I will use a phone to call 911. This
                                        includes suicidal ideations, homicidal ideations, and other mental
                                        health concerns I may have. Though my provider and I may be in direct
                                        contact through the Accepted Therapy Services or TheraNest EMR, I
                                        understand that my therapist does not provide any medical or healthcare
                                        services or advice including, but not limited to, emergency or urgent
                                        medical services.
                                    </p>
                                    <p>

                                        I understand that my therapist is not often immediately available by
                                        telephone. My therapist may not always answer their phone due to being
                                        in a session with another client or out of the office. At these times, I
                                        may leave a message on the confidential voicemail of Accepted Therapy
                                        Services and my call will be returned as soon as possible. I understand
                                        that it may take up to two business days for calls to be returned. If for any unseen reason I do not hear from my therapist or they are unable to reach me and I feel that I cannot wait for a return call or am unable to keep myself safe, I will 1) Call 911 or 2) go to my local hospital emergency room.

                                    </p>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Signature box</label>
                                    <div class="sign-main">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="parents_minor_signature" value="{{ old('parents_minor_signature') }}">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="rights">
                                    <div class="row">
                                        <h5>Rights</h5>
                                    </div>
                                    <div>
                                        <p>If I am unhappy with what is happening in therapy, I will talk with
                                            Nikki Dear, LCSW, or my therapist to provide her with an opportunity
                                            to respond to my concerns. Such comments will be taken seriously and
                                            handled with care and respect. I may also request that I be referred
                                            to another therapist and am free to end therapy at any time.
                                        </p>
                                        <p>I have the right to considerate, safe and respectful care, without
                                            discrimination as to race, ethnicity, color, gender, sexual
                                            orientation, age, religion, national origin, or source of payment.
                                        </p>
                                        <p>I have the right to ask questions about any aspects of therapy and
                                            about my therapist’s specific training and experience.
                                        </p>
                                        <p>I have the right to expect that the relationship will be professional
                                            and will not include social or sexual relationships with clients or
                                            with former clients. If we see each other accidentally outside of
                                            the therapy office, I understand that my therapist will not
                                            acknowledge me first. My right to privacy and confidentiality
                                            extends to public settings and my therapist does not wish to
                                            jeopardize my privacy. However, if I acknowledge my therapist first,
                                            she may speak briefly with me, but will not engage in any lengthy
                                            discussions in public or outside of the therapy office.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="signing-form">
                                    <div class="row">
                                        <h4>By signing this form, I certify: </h4>
                                    </div>
                                    <div>
                                        <p>
                                            I understand that the service provided through Accepted Therapy
                                            Services is not intended for crisis situations and urgent needs. In
                                            a crisis situation, I agree to call 911 or local emergency services,
                                            or visit the nearest emergency room. Information shared with my
                                            therapist is confidential except in the following circumstances: If
                                            I present as a danger to myself or others, mandated reporting of
                                            abuse of children or elders, or if I sign a release of information.
                                        </p>
                                        <p>
                                            That I have been given ample opportunity to ask questions and that
                                            any questions have been answered to my satisfaction.
                                        </p>
                                        <p>
                                            That I have read or had this form read and/or had this form
                                            explained to me.
                                        </p>
                                    </div>
                                    <div class="mt-5">
                                        <div class="row signature pt-5">
                                            <div class="col-lg-6 sign-fields">
                                                <input type="text" class="inputField" placeholder="Signature" name="rights_signature" value="{{ old('rights_signature') }}">
                                                <p class="position-relative"> Signature</p>
                                            </div>
                                            {{-- <div class="col-lg-6 sign-fields">
                                                <input type="text" class="inputField" placeholder="Printed Name" name="printed_name" value="{{ old('printed_name') }}">
                                                <p class="position-relative">Printed Name</p>
                                            </div> --}}
                                            <div class="col-lg-6 sign-fields">
                                                <input type="datetime-local" class="inputField"  name="inform_consent_date_time" value="{{ old('inform_consent_date_time') }}">
                                                <p class="position-relative">Date/Time</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row signature mt-5">
                                            <div class="col-lg-6 sign-fields">
                                                <input type="text" class="inputField" placeholder="Witness" name="witness" value="{{ old('witness') }}">
                                                <p class="position-relative"> Witness</p>
                                            </div>
                                            
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center from-btn mb-5 mt-3">
                                <a href="javascript:void(0);" class="w-100">
                                    <button type="submit" class="btn">
                                        Submit
                                    </button>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>



            </fieldset>
        </div>
    </div>


</section>

@include('common.accepted_therapy_border')

@endsection

@push('scripst')


@push('scripts')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}');
    </script>
@endforeach
@endif

@if (session()->has('intake_consent_form_success'))
    <script>
        toastr.success('{{ session()->get('intake_consent_form_success') }}');
    </script>
@endif

@endpush