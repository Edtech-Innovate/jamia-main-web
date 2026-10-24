<div class="modal-header">
    <h5 class="modal-title">Add Center</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form method="POST" action="/addcenter" enctype="multipart/form-data"  class="p-4" id="center-form">
    @csrf

    <label class="form-label">Center Name</label>
    <input type="text" name="center_name" class="form-control mb-3" placeholder="Center Name" required>

    <label class="form-label">Country</label>
    <select name="country" id="country" class="form-select mb-3" required>
        <option value="">Select Country</option>
        @foreach ($countries as $country)
            <option value="{{ $country['iso2'] }}">{{ $country['name'] }}</option>
        @endforeach
    </select>

    <!-- Indian Fields -->
    <div id="india-fields" style="display: none;">
        <label class="form-label">State</label>
        <select id="state" name="state" class="form-select mb-3" ></select>

        <label class="form-label">District</label>
        <select name="district" id="district-india" class="form-select mb-3" ></select>
    </div>

    <!-- Abroad Fields -->
    <div id="abroad-fields" style="display: none;">
        <label class="form-label">District</label>
        <select name="district-abroad" id="district-abroad" class="form-select mb-3" ></select>
    </div>

    <!-- Final hidden field for state -->
    {{-- <input type="hidden" name="state" id="hidden-state">

    <input type="hidden" name="state" id="hidden-state"> --}}

    <label class="form-label">Type</label>
    <select name="type" class="form-select mb-3" required>
        <option value="center">Center</option>
        <option value="regional_coordinator">Regional Coordinator</option>
    </select>

    <button type="submit" class="btn btn-primary">Add Center</button>
</form>

<script>
    const countrySelect = document.getElementById('country');
    const indiaFields = document.getElementById('india-fields');
    const abroadFields = document.getElementById('abroad-fields');
    const state = document.getElementById('state');
    const districtIndia = document.getElementById('district-india');
    const districtAbroad = document.getElementById('district-abroad');
    // const state = document.getElementById('hidden-state');
    const apiKey = 'NkhodjdUdEtZNXZlWXdmeks5Q29iN01aZkNQY2NqbkxXMzJTZmtYbA==';

    function resetFields() {
        state.innerHTML = '<option value="">Select State</option>';
        districtIndia.innerHTML = '<option value="">Select District</option>';
        districtAbroad.innerHTML = '<option value="">Select District</option>';
    }

    countrySelect.addEventListener('change', function() {
        const iso2 = this.value;
        console.log('Selected country:', iso2); // 👈 Test log
        resetFields();

        if (iso2 === 'IN') {
            indiaFields.style.display = 'block';
            abroadFields.style.display = 'none';
            fetchStates(iso2);
        } else {
            indiaFields.style.display = 'none';
            abroadFields.style.display = 'block';
            fetchDistricts(iso2);
        }
    });

    function fetchStates(iso2) {
        fetch(`https://api.countrystatecity.in/v1/countries/${iso2}/states`, {
                headers: {
                    'X-CSCAPI-KEY': apiKey
                }
            })
            .then(res => res.json())
            .then(states => {
                console.log('States:', states); // 👈 Test log
                let options = '<option value="">Select State</option>';
                states.forEach(state => {
                    options += `<option value="${state.iso2}">${state.name}</option>`;
                });
                state.innerHTML = options;
            });
    }

    function fetchDistricts(iso2) {
        fetch(`https://api.countrystatecity.in/v1/countries/${iso2}/cities`, {
                headers: {
                    'X-CSCAPI-KEY': apiKey
                }
            })
            .then(res => res.json())
            .then(cities => {
                console.log('Cities:', cities); // 👈 Test log
                let options = '<option value="">Select District</option>';
                cities.forEach(city => {
                    options += `<option value="${city.name}">${city.name}</option>`;
                });
                districtAbroad.innerHTML = options;
            });
    }

    state.addEventListener('change', function() {
        const country = countrySelect.value;
        const state = this.value;
        state.value = this.value;

        fetch(`https://api.countrystatecity.in/v1/countries/${country}/states/${state}/cities`, {
                headers: {
                    'X-CSCAPI-KEY': apiKey
                }
            })
            .then(res => res.json())
            .then(cities => {
                let options = '<option value="">Select District</option>';
                cities.forEach(city => {
                    options += `<option value="${city.name}">${city.name}</option>`;
                });
                districtIndia.innerHTML = options;
            });
    });

    document.getElementById('center-form').addEventListener('submit', function() {
        if (countrySelect.value === 'IN') {
            state.value = state.value;
        } else {
            state.value = '';
            districtAbroad.name = 'district-abroad';
        }
    });
</script>
<script>
    $(function() {
        $("#center-form").on("submit", function(e) {
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