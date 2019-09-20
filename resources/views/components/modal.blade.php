<div id="{{ $id }}" class="modal-container">
  <div class="overlay"></div>
  <div class="modal">
    <div class="close-button">
      <img src="@asset('images/close.svg')" alt="">
    </div>
    {{ $contents }}
  </div>
</div>