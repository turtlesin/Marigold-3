<div class="navcont">
    <div class="nav">
        <ul>
            <li>
                <a href="{{ URL::route('home')}}">
                    Sākums
                </a>
            </li>
            <li><a href="{{ URL::route('par-mums')}}">Par mums</a></li>
            <li class="drop">
                <a href="{{ URL::route('projekti')}}">Projekti</a>
                    <div class="dropdownContain">
                        <div class="dropOut">
                            <ul>
                                <li><a href="{{ URL::route('projekti-individualie')}}">Individuālie</a></li>
                                <li><a href="{{URL::route('projekti-kolektivie')}}">Vairumā</a></li>
                            </ul>
                        </div>
                    </div>
            </li>
             @if(Auth::check())
            @if(Auth::user()->admin == 1)
            <li class="drop">
               {{HTML::link('/blogs', 'Blogs')}}
                <div class="dropdownContain">
                <div class="dropOut">
                    <ul>
                        <li>{{HTML::link('/blogs', 'Blogs')}}</li>
                         <li>{{ link_to_route('posts.index', 'Posts')}}</li>
                    </ul>
                </div>
                </div>
            </li>
            @else
            <li class="drop">{{HTML::link('/blogs', 'Blogs')}}</li>
            @endif
            @else
            <li class="drop">{{HTML::link('/blogs', 'Blogs')}}</li>
            @endif
            
            @if(Auth::check())
            @if(Auth::user()->admin == 1)
            <li class="drop">
                <a href="{{URL::route('store')}}">Idejas dāvanām</a>
                <div class="dropdownContain">
                <div class="dropOut">
                    <ul>
                         <li>{{HTML::link('admin/categories','Kategorijas')}}</li>
                         <li>{{HTML::link('admin/products','Produkti')}}</li>
                    </ul>
                </div>
                </div>
            </li>
            @else
            <li class="drop"><a href="{{URL::route('store')}}">Idejas dāvanām</a></li>
            
            @endif
            @else
            <li class="drop"><a href="{{URL::route('store')}}">Idejas dāvanām</a></li>
            
            @endif
            
            <li><a href="{{ URL::route('kontakti')}}">Kontakti</a></li>
            <li><a href="{{ URL::route('cenas')}}">Cenas</a></li>
            <li><a href="{{ URL::route('iespejas')}}">Iespējas</a></li>
            @if(Auth::check())
            <li class="drop">
                <a>Profils</a>
                <div class="dropdownContain">
                <div class="dropOut">
                    <ul>
                        <li><a href="{{ URL::route ('account-change-password')}}">Mainīt paroli</a></li>
                        <li>{{HTML::link('account/signout','Atslēgties')}}</li>
                    </ul>
                </div>
                </div>
            </li>
            <li><a href="{{URL::to('store/cart')}}">{{HTML::image("img/black-cart.png", "Grozs")}}</a></li>
            @else
            <li class="drop">
                {{HTML::link('account/signin','Ienākt')}}
                <div class="dropdownContain">
                <div class="dropOut">
                    <ul>
                         <li>{{HTML::link('account/signin','Ienākt')}}</li>
                         <li><a href="{{URL::route('account-forgot-password')}}">Aizmirsi paroli?</a></li>
                         <li>{{HTML::link('account/newaccount','Izveidot profilu')}}</li>
                    </ul>
                </div>
                </div>
            </li>
            @endif
        </ul>
    </div>
</div>
