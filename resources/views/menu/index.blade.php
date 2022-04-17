@extends('layouts.app')
@section('menu')
    <div style="display: inline" class="bg-white ">
        <ul id="menu" class="mb-2 pb-2" style="display: flex; justify-content: space-evenly; overflow: auto">
            @foreach ($menus as $menu)
                <li class="mx-2 nav-item text-uppercase text-nowrap"><a
                        href="#{{ $menu->getId() }}">{{ $menu->getName() }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
@section('content')
    @foreach ($menus as $item)
        <div id="{{ $item->getId() }}" class="mt-3">
            <h3>{{ $item->getName() }}</h3>
            <hr />
        </div>
        <div class="row mt-0">
            @foreach ($item->getProducts() as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 mt-2">

                    <div class="card border">
                        <div style="position: relative; padding: 0">
                            <img style="height: 12rem;object-fit: cover;" src="storage/{{ $product->getImageUrl() }}"
                                alt="" class="card-img-top">
                            <div
                                style="position: absolute; bottom: 0px; left: 0; width: 6rem; height: 4rem;
                                                                                                                                                                                                                         padding: 10px; background-image: url('https://pizzaonline.dominos.co.in/static/assets/icons/shadow.svg'); background-repeat: no-repeat; background-size: 100% 100%">
                            </div>
                            <div style="position: absolute; bottom: 0.5rem; left: 0.5rem;">
                                <span class="text-light"><strong>₹ {{ $product->getRate() }}</strong></span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div style="display: flex; justify-content: stretch; width: 100%">
                                <div style="line-height: 1">
                                    <h5>{{ $product->getTitle() }}</h5>
                                    <span
                                        style="font-size: 0.8rem; line-height: 0; max-lines: 3; box-lines: 3">{{ $product->getDescription() }}<span>
                                </div>

                            </div>
                            <div class="text-right">
                                @if (Auth::user())
                                    <button type="button" name="" onclick="addToCard({{ $product->getId() }})" id=""
                                        class="btn btn-sm rounded btn-primary">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart
                                    </button>
                                @else
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->getId() }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-sm rounded btn-primary">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart
                                        </button>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

@section('script')
    <script>
        function addToCard(id) {



            let url = '{{ route('cart.store') }}';
            fetch(url, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                method: 'POST',
                body: JSON.stringify({
                    'quantity': 1,
                    'product_id': id
                })
            }).then(response => {
                response.json().then(res => {
                    if (res['success']) {
                        let currentItem = $('#cart-value').text();
                        if (currentItem == '') {
                            currentItem = 1;
                        } else {
                            currentItem = parseInt(currentItem) + 1;
                        }
                        $('#cart-value').text(currentItem);
                    }
                });
            });


        }
    </script>
@endsection
