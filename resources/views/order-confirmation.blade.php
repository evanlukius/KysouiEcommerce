@extends('layouts.app')
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="shop-checkout container">
        <h2 class="page-title">Order Received / ご注文完了</h2>

        <div class="checkout-steps">
            <a href="javascript:void(0)" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">01</span>
                <span class="checkout-steps__item-title">
                    <span>Shopping Bag / カート</span>
                    <em>Manage Your Items List</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">02</span>
                <span class="checkout-steps__item-title">
                    <span>Shipping and Checkout / 配送と決済</span>
                    <em>Checkout Your Items List</em>
                </span>
            </a>
            <a href="javascript:void(0)" class="checkout-steps__item active">
                <span class="checkout-steps__item-number">03</span>
                <span class="checkout-steps__item-title">
                    <span>Confirmation / ご確認</span>
                    <em>Review And Submit Your Order</em>
                </span>
            </a>
        </div>

        <div class="order-complete">
            <div class="order-complete__message">
                <!-- Checkmark SVG -->
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
                    <circle cx="40" cy="40" r="40" fill="#B9A16B" />
                    <path d="M52.9743 35.7612..." fill="white" />
                </svg>
                <h3>Your order is completed! / ご注文ありがとうございます！</h3>
                <p>Thank you. Your order has been received. / ご注文を承りました。</p>
                <a href="{{ route('shop.index') }}" class="btn btn-info mt-5">Shop More / 続けてショッピング</a>
            </div>

            <div class="order-info">
                <div class="order-info__item">
                    <label>Order Number / 注文番号</label>
                    <span>{{ $order->id }}</span>
                </div>
                <div class="order-info__item">
                    <label>Date / 日付</label>
                    <span>{{ $order->created_at }}</span>
                </div>
                <div class="order-info__item">
                    <label>Total / 合計</label>
                    <span>¥{{ number_format($order->total) }}</span>
                </div>
                <div class="order-info__item">
                    <label>Payment Method / お支払方法</label>
                    <span>{{ $order->transaction->mode }}</span>
                </div>
            </div>

            <div class="checkout__totals-wrapper">
                <div class="checkout__totals">
                    <h3>Order Details / ご注文内容</h3>
                    <table class="checkout-cart-items">
                        <thead>
                            <tr>
                                <th>PRODUCT / 商品</th>
                                <th>SUBTOTAL / 小計</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->orderItems as $item)
                                <tr>
                                    <td>
                                        {{ $item->product->name }} x {{ $item->quantity }}
                                    </td>
                                    <td>
                                        ¥{{ number_format($item->price * $item->quantity) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <table class="checkout-totals">
                        <tbody>
                            <tr>
                                <th>SUBTOTAL / 小計</th>
                                <td>¥{{ number_format($order->subtotal) }}</td>
                            </tr>
                            <tr>
                                <th>DISCOUNT / 割引</th>
                                <td>¥{{ number_format($order->discount ?? 0) }}</td>
                            </tr>
                            <tr>
                                <th>SHIPPING / 配送</th>
                                <td>無料 / Free shipping</td>
                            </tr>
                            <tr>
                                <th>VAT / 消費税</th>
                                <td>¥{{ number_format($order->tax) }}</td>
                            </tr>
                            <tr>
                                <th>TOTAL / 合計</th>
                                <td>¥{{ number_format($order->total) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
