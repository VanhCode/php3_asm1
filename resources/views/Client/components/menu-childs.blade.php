<li class="dropdown-submenu">
    <a tabindex="-1" href="{{ route('category.detail', $category->slug ?? '') }}">{{ $category->category_name }}</a>
    @if($category->childrenRecursive->isNotEmpty())
        <ul class="dropdown-menu">
            @foreach($category->childrenRecursive as $child)
                @include('Client.components.menu-childs', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
