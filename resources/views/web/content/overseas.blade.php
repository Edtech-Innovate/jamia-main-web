@extends('web.layouts.main')

@section('title', 'Check Authorized Centres of JUA Overseas |')
@section('description', 'Select Country, District, and Type to find authorized overseas centers of Jamia Urdu Aligarh.')

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
        #district:disabled {
            cursor: not-allowed;
            opacity: 0.6;
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
            <form method="GET" id="overseas-filter-form" class="row g-3 mb-4" onsubmit="return false;">
                <div class="col-md-3">
                    <select name="country" id="country" class="form-select" required>
                        <option value="">Select Country</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="district" id="district" class="form-select" required disabled>
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
                            <th>Country</th>
                            <th>District</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="centers-table-body">
                        <tr>
                            <td colspan="5" class="text-center text-muted">Please select filters to view centers.</td>
                        </tr>
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
        let countryMap = {};

        function escapeHtml(str) {
            return String(str ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        function formatType(type) {
            if (!type) return '';
            return type
                .split('_')
                .map(w => w.charAt(0).toUpperCase() + w.slice(1))
                .join(' ');
        }

        function toggleFilterBtn() {
            const country = $('#country').val();
            const district = $('#district').val();
            const type = $('#type').val();
            $('#filter-btn').prop('disabled', !(country && district && type));
        }

        function loadCountries() {
            $('#country').html('<option value="">Loading...</option>').prop('disabled', true);

            fetch("https://api.countrystatecity.in/v1/countries", {
                    headers: {
                        'X-CSCAPI-KEY': apiKey
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error('Failed to load countries');
                    return res.json();
                })
                .then(countries => {
                    countryMap = {};
                    $('#country').html('<option value="">Select Country</option>');
                    countries
                        .filter(c => c.iso2 !== 'IN')
                        .sort((a, b) => a.name.localeCompare(b.name))
                        .forEach(country => {
                            $('#country').append(
                                `<option value="${escapeHtml(country.iso2)}">${escapeHtml(country.name)}</option>`
                            );
                            countryMap[country.iso2] = country.name;
                        });
                    $('#country').prop('disabled', false);
                })
                .catch(() => {
                    $('#country').html('<option value="">Failed to load countries</option>');
                });
        }

        loadCountries();

        // NOTE: /cities endpoint returns 403 on the free API plan.
        // Free plan only supports /states, so we use states as "district".
        $('#country').on('change', function() {
            const country = $(this).val();
            $('#district').html('<option value="">Select District</option>').prop('disabled', true);
            toggleFilterBtn();

            if (!country) return;

            $('#district').html('<option value="">Loading...</option>');

            fetch(`https://api.countrystatecity.in/v1/countries/${country}/states`, {
                    headers: {
                        'X-CSCAPI-KEY': apiKey
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error('Failed to load districts');
                    return res.json();
                })
                .then(states => {
                    $('#district').html('<option value="">Select District</option>');
                    if (!states || states.length === 0) {
                        $('#district').html('<option value="">No districts found</option>');
                        return;
                    }
                    states
                        .sort((a, b) => a.name.localeCompare(b.name))
                        .forEach(state => {
                            $('#district').append(
                                `<option value="${escapeHtml(state.name)}">${escapeHtml(state.name)}</option>`
                            );
                        });
                    $('#district').prop('disabled', false);
                    toggleFilterBtn();
                })
                .catch(() => {
                    $('#district').html('<option value="">Failed to load districts</option>');
                });
        });

        $('#type, #district').on('change', toggleFilterBtn);

        $('#filter-btn').on('click', function() {
            const country = $('#country').val();
            const district = $('#district').val();
            const type = $('#type').val();

            if (!country || !district || !type) {
                return;
            }

            const $btn = $(this);
            const originalText = $btn.text();
            $btn.prop('disabled', true).text('Loading...');

            const tbody = $('#centers-table-body');
            tbody.html('<tr><td colspan="5" class="text-center">Loading...</td></tr>');

            $.ajax({
                    url: "{{ route('centers.overseas.filter') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        country: country,
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
                        const countryName = countryMap[center.country] ?? center.country;
                        tbody.append(`
                            <tr>
                                <td>${escapeHtml(center.center_name)}</td>
                                <td>${escapeHtml(countryName)}</td>
                                <td>${escapeHtml(center['district-abroad'])}</td>
                                <td>${escapeHtml(formatType(center.type))}</td>
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

        $('#reset-btn').on('click', function() {
            $('#country').val('');
            $('#district').html('<option value="">Select District</option>').prop('disabled', true);
            $('#type').val('');
            $('#filter-btn').prop('disabled', true);
            $('#centers-table-body').html(
                '<tr><td colspan="5" class="text-center text-muted">Please select filters to view centers.</td></tr>'
            );
        });
    </script>
@endsection