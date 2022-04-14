@extends('layouts.app')
@section('content')
    <div class="row mt-2">
        <div class="col-md-8">
            @foreach ($items as $item)
                <div class="card mb-2" id="item{{ $item->getId() }}">
                    <div class="card-body" style="width: 100%;">
                        <div
                            style="display: flex; width: 100%; justify-content: flex-start; align-items: center; column-gap: 1rem;">
                            <div>
                                <img src="/storage/{{ $item->product->getImageUrl() }}"
                                    style="height: 120px; width: 120px;object-fit: cover;" alt=""
                                    class="image image-responsive">
                            </div>
                            <div style="width: 100%; display: flex; justify-content: space-between;">
                                <div>
                                    <div>
                                        <h5>{{ $item->product->getTitle() }}</h5>
                                    </div>
                                    <div>
                                        {{ $item->product->getRate() }}
                                    </div>
                                    <div class="border rounded mt-1 px-2 py-1" style="width: fit-content;">
                                        <span onclick="decrease('#count{{ $item->getId() }}')"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                        <span class="px-3" id="count{{ $item->getId() }}">1</span>
                                        <span onclick="increase('#count{{ $item->getId() }}')"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-right">
                                        <h5>₹ {{ $item->product->getRate() }}</h5>
                                    </div>
                                    <div class="text-right mt-1 py-1">
                                        <button onclick="remove({{ $item->getId() }})" class="btn btn-danger"><i
                                                class="fa fa-trash" aria-hidden="true"></i>
                                            Delete</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Address</h5>
                    <div class="text-right">
                        <button class="btn btn-outline-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add
                            address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        async function remove(id) {
            let url = '{{ route('cart.delete') }}/' + id;
            let response = await fetch(url, {
                method: 'delete',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
            }, );
            let res = await response.json();
            if (res['response'] == 'success') {
                $('#item' + id).remove();
            }
        }

        function increase(id) {
            let current = $(id).text();
            $(id).text(++current);
        }

        function decrease(id) {
            let current = $(id).text();
            if (current <= 1) return;
            $(id).text(--current);
        }
    </script>
@endsection
