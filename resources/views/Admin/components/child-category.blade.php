@foreach($children as $child)
    <option {{ $child->id == ($categoryCheck ?? '') ? 'selected' : '' }} value="{{ $child->id }}">{{ str_repeat('-', $depth) }} {{ $child->category_name }}</option>
    @if(count($child->childrenRecursive) > 0)
        @include('Admin.components.child-category', ['children' => $child->childrenRecursive, 'depth' => $depth + 1])
    @endif
@endforeach
