<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarBy Ticket - {{ $date }}</title>

    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5d6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        "collect_hour" : "2022-04-12 10:10:10"

        h1 {
            border-top: 1px solid #5d6975;
            border-bottom: 1px solid #5d6975;
            color: #5d6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #project {
            float: left;
        }

        #project span {
            color: #5d6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #f5f5f5;
        }

        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }

        table th {
            padding: 5px 20px;
            color: #5d6975;
            border-bottom: 1px solid #c1ced9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5d6975;
        }

        #notices .notice {
            color: #5d6975;
            font-size: 1.2em;
        }

        footer {
            color: #5d6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #c1ced9;
            padding: 8px 0;
            text-align: center;
        }

    </style>
</head>

<body>

    <header class="clearfix">
        <div id="logo">
            <img src="{{ asset('storage/logo2.png') }}" alt="logo">
        </div>
        <br>
        <h1>
            TICKET
        </h1>
        <div id="project" class="clearfix">
            <div><span>{{ __('invoices.date') }}</span>{{ $date }}</div>
            <div><span>{{ __('invoices.order_code') }}</span>{{ $order->id }}</div>
            <div><span>{{ __('invoices.company') }}</span>{{ $company }}</div>
            <div><span>{{ __('invoices.nif') }}</span>{{ $nif }}</div>
            <div><span>{{ __('invoices.address') }}</span>{{ $address }}</div>
            <div><span>{{ __('invoices.postal_code') }}</span>{{ $postal_code }}</div>
            <div><span>{{ __('invoices.email') }}</span><a
                    href="mailto:{{ $email }}">{{ $email }}</a></div>
        </div>
        {{-- <div id="company">

        </div> --}}
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>{{ __('invoices.name') }}</th>
                    <th>{{ __('invoices.start_at') }}</th>
                    <th>{{ __('invoices.end_at') }}</th>
                    <th>{{ __('invoices.price_min') }}</th>
                    <th>{{ __('invoices.minutes') }}</th>
                    <th>{{ __('invoices.price') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">{{ $order->vehicle->vehicle_type->name }}
                    </td>
                    <td style="text-align: center; vertical-align: middle;">{{ $order->starts_at }}</td>
                    <td style="text-align: center; vertical-align: middle;">{{ $order->ends_at }}</td>
                    <td style="text-align: center; vertical-align: middle;">
                        {{ number_format($order->vehicle->vehicle_type->price_by_minute, 2, '.', '') }}</td>
                    <td style="text-align: center; vertical-align: middle;">
                        {{ \Carbon\Carbon::parse($order->starts_at)->diffInMinutes(\Carbon\Carbon::parse($order->ends_at)) }}
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        {{ number_format($order->journey_price, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="5">{{ __('invoices.services') }}</td>
                    <td class="total">
                        {{number_format($service, 2) . '€' }}
                    </td>
                </tr>

                {{-- SI TIENE DESCUENTO ENTRAM SINO NO --}}
                @if ($order->discount)
                    <tr>
                        <td colspan="5">{{ __('invoices.discount') }}</td>
                        <td class="total">
                            {{ $order->discount->percentage ? $order->discount->percentage . '%' : $order->discount->amount . '€' }}
                        </td>
                    </tr>
                @endif
                <tr>
                    <td colspan="5"><strong>{{ __('invoices.total') }}</strong></td>
                    <td class="total"><strong>{{ number_format($order->total_price, 2) }}€</strong></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
