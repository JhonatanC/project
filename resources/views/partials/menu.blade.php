<ul class="nav navbar-nav">
    @foreach($menu as $me)
        @if($me->class == "dropdown")
            <li class="{{ $me->class }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$me->name}}<span class="caret"></span></a>
                @foreach($subMenu as $sub)
                    @if($sub->class == "dropdown-menu")
                        <ul class="{{ $sub->class }}">
                            @foreach($subMenu as $sub)
                                <li class="">
                                    <a href="{{ $sub->url }}" >{{ $sub->url }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </li>
        @else
            <li>
                <a href="{{ $me->url }}" class="{{ $me->class }}">{{$me->name}}</a>
            </li>
        @endif
    @endforeach
</ul>