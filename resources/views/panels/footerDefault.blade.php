<footer class="page-footer text-center text-md-left">
  <div class="call-to-action text-center my-4 container">
    <div class="row">
      <div id="footer-slide" class="owl-carousel owl-theme text-center">
      @foreach ($footer as $item)
        <div class="item ">
          <div class="d-flex align-items-center justify-content-center">
            <a href="{{$item->others}}" target="_blank" rel="noopener noreferrer">
              <img
                src="{{asset('images/post/'.$item->file)}}"
                class="img-fluid px-4 img-sm" alt="{{$item->title}}">
            </a>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </div>
  <div class="footer-copyright py-3 text-center">
    <a href="https://coronalampungbarat.id/">coronalampungbarat.id</a>
  </div>
</footer>
