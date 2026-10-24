@extends('web.layouts.main')

@section('title', 'Check Authorized Centres of JUA in India |')
@section('description', 'Enter the State and District name to check the availability of authorized centers of Jamia Urdu
    Aligarh in your region.')

@section('styles')
    <link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/india.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none !important;
        }

        .btn-success {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }

        .main-menu a {
            font-size: 14px;
        }

        .main-menu ul.sub-menu a {
            font-size: 14px !important;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 1rem;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        @media (max-width: 1366px) {
            .main-menu a {
                font-size: 10px !important;
            }

            .main-menu ul.sub-menu a {
                font-size: 10px !important;
            }
        }

        .new-badge {
            background-color: #ff0000;
            color: #fff;
            font-size: 8px;
            padding: 3px 8px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: bold;
            animation: neon-blink 0.6s infinite;
            box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
        }

        @keyframes neon-blink {
            0%, 100% {
                opacity: 1;
                box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
            }
            50% {
                opacity: 0.3;
                box-shadow: none;
            }
        }

        #filter-btn:disabled,
        #state:disabled,
        #district:disabled {
            cursor: not-allowed;
            opacity: 0.6;
        }

        .form-select:focus,
        .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.15);
        }

        #centers-table-body td {
            vertical-align: middle;
        }

        .text-success {
            font-weight: 500;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
            <div class="breadcumb-shape"></div>
            <div class="container">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title">India</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Authorized Centers</a></li>
                        <li>Overseas Centers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <form method="GET" id="india-filter-form" class="row g-3 mb-4" onsubmit="return false;">
                <div class="col-md-3">
                    <select name="state" id="state" class="form-select" required>
                        <option value="">Select State</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="district" id="district" class="form-select" required>
                        <option value="">Select District</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="type" id="type" class="form-select" required>
                        <option value="">Select Type</option>
                        <option value="center">Center</option>
                        <option value="regional_coordinator">Regional Coordinator</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button type="button" id="filter-btn" class="btn btn-primary" disabled>Filter</button>
                    <button type="button" id="reset-btn" class="btn btn-secondary">Reset</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>State</th>
                            <th>District</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="centers-table-body">
                        @forelse($centers as $center)
                            <tr>
                                <td>{{ $center->center_name }}</td>
                                <td>{{ $stateNames[$center->state] ?? $center->state }}</td>
                                <td>{{ $center->district }}</td>
                                <td>{{ ucfirst($center->type) }}</td>
                                <td><span class="text-success">Active</span></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Please select filters to view centers.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        const apiKey = "NkhodjdUdEtZNXZlWXdmeks5Q29iN01aZkNQY2NqbkxXMzJTZmtYbA==";

        function escapeHtml(str) {
            return String(str ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        function toggleFilterBtn() {
            const state = $('#state').val();
            const district = $('#district').val();
            const type = $('#type').val();
            $('#filter-btn').prop('disabled', !(state && district && type));
        }

        // Populate states
        $('#state').prop('disabled', true).html('<option value="">Loading...</option>');

        fetch("https://api.countrystatecity.in/v1/countries/IN/states", {
                headers: {
                    'X-CSCAPI-KEY': apiKey
                }
            })
            .then(res => {
                if (!res.ok) throw new Error('Failed to load states');
                return res.json();
            })
            .then(states => {
                $('#state').html('<option value="">Select State</option>');
                states.forEach(state => {
                    $('#state').append(`<option value="${escapeHtml(state.iso2)}">${escapeHtml(state.name)}</option>`);
                });
                $('#state').prop('disabled', false);
            })
            .catch(() => {
                $('#state').html('<option value="">Failed to load states</option>');
            });

        // Load districts when state changes
        $('#state').on('change', function() {
            $('#district').html('<option value="">Select District</option>').prop('disabled', true);
            toggleFilterBtn();

            const state = $(this).val();
            if (!state) return;

            $('#district').html('<option value="">Loading...</option>');

            fetch(`https://api.countrystatecity.in/v1/countries/IN/states/${state}/cities`, {
                    headers: {
                        'X-CSCAPI-KEY': apiKey
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error('Failed to load districts');
                    return res.json();
                })
                .then(cities => {
                    $('#district').html('<option value="">Select District</option>');
                    if (!cities || cities.length === 0) {
                        $('#district').html('<option value="">No districts found</option>');
                        return;
                    }
                    cities.forEach(city => {
                        $('#district').append(`<option value="${escapeHtml(city.name)}">${escapeHtml(city.name)}</option>`);
                    });
                    $('#district').prop('disabled', false);
                    toggleFilterBtn();
                })
                .catch(() => {
                    $('#district').html('<option value="">Failed to load districts</option>');
                });
        });

        $('#type, #district').on('change', toggleFilterBtn);

        // Filter centers
        $('#filter-btn').on('click', function() {
            const state = $('#state').val();
            const district = $('#district').val();
            const type = $('#type').val();
            if (!state || !district || !type) {
                return;
            }

            const $btn = $(this);
            const originalText = $btn.text();
            $btn.prop('disabled', true).text('Loading...');

            const tbody = $('#centers-table-body');
            tbody.html('<tr><td colspan="5" class="text-center">Loading...</td></tr>');

            $.ajax({
                    url: "{{ route('centers.filter') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        state: state,
                        district: district,
                        type: type
                    }
                })
                .done(function(response) {
                    tbody.empty();

                    const centers = (response && response.centers) || [];

                    if (centers.length === 0) {
                        tbody.append('<tr><td colspan="5" class="text-center">No data found</td></tr>');
                        return;
                    }

                    centers.forEach(center => {
                        tbody.append(`
                            <tr>
                                <td>${escapeHtml(center.center_name)}</td>
                                <td>${escapeHtml(center.state)}</td>
                                <td>${escapeHtml(center.district)}</td>
                                <td>${escapeHtml(center.type.charAt(0).toUpperCase() + center.type.slice(1))}</td>
                                <td><span class="text-success">Active</span></td>
                            </tr>
                        `);
                    });
                })
                .fail(function() {
                    tbody.html('<tr><td colspan="5" class="text-center text-danger">Something went wrong. Please try again.</td></tr>');
                })
                .always(function() {
                    $btn.prop('disabled', false).text(originalText);
                    toggleFilterBtn();
                });
        });

        // Reset filters and table
        $('#reset-btn').on('click', function() {
            $('#state').val('');
            $('#district').html('<option value="">Select District</option>').prop('disabled', true);
            $('#type').val('');
            $('#filter-btn').prop('disabled', true);
            $('#centers-table-body').html(
                '<tr><td colspan="5" class="text-center text-muted">Please select filters to view centers.</td></tr>'
            );
        });

        toggleFilterBtn();
    </script>
@endsection