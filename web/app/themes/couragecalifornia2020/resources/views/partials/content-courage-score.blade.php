<section id="intro" style="background-image: url({{ $data['top_background']['url'] }});">
    <div class="container text-center">
        {!! the_content() !!}
        <a class="button arrow" href="https://couragescore.org" target="_blank">Courage Score Website</a>
    </div>
</section>

 {{-- Methodology--}}
 @php $section = $data['methodology'] @endphp
 <section id="methodology" class="banner bottom-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image">
                @php $image = $section['image'] @endphp
                @if( !empty( $image ) )
                    <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
            <div class="col-md-6 text slide-up">
                <h2>{!! $section['title'] !!}</h2>
                {!! $section['text'] !!}
            </div>
        </div>
    </div>
</section>

 {{-- All Stars--}}
 @php $section = $data['allstar'] @endphp
 <section id="allstar" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text slide-up">
                <h2>{!! $section['title'] !!}</h2>
                {!! $section['text'] !!}
            </div>
            <div class="col-md-6 image">
                @php $image = $section['image'] @endphp
                @if( !empty( $image ) )
                <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
        </div>
    </div>
</section>

 {{-- Vote --}}
 @php $section = $data['vote'] @endphp
 <section id="vote" class="banner  bottom-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image">
                @php $image = $section['image'] @endphp
                @if( !empty( $image ) )
                <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
            <div class="col-md-6 text slide-up">
                <h2>{!! $section['title'] !!}</h2>
                {!! $section['text'] !!}
                <a class="button arrow" href="https://couragescore.org" target="_blank">Courage Score Website</a>
            </div>
        </div>
    </div>
</section>

{{-- Partners --}}
@if(isset($data['partners']))
    @php $section = $data['partners'] @endphp
    <section id="partners">
        <div class="container">
            <h2>{{ $section['title'] }}</h2>
            {!! $section['text'] !!}
            <div class="list">
                {!! $section['list'] !!}
            </div>
        </div>
    </section>
@endif