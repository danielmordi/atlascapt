<div class="table-responsive">
    <form action="" method="post">
        <div class="mb-3">
            <input type="search" wire:model="search" id="search" class="form-control" placeholder="Search By Name...">
        </div>
    </form>
    <table class="table table-striped table-counter" id="responsiveDataTable">
        <thead class="text-white text-Capitalize">
            <th class="text-nowrap lead">Name</th>
            <th class="text-nowrap lead">Amount Invested</th>
            <th class="text-nowrap lead">Amount Withdrawn</th>
            <th class="text-nowrap lead">Portfolio Value</th>
            <th class="text-nowrap lead">More</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @php
                    $invested = preg_replace('/[^0-9.]/', '', $user->deposit);
                    $walletbalance = floatval($invested);
                @endphp
                <tr class="text-nowrap">
                    <td>{{ $user->name }}
                        <span class="badge bg-{{ $user->is_blocked != '1' ? 'success' : 'danger' }}">
                            {{ $user->is_blocked != '1' ? 'Active' : 'Suspended' }}
                        </span>
                    </td>
                    <td>{{ currency_converter($user->deposit) }}
                    </td>
                    <td>{{ $user->withdrawal == null ? '0' : currency_converter($user->withdrawal->amount) }}
                    </td>
                    <td>{{ currency_converter($user->totalProfitEarned) }}</td>
                    <!--- Hashing fee == Daily profit -->
                    <td colspan="2" class="d-flex">
                        <a href="{{ route('admin.view.user', $user->id) }}" class="m-2 btn btn-primary btn-sm">View</a>

                        <a href="{{ route('admin.adminLoginAsUser', $user->id) }}"
                            class="m-2 btn btn-primary btn-sm">Login</a>

                        <form id="deleteUserAccount" action="{{ route('admin.delete-user', $user->id) }}"
                            method="POST">
                            @csrf @method('DELETE')
                            <button class="m-2 btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links('pagination::bootstrap-4') }}
</div>
