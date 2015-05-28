@extends('layout.main')

@section('content')
  
  
  <div id="container">
      <div class="entry-heading"><div class="entry-center">Jaunākie projekti</div></div>
<hr>
        <div id="css-script-menu">
  <div class="css-script-center">
    <div class="css-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* CSSScript Demo Page */
google_ad_slot = "3025259193";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
      <script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
    <div class="css-script-clear"></div>
  </div>
</div>
<div class="accordion">
  <ul>
    <li>
      <div> <a href="#">
        <h2>BLABLABLA</h2>
        <p>BLABLABLA_BLABLA</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="#">
        <h2>ERROR</h2>
        <p>ERRORERRORERRORERRORERRORERRORERRORERRORERRORERRORERROR</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="#">
        <h2></h2>
        <p></p>
        </a> </div>
    </li>
    <li>
      <div> <a href="#">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="#">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a> </div>
    </li>
    <li>
      <div> <a href="#">
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
      <div class="atsauksmes">
        <div class="entry-heading"><div class="entry-center">Klientu atsauksmes</div></div>
<hr>
                <div class="atsauksme-left"> 
                    <blockquote>
                        <p>Lieliska kompānija!</p>
                        <cite> Andris </cite>
                    </blockquote>
                </div>
                <div class="atsauksme-middle">
                    <blockquote>
                        <p>Rekomendējam!</p>
                        <cite> Borats </cite>
                    </blockquote>
                </div>
                <div class="atsauksme-right">
                    <blockquote>
                        <p>THE HORROR!</p>
                        <cite> DRAGON SLAYER </cite>
                    </blockquote>
                </div>
        </div>
      
      <div class="latvuraksti">
          <div class="entry-heading"><div class="entry-center">Latvju raksti</div></div>
