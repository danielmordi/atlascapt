@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - {{ isset($data) ? 'Edit' : 'Add' }} Copy Trader
@endsection

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="my-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h4 class="fw-semibold mb-0 text-white">{{ isset($data) ? 'Edit' : 'Add' }} Copy Trader</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card custom-card">
                        <div class="card-body">
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if($method == 'patch')
                                    @method('PATCH')
                                @endif

                                <div class="row gy-4">
                                    <div class="col-xl-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="{{ old('username', $data->username ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="avatar" class="form-label">Avatar</label>
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            value="{{ old('location', $data->location ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="mininum_capital" class="form-label">Minimum Capital</label>
                                        <input type="number" step="0.01" class="form-control" id="mininum_capital"
                                            name="mininum_capital"
                                            value="{{ old('mininum_capital', $data->mininum_capital ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="risk_level" class="form-label">Risk Level</label>
                                        <select class="form-control" name="risk_level" id="risk_level" required>
                                            <option value="Low" {{ old('risk_level', $data->risk_level ?? '') == 'Low' ? 'selected' : '' }}>Low</option>
                                            <option value="Medium" {{ old('risk_level', $data->risk_level ?? '') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                            <option value="High" {{ old('risk_level', $data->risk_level ?? '') == 'High' ? 'selected' : '' }}>High</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="equity_growth" class="form-label">Equity Growth (%)</label>
                                        <input type="number" step="0.01" class="form-control" id="equity_growth"
                                            name="equity_growth"
                                            value="{{ old('equity_growth', $data->equity_growth ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="avg_per_month" class="form-label">Average Per Month (%)</label>
                                        <input type="number" step="0.01" class="form-control" id="avg_per_month"
                                            name="avg_per_month"
                                            value="{{ old('avg_per_month', $data->avg_per_month ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="total_pips" class="form-label">Total PIPs</label>
                                        <input type="number" class="form-control" id="total_pips" name="total_pips"
                                            value="{{ old('total_pips', $data->total_pips ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="rating" class="form-label">Rating (1-5)</label>
                                        <input type="number" step="0.1" max="5" min="1" class="form-control" id="rating"
                                            name="rating" value="{{ old('rating', $data->rating ?? '') }}" required>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"
                                            required>{{ old('description', $data->description ?? '') }}</textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="btn btn-primary">{{ isset($data) ? 'Update' : 'Add' }}
                                            Trader</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection