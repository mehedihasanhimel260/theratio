@extends('frontend.layout')
@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                    <ul class="crumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->


    <div id="content" class="no-top mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <form id='contact_form' action="{{ route('contactdata.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb10">
                                <h3>Send Us Message</h3>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <input type='text' name='name_english' class="form-control" placeholder="Your Name"
                                        required>
                                </div>

                                <div>
                                    <input type='email' name='email' class="form-control" placeholder="Your Email"
                                        required>
                                </div>

                                <div>
                                    <input type='text' name='phone' class="form-control" placeholder="Your Phone"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <textarea name='message_english' class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type='submit' class="btn btn-line mt20 p-2">Submit Form</button>
                            </div>
                        </div>
                    </form>


                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span><strong>Address:</strong> {{ $contact->address_english }}</span>
                            <span><strong>Phone:</strong>{{ $contact->phone }}</span>
                            <span><strong>Fax:</strong>{{ $contact->phone }}</span>
                            <span><strong>Email:</strong><a
                                    href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span>
                            <span><strong>Web:</strong><a
                                    href="{{ $contact->website_link }}">{{ $contact->website_link }}</a></span>
                            <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <section id="de-map" aria-label="map-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-container map-fullwidth">
                            {!! $contact->map_link !!}
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.7152203584424!2d-118.2453181849353!3d34.05117548060617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c648d9808fbd%3A0xb79dfbc6ae338c12!2s100%20S%20Main%20St%2C%20Los%20Angeles%2C%20CA%2090012%2C%20USA!5e0!3m2!1sen!2sid!4v1592143290578!5m2!1sen!2sid"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
