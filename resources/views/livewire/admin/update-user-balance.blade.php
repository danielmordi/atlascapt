<div>
    <form wire:submit.prevent="updateBalance">
        <div class="modal-body">
            @if ($message)
                <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="mb-3">
                <label for="from" class="form-label">Choose balance to credit/debit</label>
                <select wire:model="from" id="from" class="form-select @error('from') is-invalid @enderror">
                    <option value="" selected hidden>Choose</option>
                    <option value="deposit">Deposit</option>
                    <option value="bonus">Bonus</option>
                    <option value="totalProfitEarned">Profit earned</option>
                    <!--<option value="wallet_balance">Wallet balance</option>-->
                    <option value="token">Token</option>
                </select>
                @error('from')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="typeOfTransaction" class="form-label">Choose Transaction type</label>
                <select wire:model="typeOfTransaction" id="typeOfTransaction"
                    class="form-select @error('typeOfTransaction') is-invalid @enderror">
                    <option value="" selected hidden>Choose</option>
                    <option value="credit">Credit</option>
                    <option value="debit">Debit</option>
                </select>
                @error('typeOfTransaction')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="value" class="form-label">Amount</label>
                <input type="text" wire:model="value" class="form-control @error('value') is-invalid @enderror"
                    placeholder="Enter amount">
                @error('value')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">
                <span wire:loading wire:target="updateBalance" class="spinner-border spinner-border-sm me-1"
                    role="status" aria-hidden="true"></span>
                Save changes
            </button>
        </div>
    </form>
</div>
