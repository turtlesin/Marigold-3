@extends('layout.main')

@section('content')

<div class="galerija">
     <input type="checkbox" id="pic-1"/>
<label for="pic-1" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-2"/>
<label for="pic-2" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-3"/>
<label for="pic-3" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-4"/>
<label for="pic-4" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-5"/>
<label for="pic-5" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-6"/>
<label for="pic-6" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-7"/>
<label for="pic-7" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-8"/>
<label for="pic-8" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-9"/>
<label for="pic-9" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-10"/>
<label for="pic-10" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-11"/>
<label for="pic-11" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<input type="checkbox" id="pic-12"/>
<label for="pic-12" class="lightbox"><img src="http://unsplash.it/800/600?image=24"/></label>
<div class="grid">
  <label for="pic-1" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-2" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-3" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-4" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-5" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-6" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-7" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-8" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-9" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-10" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-11" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
  <label for="pic-12" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/></label>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
@stop