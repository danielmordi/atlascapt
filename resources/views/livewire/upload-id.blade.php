<div>
    <div class="p-2">
        <p class="mt-4 mb-4 text-center font-size-22">Account Verification</p>
        @if (!$isIdUploaded)
            <p class="p-3 bg-body">
                Welcome to {{ config('app.name') }}, {{ '@'.Auth::user()->username }}. To verify your account, you must
                upload a valid government ID.
            </p>

            <form wire:submit.prevent='upload'>
                <div class="mb-3">
                    <input class="form-control" id="formFileLg" type="file" wire:model='file' required>
                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div wire:loading wire:target="file">
                    Uploading...
                </div>

                <button type="submit" class="btn btn-primary btn-wave waves-effect waves-light" wire:loading.attr="disabled">
                    Activate
                </button>
            </form>
        @else
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <p class="p-3 bg-body">
                It could take up to 24 hours for your account to be reviewed. If the evaluation is positive, the system will immediately activate your account.
            </p>
        @endif
    </div>
</div>