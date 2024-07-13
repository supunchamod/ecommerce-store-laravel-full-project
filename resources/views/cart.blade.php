
@extends('layouts.main')
@section('content')

  <!-- Cart Section Start -->
  <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                    @foreach($cart as $data)
                                    <tr class="product-box-contain" data-id="{{ $data->id }}">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="product-left-thumbnail.html" class="product-image">
                                                    <img src="{{ asset('/media/product/' . $data->product->mainImage) }}"
                                                        class="img-fluid blur-up lazyload" alt="" style="height:50px;">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        <li class="name">
                                                            <a href="product-left-thumbnail.html">{{$data->product->productName}}</a>
                                                        </li>

                                                        <li class="text-content"><span class="text-title">Sold
                                                                By:</span> {{ Auth::user()->name }}</li>

                                                        <li class="text-content"><span
                                                                class="text-title qty-input">Quantity</span> - {{$data->quantity}}</li>

                                                        <li>
                                                            <h5 class="text-content d-inline-block">Price:</h5>
                                                            <span>Rs:{{$data->product->productPrice}}</span>
                                                            <span class="text-content">{{$data->product->productOldPrice}}</span>
                                                        </li>

                                                        <li>
                                                            <h5 class="saving theme-color">Saving : Rs:{{$data->save_amount}}</h5>
                                                        </li>
                                                        <li>
                                                            <h5>Total: Rs:{{$data->amount}}</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <h4 class="table-title text-content">Price</h4>
                                            <h5>Rs:{{$data->product->productPrice}}<del class="text-content">Rs:{{$data->product->productOldPrice}}</del></h5>
                                            <h6 class="theme-color">You Save : Rs:{{$data->save_amount}}</h6>
                                        </td>

                                        <td class="quantity">
                                    <h4 class="table-title text-content">Qty</h4>
                                    <div class="quantity-price">
                                        <div class="cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus">
                                                    <i class="fa fa-minus ms-0"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="{{ $data->quantity }}">
                                                <button type="button" class="btn qty-right-plus" data-type="plus">
                                                    <i class="fa fa-plus ms-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                        <td class="subtotal">
                                            <h4 class="table-title text-content">Total</h4>
                                            <h5>Rs:<span class="total-amount">{{ $data->amount }}</span></h5>
                                        </td>

                                        <td class="save-remove">
                                            <h4 class="table-title text-content">Action</h4>
                                            <a class="save notifi-wishlits" href="javascript:void(0)">Save for later</a>
                                            <a class="remove close_button" href="javascript:void(0)">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>Cart Total</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">Coupon Apply</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply">Apply</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price" id="subtotal-amount">Rs:{{ $currentTotalAmount }}</h4>
                                </li>

                                <li>
                                    <h4>Coupon Discount</h4>
                                    <h4 class="price">(-) 0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Shipping</h4>
                                    <h4 class="price text-end">$6.90</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total (USD)</h4>
                                <h4 class="price theme-color">Rs:{{ $fullTotal }}</h4>
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            <ul>
                                <li>
                                    <button onclick="location.href = 'checkout.html';"
                                        class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                </li>

                                <li>
                                    <button onclick="location.href = 'index.html';"
                                        class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->


<script>
$(document).ready(function () {
    var currentTotalAmount = {{ $currentTotalAmount }}; // Assuming $currentTotalAmount is passed from the controller

    function updateCart(cartItemId, quantity) {
        $.ajax({
            url: '/cart/update/' + cartItemId,
            method: 'PATCH',
            data: {
                quantity: quantity,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                // Update the amount in the subtotal cell
                $('tr[data-id="' + cartItemId + '"]').find('.total-amount').text(response.amount.toFixed(2));

                // Update the quantity input field
                $('tr[data-id="' + cartItemId + '"]').find('.qty-input').val(response.quantity);

                // Update the subtotal
                currentTotalAmount = response.totalAmount;
                $('#subtotal-amount').text('Rs:' + currentTotalAmount.toFixed(2));
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    $('.qty-right-plus, .qty-left-minus').on('click', function (e) {
        e.preventDefault();

        var $button = $(this);
        var $input = $button.closest('.input-group').find('.qty-input');
        var oldValue = parseInt($input.val());
        var newVal = oldValue;
        var cartItemId = $button.closest('.product-box-contain').data('id');

        if ($button.hasClass('qty-right-plus')) {
            newVal = oldValue + 2;
        } else {
            newVal = oldValue > 2 ? oldValue - 2 : 1;
        }

        updateCart(cartItemId, newVal);
    });
});




</script>

    

@endsection