<ul class="nav navbar-nav">
    @foreach($menu->links() as $link)
        @if($link->class == "dropdown")
            <li class="{{ $link['class'] }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $link['name'] }}<span class="caret"></span></a>
                @foreach($menu->subLinks() as $sub)
                    @if($sub->class == "dropdown-menu")
                        <ul class="{{ $sub['class'] }}">
                            @foreach($menu->subLinks() as $sub)
                                <li class="">
                                    <a href="{{ $sub['url'] }}" >{{ $sub['url'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </li>
        @else
            <li>
                <a href="{{ $link['url'] }}" class="{{ $link['class'] }}">{{ $link['name'] }}</a>
            </li>
        @endif
    @endforeach
</ul>