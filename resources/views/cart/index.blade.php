@extends('layouts.app')
@section('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var items = [];
    </script>
    <div class="alert alert-warning alert-dismissible fade" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong id="error"></strong>
    </div>


    <div class="row mt-2">
        <div class="col-md-8">
            @foreach ($items as $item)
                <div class="card mb-2" id="item{{ $item->getId() }}">
                    <script>
                        items.push({{ $item->product->getId() }})
                    </script>
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
                                    <div id="rate{{ $item->product->getId() }}">
                                        {{ $item->product->getRate() }}
                                    </div>
                                    <div class="border rounded mt-1 px-2 py-1" style="width: fit-content;">
                                        <span onclick="decrease('{{ $item->product->getId() }}')"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                        <span class="px-3" id="count{{ $item->product->getId() }}">1</span>
                                        <span onclick="increase('{{ $item->product->getId() }}')"><i
                                                class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <div class="text-right">
                                        <h5>₹ <span
                                                id="total{{ $item->product->getId() }}">{{ $item->product->getRate() }}</span>
                                        </h5>
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
                    <input type="hidden" id="address_id" value="{{ $default_address->getId() }}" />
                    <div class="border rounded p-2 m-2" id="selected_address">
                        <span><strong>{{ $default_address->getHno() }}<br></strong>
                            {{ $default_address->getStreet() }},
                            {{ $default_address->getCity() }},
                            {{ $default_address->getState() }},
                            {{ $default_address->getZip() }}-{{ $default_address->getCountry() }}<br />
                            {{ $default_address->getPhone() }}</span>
                    </div>
                    <div class="text-right">
                        <button onclick="$('#exampleModal').modal('show');" class="btn btn-outline-primary"> <i
                                class="fa fa-plus" aria-hidden="true"></i> Change
                            address</button>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Payment</h5>
                    <div style="display: flex; flex-direction: row; justify-content: left; align-items: center">
                        <input type="radio" name="payment_mode" value="cash" />
                        <label class="ml-2 mb-0">Cash On Delivery</label>
                    </div>

                    <div style="display: flex; flex-direction: row; justify-content: left; align-items: center">
                        <input type="radio" name="payment_mode" value="upi" />
                        <label class="ml-2 mb-0">Bhim UPI Google Pay, Phone Pay</label>
                    </div>
                    <button class="btn btn-primary w-100 mt-3" onclick="checkout()">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Address Model --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form id="MyForm" action="{{ route('address.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                @foreach (Auth::user()->addresses as $address)
                                    <div class="card mb-1 col-12" style="cursor: pointer;">
                                        <div class="card-body"
                                            onclick="$('#selected_address').html($(this).html());$('#exampleModal').modal('hide');$('#address_id').val({{ $address->getId() }})">

                                            <span><strong>{{ $address->getHno() }}<br></strong>
                                                {{ $address->getStreet() }},
                                                {{ $address->getCity() }},
                                                {{ $address->getState() }},
                                                {{ $address->getZip() }}-{{ $address->getCountry() }}<br />
                                                {{ $address->getPhone() }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <img class="sb-title-icon"
                                        src="https://fonts.gstatic.com/s/i/googlematerialicons/location_pin/v5/24px.svg"
                                        alt="">
                                    <span class="sb-title">Address Selection</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="hno" id="hno" aria-describedby="helpId"
                                        placeholder="houseno">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="street" id="street" placeholder="Steet">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="city">
                                </div>

                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control" placeholder="State/Province" name="state"
                                            id="state" />
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control" placeholder="Zip/Postal code" id="zip"
                                            name="zip" />
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="text" placeholder="Country" id="country" name="country"
                                        class="form-control" />

                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone number" id="phone" name="phone"
                                        class="form-control" />
                                </div>
                                <button class="button-cta">Save &amp;
                                    Select</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Select</button> --}}
                    <a href="{{ route('address.index') }}" type="button" class="btn btn-primary">Customize Address</a>
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
            let current = $("#count" + id).text();
            $("#count" + id).text(++current);
            let rate = $("#rate" + id).text().trim();
            $('#total' + id).text(current * rate);

        }

        function decrease(id) {
            let current = $("#count" + id).text();
            if (current <= 1) return;
            $("#count" + id).text(--current);
            let rate = $("#rate" + id).text().trim();
            $('#total' + id).text(current * rate);
        }

        $(document).ready(function() {

            $("#MyForm").validate({
                rules: {
                    'hno': {
                        required: true,
                        minlength: 2
                    },
                    'street': {
                        required: true,
                        minlength: 2
                    },
                    'city': {
                        required: true,
                    },
                    'state': {
                        required: true,
                    },
                    'zip': {
                        required: true,
                        minlength: 6
                    },
                    'country': {
                        required: true,
                    },
                    'phone': {
                        required: true,
                        minlength: 10,
                    }
                },

                messages: {
                    'state': "Please enter a valid state Name.",
                    'city': "Please enter a valid city Name.",
                    'zip': "Please enter valid zip code.",
                    'phone': "Please enter a valid phone number",
                },

                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },

                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },

                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },

            });
            var form = document.getElementById("MyForm");
            form.addEventListener("submit", function(event) {

                event.preventDefault()
                const data = new FormData(form);
                const json = Object.fromEntries(data.entries());

                fetch(form.action, {
                    method: form.method,
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json; charset=UTF-8',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: JSON.stringify(json),
                }, ).then(res => {
                    // res.json().then(json => setSelected(json));

                    let html = `<span><strong>${json['hno']}<br></strong>
                                                ${json['street']},
                                                ${json['city']},
                                                ${json['state']},
                                                ${ json['zip']}-${json['country']}<br />
                                                ${json['phone']}</span>`;

                    $('#selected_address').html(html);
                    $('#address_id').val(json['id']);
                    $('#exampleModal').modal('hide');

                    $('#MyForm').trigger("reset");

                });

            });
        });

        function checkout() {
            let mode = null
            try {
                mode = document.querySelector('input[name="payment_mode"]:checked').value;
            } catch (e) {
                alert('Select payment Mode');
                return;
            }

            var itemsObj = [];
            items.forEach(element => {
                itemsObj.push({
                    "product_id": element,
                    "quantity": $('#count' + element).text()
                })
            });

            let address = $('#address_id').val();

            if (address.trim() == '') {
                alert('select address');
                return;
            }

            body = JSON.stringify({
                "items": itemsObj,
                "address_id": $('#address_id').val(),
                "payment_mode": mode,
            });
            console.log(body);

            fetch('{{ route('cart.create_order') }}', {

                method: 'POST',

                body: body,

                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },

            }).then(response => {
                response.json().then(text => {

                    if (text['success']) {
                        window.location.href = "{{ route('cart.success') }}/" + text['id'];
                    }

                });
            });
        }
    </script>
@endsection
