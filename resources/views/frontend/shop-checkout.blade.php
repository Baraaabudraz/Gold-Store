@extends('frontend.parent-new')
@section('title','Checkout')
@section('style')
    <link rel="stylesheet" href="{{asset('admin/stripe/checkout.css')}}" />
@endsection
@section('content')
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Checkout</h3>
			<h4 class="">Page Sub Title Goes Here</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li><a href="shop-checkout.html">Checkout</a></li>
			<li>/</li>
            <li class="c-state_active">Jango Components</li>
		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<!-- BEGIN: PAGE CONTENT -->
		<div class="c-content-box c-size-lg">
	<div class="container">
			<div class="row">
				<!-- BEGIN: ADDRESS FORM -->
				<div class="col-md-7 c-padding-20">
					<!-- BEGIN: BILLING ADDRESS -->
					<h3 class="c-font-bold c-font-uppercase c-font-24">Billing Address</h3>
                    <form class="c-shop-form-1" action="{{route('cart.charge')}}" id="payment-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Name</label>
                                        <input type="text" readonly class="form-control c-square c-theme" id="name" name="name" value="{{auth()->user()->name}}" placeholder="Full Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control c-square c-theme" placeholder="Street Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">City</label>
                                        <input type="text" id="city" name="city" class="form-control c-square c-theme" placeholder="City">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">State</label>
                                        <input type="text" id="state" name="state" class="form-control c-square c-theme" placeholder="State">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Postal Code</label>
                                <input type="text" name="postalcode" id="postalcode" class="form-control c-square c-theme" placeholder="Postal Code">
                            </div>
                        </div>
                    <div class="">
{{--                        <input type="hidden" name="amount" value="{{$amount}}">--}}
                        <div class="form-group">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button class="btn btn-primary mt-4" type="submit">Submit Payment</button>
                    </div>
                    </form>
                    </div>

				<!-- END: ADDRESS FORM -->
				<!-- BEGIN: ORDER FORM -->

				<div class="col-md-5">
					<div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
					<h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
					<ul class="c-order list-unstyled">
						<li class="row c-margin-b-15">
							<div class="col-md-6 c-font-20"><h2>Product</h2></div>
							<div class="col-md-3 c-font-20"><h2>Total</h2></div>
							<div class="col-md-3 c-font-20"><h2>QTY</h2></div>
						</li>
						<li class="row c-border-bottom"></li>
                        @if($cart)
                            @php $i=1 @endphp
                            @foreach($cart->items as $product)
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20"><a href="shop-product-details.html" class="c-theme-link">{{$product['name']}}</a></div>
							<div class="col-md-3 c-font-20">
								<p class="">${{$product['totalPrice']}}</p>
							</div>
                            <div class="col-md-3 c-font-20">
                                <p class="">{{$product['qty']}}</p>
                            </div>
						</li>
                            @endforeach
                        @endif
                        <li class="row c-border-bottom"></li>
                        <li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20">Subtotal</div>
							<div class="col-md-6 c-font-20">
								<p class="">$<span class="c-subtotal">{{$cart->totalPrice}}</span></p>
							</div>
						</li>
						<li class="row c-border-top c-margin-b-15"></li>
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20">
								<p class="c-font-30">Total</p>
							</div>
							<div class="col-md-6 c-font-20">
								<p class="c-font-bold c-font-30">$<span class="c-shipping-total">{{$cart->totalPrice}}</span></p>
							</div>
						</li>

						<li class="row">
						</li>
					</ul>
				</div>
				</div>
				<!-- END: ORDER FORM -->
			</div>
	</div>
</div>
		<!-- END: PAGE CONTENT -->
	<!-- END: PAGE CONTAINER -->
@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('admin/stripe/checkout.js')}}" defer></script>
@endsection