<hr>
          <div class="raksti">
           <div id="slider">
            <div class="slider-content">
                <ul class="slider-list">
                    <li><img src="https://s-media-cache-ak0.pinimg.com/736x/96/c2/00/96c200b8effb042084e8e91f877c4b8a.jpg" alt=""/></li>
                    <li>
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/96/c2/00/96c200b8effb042084e8e91f877c4b8a.jpg" alt=""/>
                        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in tellus ut dolor tempus laoreet. Fusce erat est, ullamcorper et libero nec, tempus cursus lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ultricies consectetur ligula, id adipiscing dui pellentesque at.</div>
                        <div class="slide-text second"></div>
                    </li>
                    <li><img src="https://s-media-cache-ak0.pinimg.com/736x/96/c2/00/96c200b8effb042084e8e91f877c4b8a.jpg" alt=""/></li>
                    <li>
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/96/c2/00/96c200b8effb042084e8e91f877c4b8a.jpg" alt=""/>
                        <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in tellus ut dolor tempus laoreet. Fusce erat est, ullamcorper et libero nec, tempus cursus lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ultricies consectetur ligula, id adipiscing dui pellentesque at.</div>
                    </li>
                </ul>
            </div>
        </div>
              
          <script>window.onload = function () {
    /*************************************
     *   base
     **************************************/

    // requestAnimFrame
    window.requestAnimFrame = (function(){
        return  window.requestAnimationFrame   ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            function( callback ){
                window.setTimeout(callback, 1000 / 60);
            };
    })();
    //clear requestAnimFrame
    window.clearAnimation = (function() {
        return window.cancelRequestAnimationFrame || window.webkitCancelRequestAnimationFrame|| window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame ||
            function(id){
                clearTimeout(id)
            };
    })();

    var slider = document.querySelector("#slider");

    var slide_count = slider.children[0].children[0].childElementCount;
    var slide_width = slider.children[0].children[0].firstElementChild.clientWidth;
    var slider_width = slide_count*slide_width;

    // slider width
    slider.children[0].children[0].style.width = slider_width+"px";

    // add Class to slide
    for(var c=0; c<slide_count; c++){
        slider.children[0].children[0].children[c].className = "slide-"+(c+1);
    }


    /*************************************
     *   navigate
    **************************************/
    var navigate = document.createElement('div');
    navigate.className = 'navigate';
    navigate.innerHTML = '<a href="#" class="prev">prev</a><a href="#" class="next">next</a>';
    slider.appendChild(navigate);

    // prev, next click
    var prevLink = slider.children[1].children[0];
    var nextLink = slider.children[1].children[1];
    var offset=0;
    var y=slide_width;
    var sliding;
    var currentItem;
    var currentClassName;
    var firstClick = false;
    function current_Item(){
        currentItem = offset/slide_width;
        for(var i=0; i<slide_count; i++){
            slider.children[2].children[i].className = "";
        }
        slider.children[2].children[currentItem].className = "current";
        // Show text
        for(var u=0; u<slider.children[0].children[0].children[currentItem].childElementCount; u++){
            if(slider.children[0].children[0].children[currentItem].children[u].classList[0] == "slide-text"){
                currentClassName = slider.children[0].children[0].children[currentItem].children[u].className;
                slider.children[0].children[0].children[currentItem].children[u].className = currentClassName+" show";
            }
        }
        firstClick = true;
    }
    function hideText(){
        if(firstClick == true){
            for(var u=0; u<slider.children[0].children[0].children[currentItem].childElementCount; u++){
                if(slider.children[0].children[0].children[currentItem].children[u].classList[0] == "slide-text"){
                    currentClassName = slider.children[0].children[0].children[currentItem].children[u].className;
                    currentClassName = currentClassName.replace(" show", "");
                    slider.children[0].children[0].children[currentItem].children[u].className = currentClassName;
                }
            }
        }
    }
    function nextClick(){
        if(offset==slider_width-slide_width){
            clearAnimation(sliding);
            return false
        }
        offset+=25;
        slider.children[0].children[0].style.left = -offset+"px";
        if(offset>=y){
            clearAnimation(sliding);
            y+=slide_width;
            // add current class
            current_Item();
        }
    }
    function prevClick(){
        if(offset==0){
            clearAnimation(sliding);
            return false
        }
        offset-=25;
        slider.children[0].children[0].style.left = -offset+"px";
        if(offset<=y-slide_width*2){
            clearAnimation(sliding);
            y-=slide_width;
            // add current class
            current_Item();
        }
    }
    // click event
    nextLink.onclick = function(){
        hideText();
        (function animloop(){
            sliding = requestAnimFrame(animloop);
            nextClick();
        })();
        return false
    };
    prevLink.onclick = function(){
        hideText();
        (function animloop(){
            sliding = requestAnimFrame(animloop);
            prevClick();
        })();
        return false
    };


    /*************************************
     *   pagination
    **************************************/
    var paginationIndex;
    var pagination = document.createElement('ul');
    pagination.className = 'paginations';
    for(var i=0;i<slide_count;i++){
        var paginationItem = document.createElement('li');
        paginationItem.innerHTML = i+1;
        pagination.appendChild(paginationItem);
    }
    slider.appendChild(pagination);
    slider.children[2].children[0].className = "current";

    function paginationClick(){
        if(offset<paginationIndex*slide_width){
            offset+=30;
            slider.children[0].children[0].style.left = -offset+"px";
            if(offset==paginationIndex*slide_width){
                clearAnimation(sliding);
                y=slide_width*paginationIndex+slide_width;
                // add current class
                current_Item();
            }
        } else if(offset>paginationIndex*slide_width){
            offset-=30;
            slider.children[0].children[0].style.left = -offset+"px";
            if(offset==paginationIndex*slide_width){
                clearAnimation(sliding);
                y=slide_width*paginationIndex+slide_width;
                // add current class
                current_Item();
            }
        } else {
            clearAnimation(sliding);
            return false
        }
    }
    for(var i=0; i<slide_count; i++){
        (function(index){
            slider.children[2].children[i].onclick = function(){
                paginationIndex = index;
                hideText();
                (function animloop(){
                    sliding = requestAnimFrame(animloop);
                    paginationClick();
                })();
                return false
            }
        })(i);
    }
};</script>
      </div>
      </div>
</div>
@stop

