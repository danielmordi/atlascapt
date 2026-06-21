@extends('layouts.base')

@section('title')
    Manage IPOs
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Manage IPOs / Stocks</p>
                </div>
            </div>
            <!-- End::page-header -->

            @if (session()->has('success'))
                <div class="mb-3 alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="mb-3 alert alert-danger">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="py-4 card card-body">
                        <h3 class="lead text-uppercase">
                            {{ isset($ipo->id) ? 'Edit IPO' : 'Add New IPO' }}
                        </h3>
                        <form action="{{ isset($ipo->id) ? route('admin.ipos.update', $ipo->id) : route('admin.ipos.store') }}" method="post">
                            @csrf
                            @isset($ipo->id)
                                @method('PATCH')
                            @endisset

                            <div class="mt-2 form-group">
                                <label for="name" class="form-label">Stock Name</label>
                                <input type="text" name="name" id="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ isset($ipo->id) ? $ipo->name : old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="symbol" class="form-label">Symbol (e.g. AAPL)</label>
                                <input type="text" name="symbol" id="symbol" class="form-control mb-2 @error('symbol') is-invalid @enderror" value="{{ isset($ipo->id) ? $ipo->symbol : old('symbol') }}" required>
                                @error('symbol')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control mb-2">{{ isset($ipo->id) ? $ipo->description : old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price" class="form-label">Price per Share ($)</label>
                                <input type="number" step="0.01" name="price" id="price" class="form-control mb-2" value="{{ isset($ipo->id) ? $ipo->price : old('price') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity" class="form-label">Total Shares</label>
                                <input type="number" name="quantity" id="quantity" class="form-control mb-2" value="{{ isset($ipo->id) ? $ipo->quantity : old('quantity') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="min_purchase" class="form-label">Min Purchase (Shares)</label>
                                <input type="number" name="min_purchase" id="min_purchase" class="form-control mb-2" value="{{ isset($ipo->id) ? $ipo->min_purchase : old('min_purchase', 1) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="max_purchase" class="form-label">Max Purchase (Shares - Optional)</label>
                                <input type="number" name="max_purchase" id="max_purchase" class="form-control mb-2" value="{{ isset($ipo->id) ? $ipo->max_purchase : old('max_purchase') }}">
                            </div>

                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control mb-2">
                                    <option value="active" {{ (isset($ipo->id) && $ipo->status == 'active') ? 'selected' : '' }}>Active</option>
                                    <option value="upcoming" {{ (isset($ipo->id) && $ipo->status == 'upcoming') ? 'selected' : '' }}>Upcoming</option>
                                    <option value="closed" {{ (isset($ipo->id) && $ipo->status == 'closed') ? 'selected' : '' }}>Closed</option>
                                </select>
                            </div>

                            <button type="submit" class="mt-2 btn btn-secondary w-100 text-uppercase">
                                {{ isset($ipo->id) ? 'Update IPO' : 'Add IPO' }}
                            </button>
                            @isset($ipo->id)
                                <a href="{{ route('admin.ipos.index') }}" class="btn btn-link w-100">Cancel</a>
                            @endisset
                        </form>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card card-body table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-white bg-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Symbol</th>
                                    <th>Price</th>
                                    <th>Shares (Avail/Total)</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ipos as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->symbol }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>{{ $item->available_quantity }} / {{ $item->quantity }}</td>
                                        <td>
                                            <span class="badge bg-{{ $item->status == 'active' ? 'success' : ($item->status == 'upcoming' ? 'info' : 'danger') }}">
                                                {{ ucfirst($item->status) }}
                                            </span>
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.ipos.edit', $item->id) }}" class="btn btn-sm btn-success me-1">Edit</a>
                                            <form action="{{ route('admin.ipos.delete', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
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
@endsection
