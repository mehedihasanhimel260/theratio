@php
    $logos = App\Models\Logo::latest()->first();

    $WebsiteLink = App\Models\WebsiteLink::latest()->first();
    $footer = App\Models\Footer::latest()->first();
@endphp
<footer class="style-2">
    <div class="container">
        <div class="row align-items-middle">
            <div class="col-md-3">
                <img src="{{ asset($logos->frontend_logo_image) }}" class="logo-small" alt=""><br>
            </div>

            <div class="col-md-6">
                &copy; Copyright 2023 - <span class="id-color">{{ $footer->copy_right_text }}</span>
            </div>

            <div class="col-md-3 text-right">
                <div class="social-icons">

                    {{-- `email`, `phone`, `address_english`, `address_bangla`, `website_link`, `facebook`, `instagram`, `linkedIn`, `twitter`, `telegram`, `youtube`, `map_link`, --}}
                    <a href="{{ $WebsiteLink->facebook }}"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="{{ $WebsiteLink->twitter }}"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="{{ $WebsiteLink->instagram }}"><i class="fa fa-instagram fa-lg"></i></a>
                    <a href="{{ $WebsiteLink->linkedIn }}"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a href="{{ $WebsiteLink->telegram }}"><i class="fa fa-telegram fa-lg"></i></a>
                    <a href="{{ $WebsiteLink->youtube }}"><i class="fa fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>


    <a href="#" id="back-to-top"></a>
</footer>
