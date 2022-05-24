@foreach($catalog as $item)
    <h2>
        {{$item->name}}
    </h2>
    @foreach($item->products as $prod)
        <div>
            {{$prod->name}}
            <img src="{{asset('storage/' . $prod->picture)}}" alt="prikol">
        </div>
    @endforeach

@endforeach
@foreach($product_name_category as $item)
    <h2>
        {{$item->name}}
    </h2>
@endforeach
