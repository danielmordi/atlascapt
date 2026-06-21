{{-- Account balance Modal --}}
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mt-0 modal-title" id="myModalLabel">Update Account Balance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @livewire('admin.update-user-balance', ['user' => $user])
        </div>
    </div>
</div>

{{-- Upgrade package Modal --}}
{{-- <div id="upgrade_package" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mt-0 modal-title" id="myModalLabel">Upgrade Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class="hideInput">
                <div class="modal-body">
                    @csrf @method('PATCH')
                    <div id="updateAlertPackage"></div>
                    <div class="mb-3">
                        <label for="package" class="form-label">Package</label>
                        <select name="package" class="form-select" id="packageSelection">
                            @foreach ($packages as $package)
                                <option value="{{ $package->id }}"
                                    {{ $package->name == $user->package ? 'selected' : '' }}>
                                    {{ $package->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" id="packageBtn">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- Send mail Modal --}}
{{-- <div id="send_mail" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mt-0 modal-title" id="myModalLabel">Send Email to {{ $user->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" class="hideInput">
                <div class="modal-body">
                    @csrf
                    <div id="sentAlert"></div>
                    <div id="mail_sent" class="text-center text-success d-none" style="font-size: 8em">
                        <i class="mdi mdi-email-send"></i>
                    </div>
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message Body</label>
                        <textarea name="msg" id="editor" placeholder="Email body" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" id="sendemail">Send Mail</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- Send notification Modal --}}
<div id="send_notification" class="modal fade" tabindex="-1" aria-labelledby="sendNotificationModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mt-0 modal-title" id="sendNotificationModalLabel">Send Notification to {{ $user->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.send.notification', $user->id) }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title / Subject</label>
                        <input type="text" name="title" class="form-control" placeholder="Notification Title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message Content</label>
                        <textarea name="message" placeholder="Type notification message here..." class="form-control" rows="5" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Send Notification</button>
                </div>
            </form>
        </div>
    </div>
</div>
