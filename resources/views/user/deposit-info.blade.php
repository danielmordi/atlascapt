@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Payment information
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h4 class="mb-0 fw-bold">Deposit Receipt</h4>
                    <p class="text-muted mb-0 fs-12">Complete your transaction by sending the exact amount to the address
                        below.</p>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="fw-bold mb-1 text-teal">{{ $currentDeposit->coin->name }}</h5>
                                <p class="text-muted mb-0 fs-12">Pay via {{ strtolower($currentDeposit->coin->name) }}
                                </p>
                            </div>
                            <div class="text-end">
                                <h3 class="fw-bold mb-0">${{ number_format($currentDeposit->amount, 2) }}</h3>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center mb-5">
                                    <p class="text-muted mb-4 fs-14">Scan the barcode below to make payment</p>
                                    <div class="d-inline-block p-3 bg-white border rounded shadow-sm">
                                        <div id="walletAddressQrCode"></div>
                                    </div>
                                </div>

                                <div class="mb-5 px-sm-5">
                                    <p class="text-muted mb-3 text-center fs-14">Send
                                        ${{ number_format($currentDeposit->amount, 2) }} to the address below</p>
                                    <div class="input-group input-group-lg rounded overflow-hidden border">
                                        <input type="text"
                                            class="form-control bg-transparent border-0 fs-15 text-center fw-medium"
                                            id="walletAddressInput" value="{{ $currentDeposit->coin->wallet_id }}" readonly>
                                        <button class="btn btn-white border-0 border-start px-4" type="button" id="copyBtn">
                                            <i class="bx bx-copy fs-20 text-muted"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <a href="{{ route('user.dashboard') }}"
                                        class="btn btn-teal btn-lg px-5 py-3 fs-16 fw-semibold w-100 w-sm-auto"
                                        onclick="alert('Payment marked as completed. Please wait for confirmation.')">
                                        Mark as Completed
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info-transparent border-0 p-4 rounded-4 mt-4">
                        <div class="d-flex gap-3">
                            <i class="bx bx-info-circle fs-24"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Important Note:</h6>
                                <p class="mb-0 fs-12 opacity-75">Your deposit will take 5 - 15mins for confirmation before
                                    reflecting on your dashboard. Please make sure to send the exact amount to avoid delays.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-teal {
            background-color: #1aa199;
            border-color: #1aa199;
            color: #fff;
        }

        .btn-teal:hover {
            background-color: #158a83;
            border-color: #158a83;
            color: #fff;
        }

        .text-teal {
            color: #1aa199;
        }

        .alert-info-transparent {
            background-color: rgba(26, 161, 153, 0.1);
            color: #1aa199;
        }

        #walletAddressQrCode canvas {
            display: block;
            max-width: 100%;
            height: auto !important;
        }
    </style>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
    <script src="{{ asset('js/kjua.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // QR Code Generation
            if (typeof kjua !== 'undefined') {
                var el = kjua({
                    text: "{{ $currentDeposit->coin->wallet_id }}",
                    size: 200,
                    fill: '#334155',
                    back: '#ffffff',
                    rounded: 8,
                    quiet: 1,
                    mSize: 30,
                    mPosX: 50,
                    mPosY: 50,
                });
                document.querySelector('#walletAddressQrCode').appendChild(el);
            }

            // Clipboard Functionality
            var copyBtn = document.getElementById('copyBtn');
            var input = document.getElementById('walletAddressInput');

            if (typeof ClipboardJS !== 'undefined') {
                var clipboard = new ClipboardJS(copyBtn, {
                    target: function () {
                        return input;
                    }
                });

                clipboard.on('success', function (e) {
                    var icon = copyBtn.querySelector('i');
                    icon.classList.remove('bx-copy');
                    icon.classList.add('bx-check');
                    icon.classList.add('text-success');

                    setTimeout(function () {
                        icon.classList.remove('bx-check');
                        icon.classList.remove('text-success');
                        icon.classList.add('bx-copy');
                    }, 2000);
                });
            } else {
                copyBtn.addEventListener('click', function () {
                    input.select();
                    document.execCommand('copy');
                    alert('Address copied to clipboard');
                });
            }
        });
    </script>
@endpush