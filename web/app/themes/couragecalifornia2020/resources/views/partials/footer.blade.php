<footer class="main-footer content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 left">
        @php dynamic_sidebar('left-footer') @endphp
        <div class="copyright">
          {!! $copyright !!}
        </div>
      </div>
      <div class="col-md-6 right">
        @include('partials.newsletter-signup')
        @php dynamic_sidebar('right-footer') @endphp
      </div>
    </div>
  </div>
</footer>
