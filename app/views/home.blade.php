@extends('layout.main')

@section('content')
          @if ( Session::has('flash_message') )
<div class="{{ Session::get('flash_type') }}">
      <h5>{{ Session::get('flash_message') }}</h5>
</div>
<br>
@endif
  
  <div id="container">
      <div class="entry-heading"><div class="entry-center">Jaunākie projekti</div></div>
<hr>
<!--akardiona galerijas sadaļas sākums-->
<div class="accordion">
  <ul>
    <li>
      <div> <a href="{{URL::to('store/view/24')}}">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="{{URL::to('store/view/28')}}">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="{{URL::to('store/view/25')}}">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="{{URL::to('store/view/26')}}">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="{{URL::to('store/view/27')}}">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
  </ul>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
<!--akordiona galerijas sadaļas beigas-->
<!-- atsauksmju sadaļa-->
      <div class="review">
        <div class="entry-heading"><div class="entry-center">Klientu atsauksmes</div></div>
<hr>
<table class="show-first">
    <tr>
        <td>
            <blockquote>
                        <p>Lieliska kompānija!</p>
                        <cite> Andris </cite>
                    </blockquote>
        </td>
        <td>
            <blockquote>
                        <p>Rekomendējam!</p>
                        <cite> Borats </cite>
                    </blockquote>
        </td>
        <td>
            <blockquote>
                        <p>THE HORROR!</p>
                        <cite> DRAGON SLAYER </cite>
                    </blockquote>
        </td>
    </tr>
</table>
        </div>
<!--atsauksmju sadaļas beigas -->

 <!--Sadaļa latvju rakstiem ar slaidu galeriju -->
      <div class="latvian">
          <div class="entry-heading"><div class="entry-center">Latvju raksti</div></div>
<hr>
         

<div id="slideshow-wrap">
        <input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
        <input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
        <input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
        <input type="radio" id="button-4" name="controls"/>
        <label for="button-4"></label>
        <input type="radio" id="button-5" name="controls"/>
        <label for="button-5"></label>
        <label for="button-1" class="arrows" id="arrow-1">></label>
        <label for="button-2" class="arrows" id="arrow-2">></label>
        <label for="button-3" class="arrows" id="arrow-3">></label>
        <label for="button-4" class="arrows" id="arrow-4">></label>
        <label for="button-5" class="arrows" id="arrow-5">></label>
        <div id="slideshow-inner">
            <ul>
                <li id="slide1">
                    <img src="http://alfajums.lv/assets/upload/images/04.05.2014/815ea72a1b9393e3fb0c787870f8fdfb.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Ugunskrusts</h2>
                            <p>Ugunskrusts, saukts arī par pērkona zīmi, sargā pret ļaunumu.</p>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <img src="http://alfajums.lv/assets/upload/images/04.05.2014/fc8e35a5929a2811a9b2a552dbcbf66e.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Zalkša zīme</h2>
                            <p>Zalkša zīme baltu ticējumos ir gudrības un zintniecības simbols.</p>
                        </div>
                    </div>
                </li>
                <li id="slide3">
                    <img src="http://alfajums.lv/assets/upload/images/04.05.2014/4f6342ddf20ef7cf27b18737a7fbd2a6.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Māras krusts</h2>
                            <p>Māras krusts jeb krustu krusts – uguns un tās robežsituāciju simbols. Tā ir laimes un mīlas zīme.</p>
                        </div>
                    </div>
                </li>
                <li id="slide4">
                    <img src="http://alfajums.lv/assets/upload/images/04.05.2014/6edf856c40f8bc881cdab959e16611fa.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-4"/>
                        <label for="show-description-4" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Auseklītis</h2>
                            <p>Auseklis ir rīta zvaigznes simbols, kas simbolizē gaismas uzvaru cīņā pret tumsu. </p>
                        </div>
                    </div>
                </li>
                <li id="slide5">
                    <img src="http://alfajums.lv/assets/upload/images/04.05.2014/23bc12727666d020b0b31b90e55771f4.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-5"/>
                        <label for="show-description-5" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Austras koks</h2>
                            <p>Austras (arī Saules) koks ir saikne ar zemi un debesīm, un visu esošo pasauli, caur saknēm, stumbru un zariem.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
      </div><hr style="height:300pt; visibility:hidden;" /></div>
 <div id="footer">
 
      <footer>
          @include('includes.footer')
      </footer>
 </div>
      <!-- -->


@stop

