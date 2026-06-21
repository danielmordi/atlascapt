@extends('layouts.base')

@section('title')
    User profile
@endsection

@section('content')
    @push('style')
        <style>
            .profile-card-wrapper {
                position: relative;
                z-index: 100 !important;
            }

            .profile-cover-image {
                position: relative;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                z-index: 10;
                overflow: visible !important;
            }

            .main-profile-info {
                padding-left: 20px;
                overflow: visible !important;
            }

            .avatar-xxl {
                width: 120px;
                height: 120px;
            }

            .avatar-rounded img {
                border-radius: 50%;
            }

            .nav-pills .nav-link {
                color: var(--text-muted);
                border-radius: 8px;
                padding: 10px 20px;
                transition: all 0.3s ease;
            }

            .nav-pills .nav-link.active {
                background: white !important;
                color: var(--primary-color) !important;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                font-weight: 600;
            }

            .custom-card {
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                border: 1px solid rgba(0, 0, 0, 0.05) !important;
            }

            .custom-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
            }

            .table-responsive {
                border-radius: 10px;
                overflow: hidden;
            }

            .badge-info-transparent {
                background-color: rgba(var(--info-rgb), 0.1);
                color: var(--info-color);
            }

            .badge-success-transparent {
                background-color: rgba(var(--success-rgb), 0.1);
                color: var(--success-color);
            }

            .badge-danger-transparent {
                background-color: rgba(var(--danger-rgb), 0.1);
                color: var(--danger-color);
            }

            .table thead th {
                background-color: rgba(var(--primary-rgb), 0.02);
                text-transform: uppercase;
                font-size: 11px;
                font-weight: 700;
                letter-spacing: 0.5px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .table tbody tr {
                transition: background-color 0.2s ease;
            }

            .table tbody tr:hover {
                background-color: rgba(var(--primary-rgb), 0.01);
            }

            .table td {
                vertical-align: middle;
                padding: 12px 15px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.025);
            }
        </style>
    @endpush
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Bio Data</p>
                </div>
                <div class="mt-2 btn-list mt-md-0">
                    <a href="{{ route('admin.adminLoginAsUser', $user->id) }}" class="btn btn-primary btn-wave">
                        Login As user
                    </a>
                </div>
            </div>

            <!-- End::page-header -->

            <div class="row">
                <div class="col-xxl-12 col-xl-12 profile-card-wrapper">
                    <div class="p-0 card custom-card">
                        <div class="card-body p-0">
                            <div class="d-sm-flex align-items-start p-4 profile-cover-image"
                                style="background: linear-gradient(135deg, #1d2b64 0%, #f8cdda 100%); min-height: 150px;">
                                <div class="flex-fill main-profile-info px-0" style="margin-top: 70px;">
                                    <div class="d-flex align-items-center justify-content-between row">
                                        <div>
                                            <h4 class="fw-semibold mb-1 text-white">{{ $user->name }}</h4>
                                            <p class="mb-2 text-white-50">{{ $user->email }}</p>
                                            <div class="d-flex mb-0">
                                                <div class="me-4">
                                                    <span
                                                        class="badge bg-{{ $user->is_blocked != '1' ? 'success' : 'danger' }}-transparent mb-1">
                                                        {{ $user->is_blocked != '1' ? 'Active Account' : 'Suspended Account' }}
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="badge bg-info-transparent mb-1">
                                                        {{ $user->kyc != '' ? 'KYC Verified' : 'KYC Pending' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end gap-2 mt-3"
                                            style="flex-direction: row-reverse">
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-secondary btn-wave waves-effect waves-light dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                                    id="dropdownMenuButton">
                                                    <i class="bx bx-dots-vertical-rounded"></i> Actions
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end shadow"
                                                    aria-labelledby="dropdownMenuButton" style="z-index: 1050;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ Auth::user()->role_id == 2 ? route('admin.dashboard') : route('user.dashboard') }}">
                                                            <i class="bx bx-home-alt me-2"></i> Dashboard
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#myModal">
                                                            <i class="bx bx-wallet me-2"></i> Update Balance
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#send_notification">
                                                            <i class="bx bx-bell me-2"></i> Send Notification
                                                        </button>
                                                    </li>
                                                    {{-- <li>
                                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#upgrade_package">
                                                            <i class="bx bx-up-arrow-circle me-2"></i> Upgrade Package
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#send_mail">
                                                            <i class="bx bx-envelope me-2"></i> Send Email
                                                        </button>
                                                    </li> --}}
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.block-user', $user->id) }}"
                                                            method="post">
                                                            @csrf @method('PATCH')
                                                            <button type="submit"
                                                                class="dropdown-item text-{{ $user->is_blocked == '1' ? 'success' : 'warning' }}">
                                                                <i
                                                                    class="bx bx-{{ $user->is_blocked == '1' ? 'user-check' : 'user-x' }} me-2"></i>
                                                                {{ $user->is_blocked == '1' ? 'Unblock User' : 'Block User' }}
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.delete-user', $user->id) }}"
                                                            method="post">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger">
                                                                <i class="bx bx-trash me-2"></i> Delete User
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="{{ route('admin.adminLoginAsUser', $user->id) }}"
                                                class="btn btn-primary btn-wave">
                                                Login As user
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @livewire('admin.user-stats', ['user' => $user])
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Detailed Information</div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-primary-light" data-bs-toggle="collapse"
                                    data-bs-target="#bioDataCollapse">
                                    Toggle Details
                                </button>
                            </div>
                        </div>
                        <div class="collapse show" id="bioDataCollapse">
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <div class="alert alert-success mt-2">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($user->kyc != '')
                                    <div class="mb-4 d-flex align-items-center p-3 rounded"
                                        style="background: rgba(var(--primary-rgb), 0.05)">
                                        <div class="me-3">
                                            <img src="{{ asset('storage/' . $user->kyc) }}" alt="ID"
                                                class="img-fluid rounded shadow-sm"
                                                style="width:120px; object-fit: cover; height: 80px;">
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">KYC Document</h6>
                                            <p class="text-muted fa-13 mb-2">Government issued ID uploaded by user.</p>
                                            <div class="d-flex gap-2">
                                                <a href="{{ asset('storage/' . $user->kyc) }}"
                                                    data-lightbox="{{ $user->username }}"
                                                    class="btn btn-sm btn-primary-light">View Full Image</a>
                                                <form action="{{ route('admin.verify') }}" method="post" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="uid" value="{{ $user->id }}">
                                                    <button type="submit" class="btn btn-sm btn-success">Mark as
                                                        Verified</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @livewire('admin.update-user-account-details', ['user' => $user, 'packages' => $packages])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Account Transaction History</div>
                        </div>
                        <div class="p-1 card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified mb-3" role="tablist"
                                style="background: rgba(var(--primary-rgb), 0.05); padding: 5px; border-radius: 10px;">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#notify" role="tab">
                                        <i class='bx bx-bell me-2'></i> Notifications
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#home1" role="tab">
                                        <i class='bx bx-down-arrow-alt me-2'></i> Deposits
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                        <i class='bx bx-up-arrow-alt me-2'></i> Withdrawals
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="p-3 tab-pane active table-responsive" id="notify" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                            <th class="text-nowrap">TYPE</th>
                                            <th class="text-nowrap">DESCRIPTION</th>
                                            <th class="text-nowrap">AMOUNT</th>
                                            <th class="text-nowrap">STATUS</th>
                                            <th class="text-nowrap">DATE</th>
                                            <th class="text-nowrap">ACTION</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $t)
                                                <tr class="text-nowrap">
                                                    <td class="text-uppercase">{{ $t->type }}</td>
                                                    <td>{{ $t->description }}</td>
                                                    <td>{{ $t->amount }}</td>
                                                    <td>
                                                        <div
                                                            class="badge bg-{{ $t->status == 'completed' ? 'success' : 'danger' }}">
                                                            {{ $t->status }}
                                                        </div>
                                                        <button type="button" class="btn btn-sm btn-link p-0 ms-1"
                                                            onclick="editStatus('{{ route('admin.update-transaction-status', $t->id) }}', '{{ $t->status }}', ['pending', 'completed', 'failed', 'canceled'])">
                                                            <i class="bx bx-edit-alt text-muted"
                                                                style="font-size: 12px;"></i>
                                                        </button>
                                                    </td>
                                                    <td>{{ $t->created_at->toDayDateTimeString() }}</td>
                                                    <td>
                                                        <form action="{{ route('admin.delete-transaction', $t->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirmDelete(event, 'this transaction history')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger-light">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $transactions->links('pagination::bootstrap-4') }}
                                </div>
                                <div class="p-3 tab-pane table-responsive" id="home1" role="tabpanel">
                                    <table class="table table-striped table-inverse table-responsive">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th class="text-nowrap">Date</th>
                                                <th class="text-nowrap">Package</th>
                                                <th class="text-nowrap">Amount</th>
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($deposits as $d)
                                                <tr class="text-nowrap">
                                                    <td scope="row">{{ $d->created_at->format('d-M-Y') }}</td>
                                                    <td>{{ $d->package_name ?? 'N/A' }}</td>
                                                    <td>{{ number_format($d->amount, 2) }}</td>
                                                    <td class="text-capitalize d-flex gap-2">
                                                        {{ $d->status }}
                                                        <button type="button" class="btn btn-sm btn-link p-0 ms-1"
                                                            onclick="editStatus('{{ route('admin.update-deposit-status', $d->id) }}', '{{ $d->status }}', ['pending', 'completed', 'failed', 'canceled'])">
                                                            <i class="bx bx-edit-alt text-muted"
                                                                style="font-size: 12px;"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.delete-deposit', $d->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirmDelete(event, 'this deposit and subtract the amount from user balance')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger-light">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-3 tab-pane table-responsive" id="profile1" role="tabpanel">
                                    <table class="table table-striped table-inverse table-responsive">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th class="text-nowrap">Date</th>
                                                <th class="text-nowrap">Coin</th>
                                                <th class="text-nowrap">From</th>
                                                <th class="text-nowrap">Wallet ID</th>
                                                <th class="text-nowrap">Amount</th>
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($withdrawals as $w)
                                                <tr class="text-nowrap">
                                                    <td scope="row">{{ $w->created_at->format('d-M-Y') }}</td>
                                                    <td>{{ $w->coin->name ?? '' }}</td>
                                                    <td>{{ $w->withdraw_from }}</td>
                                                    <td>{{ $w->wallet_id }}</td>
                                                    <td>{{ $w->amount }}</td>
                                                    <td class="d-flex gap-2">
                                                        {{ $w->status }}
                                                        <button type="button" class="btn btn-sm btn-link p-0 ms-1"
                                                            onclick="editStatus('{{ route('admin.update-withdrawal-status', $w->id) }}', '{{ $w->status }}', ['pending', 'completed', 'failed', 'canceled'])">
                                                            <i class="bx bx-edit-alt text-muted"
                                                                style="font-size: 12px;"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.delete-withdrawal', $w->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirmDelete(event, 'this withdrawal and add the amount back to user balance')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger-light">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            {{-- Modals remain but relocated for cleaner structure --}}
            @push('modals')
                @include('admin.partials.modals', ['user' => $user, 'packages' => $packages])
            @endpush

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        lightbox.option({
            'resizeDuration': 250,
            'wrapAround': true
        })

        function confirmDelete(event, message) {
            event.preventDefault();
            const form = event.currentTarget;

            Swal.fire({
                title: 'Are you sure?',
                text: "You are about to delete " + message + ". This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

            return false;
        }

        function editStatus(url, currentStatus, options) {
            let optionsHtml = '';
            options.forEach(opt => {
                optionsHtml +=
                    `<option value="${opt}" ${opt === currentStatus ? 'selected' : ''}>${opt.charAt(0).toUpperCase() + opt.slice(1)}</option>`;
            });

            Swal.fire({
                title: 'Update Status',
                html: `<select id="status-select" class="form-select">${optionsHtml}</select>`,
                showCancelButton: true,
                confirmButtonText: 'Update',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    const status = document.getElementById('status-select').value;
                    if (!status) {
                        Swal.showValidationMessage('Please select a status');
                        return false;
                    }
                    return status;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const status = result.value;
                    const metaTag = document.querySelector('meta[name="csrf-token"]');

                    if (!metaTag) {
                        Swal.fire('Error', 'CSRF token not found. Please refresh the page.', 'error');
                        return;
                    }

                    const csrfToken = metaTag.content;
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = url;

                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = csrfToken;

                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'PATCH';

                    const statusInput = document.createElement('input');
                    statusInput.type = 'hidden';
                    statusInput.name = 'status';
                    statusInput.value = status;

                    form.appendChild(csrfInput);
                    form.appendChild(methodInput);
                    form.appendChild(statusInput);
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }
    </script>
@endpush
