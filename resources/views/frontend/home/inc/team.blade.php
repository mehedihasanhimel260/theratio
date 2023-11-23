<section>
    <div class="wm wm-border dark wow fadeInDown ">03</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Our Team</h1>
                <div class="separator"><span><i class="fa fa-square"></i></span></div>
            </div>


            <div class="spacer-single"></div>
            @foreach ($teams as $team)
                @php
                    $delay = $loop->iteration == 2 ? '0.2s' : ($loop->iteration == 3 ? '0.3s' : ($loop->iteration == 4 ? '0.4s' : ''));
                @endphp
                <div class="col-md-3 wow fadeInRight" data-wow-delay="{{ $delay }}">
                    <div class="de-team-contact s2">
                        <img src="{{ asset($team->image) }}" class="img-responsive" alt="" />
                        <h3>{{ $team->name_english }}</h3>
                        {{ $team->desig_english }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
