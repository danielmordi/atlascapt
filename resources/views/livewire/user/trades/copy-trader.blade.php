<div class="table-responsive">
    <form action="" method="post">
        <div class="mb-3">
            <input type="search" wire:model="search" id="search" class="form-control" placeholder="Search By Name...">
        </div>
    </form>
    <table class="table table-striped table-counter" id="responsiveDataTable">
        <thead class="text-white text-Capitalize">
            <th class="text-nowrap lead">Username</th>
            <th class="text-nowrap lead">Minimum Cap*</th>
            <th class="text-nowrap lead">Risk level</th>
            <th class="text-nowrap lead"></th>
        </thead>
        <tbody>
            @foreach ($copyTraders as $copyTrader)
                    <tr class="text-nowrap">
                        <td>{{ $copyTrader->username }}</td>
                        <td>{{ currency_converter($copyTrader->mininum_capital) }}</td>
                        @php $risk = strtolower($copyTrader->risk_level); @endphp
                        <td class="text-uppercase
                                            {{ $risk == 'high' ? 'bg-danger' :
                ($risk == 'medium' ? 'bg-warning' : 'bg-success') }}">
                            <span class="text-white">{{ $copyTrader->risk_level }}</span>
                        </td>
                        <td colspan="2" class="d-flex justify-content-end">
                            <a href="{{ route('admin.edit.copy-traders', $copyTrader->id) }}"
                                class="m-2 btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    {{ $copyTraders->links('pagination::bootstrap-4') }}
</div>