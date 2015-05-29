@extends('layout.main')

@section('content')
<div class="entry-heading"><div class="entry-center">Projekti ar kolektīviem un uzņēmumiem</div></div>
<hr>
<div class="galerija">
     <input type="checkbox" id="pic-1"/>
<label for="pic-1" class="lightbox"><img src="http://labiedarbi.lv/upload/08.01.2014/90ae16a5f8d990d509c3325c5a938b00.jpg"/></label>
<input type="checkbox" id="pic-2"/>
<label for="pic-2" class="lightbox"><img src="http://www.liepajaskc.lv/wp-content/uploads/2011/09/LAIKS_lapai.jpg"/></label>
<input type="checkbox" id="pic-3"/>
<label for="pic-3" class="lightbox"><img src="http://www.marupe.lv/wp-content/uploads/2015/01/koris-Sonante.jpg"/></label>
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
<div class="grid">
    <label for="pic-1" class="grid-item"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT46O75RzTDvgYv9zXl_1H4AB49OlD6oCACjuql3Ky5ZX8IZElI4g"/><p>Koris Sonante</p></label>
  <label for="pic-2" class="grid-item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbsIPcKkEnGzXyySIIz8Pp1AaBGhD3BaIMtpTUUmdQqbxbzL_fJA"/><p>Koris Laiks</p></label>
  <label for="pic-3" class="grid-item"><img src="http://i.picresize.com/images/2015/05/29/DnYZ.jpg"/><p>Koris Sonante</p></label>
  <label for="pic-4" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/><p>Teksts 4</p></label>
  <label for="pic-5" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/><p>Teksts 5</p></label>
  <label for="pic-6" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/><p>Teksts 6</p></label>
  <label for="pic-7" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/><p>Teksts 7</p></label>
  <label for="pic-8" class="grid-item"><img src="http://unsplash.it/400/300?image=24"/><p>Teksts 8</p></label>
</div>
<hr style="height:450pt; visibility:hidden;" />
      <!--Latvju rakstu sadaļas beigas -->
      <!-- -->
      <footer>
          @include('includes.footer')
</footer>
@stop