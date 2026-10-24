<div class="modal-header">
    <h5 class="modal-title">Edit Center</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="/centers/update/{{ $center->id }}" enctype="multipart/form-data" class="p-4" id="edit-center-form">
    @csrf

    <label class="form-label">Center Name</label>
    <input type="text" name="center_name" class="form-control mb-3" value="{{ $center->center_name }}" required>

    <label class="form-label">Country</label>
    <select name="country" id="edit-country" class="form-select mb-3" required>
        <option value="">Select Country</option>
        @foreach ($countries as $country)
            <option value="{{ $country['iso2'] }}" {{ $center->country == $country['iso2'] ? 'selected' : '' }}>
                {{ $country['name'] }}
            </option>
        @endforeach
    </select>

    <!-- India Fields -->
    <div id="edit-india-fields" style="display: {{ $center->country == 'IN' ? 'block' : 'none' }};">
        <label class="form-label">State</label>
        <select name="state" id="edit-state" class="form-select mb-3">
            <option value="">Select State</option>
        </select>

        <label class="form-label">District</label>
        <select name="district" id="edit-district-india" class="form-select mb-3">
            <option value="">Select District</option>
        </select>
    </div>

    <!-- Abroad Fields -->
    <div id="edit-abroad-fields" style="display: {{ $center->country != 'IN' ? 'block' : 'none' }};">
        <label class="form-label">District (Abroad)</label>
        <select name="district-abroad" id="edit-district-abroad" class="form-select mb-3">
            <option value="">Select District</option>
        </select>
    </div>

    <label class="form-label">Type</label>
    <select name="type" class="form-select mb-3" required>
        <option value="center" {{ $center->type == 'center' ? 'selected' : '' }}>Center</option>
        <option value="regional_coordinator" {{ $center->type == 'regional_coordinator' ? 'selected' : '' }}>Regional Coordinator</option>
    </select>

    <button type="submit" class="btn btn-primary">Update Center</button>
</form>

<script>
    const apiKey = 'NkhodjdUdEtZNXZlWXdmeks5Q29iN01aZkNQY2NqbkxXMzJTZmtYbA==';

    // Function to load fields based on selected country
    function loadEditFields(center) {
        const country = document.getElementById('edit-country').value;
        const stateSelect = document.getElementById('edit-state');
        const districtIndia = document.getElementById('edit-district-india');
        const districtAbroad = document.getElementById('edit-district-abroad');

        // Reset dropdowns
        stateSelect.innerHTML = '<option value="">Select State</option>';
        districtIndia.innerHTML = '<option value="">Select District</option>';
        districtAbroad.innerHTML = '<option value="">Select District</option>';

        if (country === 'IN') {
            // Show India fields and fetch state and district data for India
            $('#edit-india-fields').show();
            $('#edit-abroad-fields').hide();

            // Fetch states for India
            fetch(`https://api.countrystatecity.in/v1/countries/${country}/states`, {
                headers: { 'X-CSCAPI-KEY': apiKey }
            })
            .then(res => res.json())
            .then(states => {
                let options = '<option value="">Select State</option>';
                if (states && states.length > 0) {
                    states.forEach(state => {
                        options += `<option value="${state.iso2}" ${state.iso2 === center.state ? 'selected' : ''}>${state.name}</option>`;
                    });
                    stateSelect.innerHTML = options;

                    // Fetch districts for the selected state (India)
                    if (center.state) {
                        fetch(`https://api.countrystatecity.in/v1/countries/${country}/states/${center.state}/cities`, {
                            headers: { 'X-CSCAPI-KEY': apiKey }
                        })
                        .then(res => res.json())
                        .then(cities => {
                            let cityOptions = '<option value="">Select District</option>';
                            if (cities && cities.length > 0) {
                                cities.forEach(city => {
                                    cityOptions += `<option value="${city.name}" ${city.name === center.district ? 'selected' : ''}>${city.name}</option>`;
                                });
                                districtIndia.innerHTML = cityOptions;
                            } else {
                                districtIndia.innerHTML = '<option value="">No districts available</option>';
                            }
                        })
                        .catch(err => console.error('Error fetching cities:', err));
                    }
                } else {
                    stateSelect.innerHTML = '<option value="">No states available</option>';
                }
            })
            .catch(err => console.error('Error fetching states:', err));
        } else {
            // Show abroad fields and fetch districts for abroad countries
            $('#edit-india-fields').hide();
            $('#edit-abroad-fields').show();

            fetch(`https://api.countrystatecity.in/v1/countries/${country}/cities`, {
                headers: { 'X-CSCAPI-KEY': apiKey }
            })
            .then(res => res.json())
            .then(cities => {
                let options = '<option value="">Select District</option>';
                if (cities && cities.length > 0) {
                    cities.forEach(city => {
                        options += `<option value="${city.name}" ${city.name === center['district-abroad'] ? 'selected' : ''}>${city.name}</option>`;
                    });
                    districtAbroad.innerHTML = options;
                } else {
                    districtAbroad.innerHTML = '<option value="">No districts available</option>';
                }
            })
            .catch(err => console.error('Error fetching cities abroad:', err));
        }
    }

    // Toggle India/Abroad Fields on country change
    $('#edit-country').on('change', function() {
        loadEditFields({state: '{{ $center->state }}', district: '{{ $center->district }}', 'district-abroad': '{{ $center->district_abroad }}'});
    });

    // Wait for the modal to show up before loading the fields
    const centerData = @json($center);

    $('#edit-center-modal').on('shown.bs.modal', function () {
        loadEditFields(centerData);
    });
    $(document).ready(function(){
        $('#edit-country').trigger('change');
    })

    $(function() {
        $("#edit-center-form").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: this.action,
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == '200') {
                        $('.modal').modal('hide');
                        toastr.success(data.msg);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        toastr.error(data.errors);
                    }
                }
            });
        });
    });
</script>
