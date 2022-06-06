<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CarBy - Realizar Pago</title>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: white;
        }

        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #holder {
            width: 100%;
        }

        #holder::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: rgba(138, 139, 139, 0.418);
            opacity: 1;
            /* Firefox */
        }

        #holder:focus {
            outline: none !important;
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        #holder::placeholder {
            color: #aab7c4;
            font-size: 16px;
        }

        /* SPINNER */

        #overlay {
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
        }

        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }

        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }

        .is-hide {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center my-5">
            <img class="image1" src="{{asset('storage/logo2.png')}}" alt="CarBy" style="height: 10rem;">
            {{-- <img class="image2" src="{{asset('logo.png')}}" alt="ByMoments" style="height: 10rem;"> --}}
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <form method="POST" action="{{ route('pay', $journey->id) }}" class="card-form mt-3 mb-3"
                    id="payment-form">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="price" value="{{ $price }}">

                    <input type="hidden" name="payment_method" class="payment-method">
                    <input class="StripeElement mb-3" name="card_holder_name" id="holder"
                        placeholder="Cardholder" required>
                    <div id="card-element"></div>
                    <div id="card-errors" role="alert"></div>
                    <div class="row justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary pay" style="width: 92% !important">
                            <b>Pay {{number_format($price, 2, '.', '')}} €</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- <div class="row justify-content-center">
            <div class="card my-5"
                style="width: 90%; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; border-radius: 10px; border: 0px solid white">
                @if (count($space->images) > 0)
                <img class="card-img-top img-fluid" style="object-fit: cover; border-radius: 10px 10px 0px 0px;"
                    src="{{url('storage/' . $space->images[0]->image)}}" alt="image">
                @endif
                <div class="card-body text-center">
                    <h4 class="card-title"><b>{{$space->title}}</b></h4>
                    <h5 class="card-title">{{$space->description}}</h5>
                    <br>
                    <br>
                    <h5><b>Precio:</b> {{$space->price}} €/h</h5>
                    <h4><b>Total: {{$booking->amount}} €</b></h4>
                    <br>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>

</body>

<footer>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <p style="color: rgb(179, 179, 179)">
                        © {{ date('Y') }} CARBY @lang('All rights reserved.')
                    </p>
                </div>
            </div>
        </main>
    </div>
</footer>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // TODO: CAMBIAR KEY
    let stripe = Stripe("{!! config('app.stripe_key') !!}")
    let elements = stripe.elements()
    let style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    }
    let card = elements.create('card', {hidePostalCode: true, style: style})
    card.mount('#card-element')
    let paymentMethod = null

    $('.card-form').on('submit', function (e) {
        $("#overlay").show();
        $('button.pay').attr('disabled', true)
        if (paymentMethod) {
            return true
        }
        stripe.confirmCardSetup(
            "{{ $intent->client_secret }}",
            {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: $('.card_holder_name').val(),
                        address: {
                            country: 'ES'
                        }
                    }
                }
            }
        ).then(function (result) {
            $("#overlay").hide();
            if (result.error) {
                $('#card-errors').text(result.error.message)
                $('button.pay').removeAttr('disabled')
            } else {
                paymentMethod = result.setupIntent.payment_method
                $('.payment-method').val(paymentMethod)
                $('.card-form').submit()
            }
        })
        return false
    })

    document.getElementById('saved-card-div').addEventListener('click', function (e) {
        $("#overlay").show();
    });
</script>

</html>
