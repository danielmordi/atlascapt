<div>
    <div class="row">
        @if (!$showEditForm)
            <div class="col-md-12">
                <div>
                    {{-- Display alert --}}
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-3 border rounded mb-3">
                            <h6 class="fw-semibold mb-3 border-bottom pb-2">Personal Information</h6>
                            <div class="mb-3">
                                <span class="text-muted d-block mb-1">Username</span>
                                <span class="fw-medium">{{ $user->username }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="text-muted d-block mb-1">Full Name</span>
                                <span class="fw-medium">{{ $user->name }}</span>
                            </div>
                            <div class="mb-0">
                                <span class="text-muted d-block mb-1">Email Address</span>
                                <span class="fw-medium text-break">{{ $user->email }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border rounded mb-3">
                            <h6 class="fw-semibold mb-3 border-bottom pb-2">Account Status</h6>
                            <div class="mb-3">
                                <span class="text-muted d-block mb-1">Investment Package</span>
                                <span
                                    class="badge bg-primary-transparent">{{ $get_package == null ? 'No Active Package' : $get_package->name }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="text-muted d-block mb-1">Account Type</span>
                                <span
                                    class="badge bg-info-transparent">{{ $user->role_id == 2 ? 'Investor' : 'Administrator' }}</span>
                            </div>
                            <div class="mb-0">
                                <span class="text-muted d-block mb-1">Joined Date</span>
                                <span class="fw-medium">{{ $user->created_at->format('d M, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" wire:click='toggleEditForm' class="btn btn-primary btn-wave">
                        <i class="bx bx-edit-alt me-1"></i> Edit Account Details
                    </button>
                </div>
            </div>
        @else
            <div class="col-md-12">
                <div class="card custom-card border-primary shadow-none">
                    <div class="card-header bg-primary-transparent">
                        <div class="card-title text-primary"><i class="bx bx-edit me-1"></i> Edit Account Balances &
                            Details</div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='updateUserAccount'>
                            <div class="row">
                                <div class="col-md-6 border-end">
                                    <h6 class="fw-semibold mb-3">Balance Management</h6>
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control" id="amtInvested"
                                            placeholder="Amount Invested" wire:model='amt_invested'>
                                        <label for="amtInvested">Amount Invested</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control" id="amtWithdrawn"
                                            placeholder="Amount Withdrawn" wire:model='amt_withdrawn'>
                                        <label for="amtWithdrawn">Amount Withdrawn</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control" id="portfolioValue"
                                            placeholder="Portfolio Value" wire:model='portfolio_value'>
                                        <label for="portfolioValue">Portfolio Value</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control" id="bonus"
                                            placeholder="Bonus" wire:model='bonus'>
                                        <label for="bonus">Bonus</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-4">
                                    <h6 class="fw-semibold mb-3">Plan & Metrics</h6>
                                    <div class="mb-3 form-floating">
                                        <select class="form-select" id="pkgSelect" wire:model='package'>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}"
                                                    {{ $package->name == $user->package ? 'selected' : '' }}>
                                                    {{ $package->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="pkgSelect">Investment Plan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-4 border-top pt-3">
                                <button type="button" wire:click='toggleEditForm'
                                    class="btn btn-light btn-wave">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-wave px-4">
                                    <i class="bx bx-save me-1"></i> Update Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
