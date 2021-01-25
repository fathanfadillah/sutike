@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/account/dashboard') }}" class="btn btn-link">
                <i class="fas fa-arrow-circle-left"></i> Back
            </a>
            <div class="card">
                <h5 class="card-header bg-primary font-weight-bold text-white">
                    @if (isset($shipping))
                        {{ __('Edit Shipping') }}
                    @else
                        {{ __('Add New Shipping') }}
                    @endif
                </h5>

                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <form
                                id="form"
                                method="POST"
                                action="{{ isset($shipping) ? route('user.update-shipping', $shipping->id) : route('user.store-shipping') }}">
                                @csrf
                                @if (isset($shipping))
                                    @method('PUT')
                                @endif

                                <div class="form-group row">
                                    <label for="address_name" class="col-md-4 col-form-label text-md-right">{{ __('Address Name') }}</label>

                                    <div class="col-md-6">
                                        <input
                                            id="address_name"
                                            type="text"
                                            class="form-control"
                                            name="address_name"
                                            value="{{ isset($shipping->address_name) ? $shipping->address_name : '' }}"
                                            required autocomplete="address_name"
                                            aria-describedby="addressHelp"
                                            autofocus
                                        >
                                        <small id="addressHelp" class="form-text text-muted">
                                            Name your address like: House, Apartment, Office, Hospital, etc.
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="receiver_name" class="col-md-4 col-form-label text-md-right">{{ __('Receiver Name') }}</label>

                                    <div class="col-md-6">
                                        <input
                                            id="receiver_name"
                                            type="text"
                                            class="form-control"
                                            name="receiver_name"
                                            value="{{ isset($shipping->receiver_name) ? $shipping->receiver_name : '' }}"
                                            required autocomplete="receiver_name"
                                            autofocus
                                        >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="country" id="country">
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Address') }}</label>

                                    <div class="col-md-6">
                                        <textarea
                                            class="form-control"
                                            id="address"
                                            name="address"
                                            required autocomplete="address"
                                            autofocus
                                            rows="4"
                                            cols="50"
                                        >
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="province_id" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="province_id" id="province_id">
                                            @if (isset($shipping->raja_ongkir_provinces->code))
                                                <option value="{{ $shipping->raja_ongkir_provinces->code }}" selected>
                                                    {{ $shipping->raja_ongkir_provinces->name }}
                                                </option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city_id" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="city_id" id="city_id">
                                            @if (isset($shipping->raja_ongkir_cities->code))
                                                <option value="{{ $shipping->raja_ongkir_cities->code }}" selected>
                                                    {{ $shipping->raja_ongkir_cities->type}}&nbsp;{{ $shipping->raja_ongkir_cities->name }}
                                                </option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                                    <div class="col-md-4">
                                        <input
                                            id="postal_code"
                                            type="text"
                                            class="form-control"
                                            name="postal_code"
                                            value="{{ isset($shipping->postal_code) ? $shipping->postal_code : '' }}"
                                            required autocomplete="postal_code"
                                            autofocus
                                        >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input
                                            id="phone_number"
                                            type="tel"
                                            class="form-control"
                                            name="phone_number"
                                            value="{{ isset($shipping->phone_number) ? $shipping->phone_number : '' }}"
                                            required autocomplete="phone_number"
                                            autofocus
                                        >
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Save Changes') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/intlTelInput/intlTelInput.js') }}"></script>
<script>
    $('#province_id').select2({
        allowClear: false,
        ajax: {
            url: "{{ route('raja-ongkir-provinces.select2') }}",
            dataType: 'JSON',
            delay: 0,
            data: function (params) {
                return {
                    search: params.term,
                };
            },
            processResults: function (data, params) {
                return {
                    results: data.items,
                };
            },
            cache: false
        },
        placeholder: 'Select provinces',
    });

    $('#city_id').select2({
        allowClear: false,
        ajax: {
            url: "{{ route('raja-ongkir-cities.select2') }}",
            dataType: 'JSON',
            delay: 0,
            data: function (params) {
                return {
                    search: params.term,
                    province_id: $('#province_id').val(),
                };
            },
            processResults: function (data, params) {
                return {
                    results: data.items,
                };
            },
            cache: false
        },
        placeholder: 'Select cities'
    });

    $(document).ready(function() {
        const countryData = window.intlTelInputGlobals.getCountryData();
        const input = document.querySelector('#phone_number');
        const countrySelect = document.querySelector('#country');
        document.querySelector('#address').value = "{{ isset($shipping) ? $shipping->address : '' }}";
        const errorMap = [
            "Invalid number.",
            "Invalid country code.",
            "A phone number is too short.",
            "A phone number is too long.",
            "Invalid number."
        ];

        const iti = window.intlTelInput(input, {
            allowDropdown: true,
            separateDialCode: true,
            autoPlaceholder: "off",
            initialCountry: "{{ isset($shipping) ? $shipping->country : 'id' }}",
            preferredCountries: ['id'],
            utilsScript: "{{ asset('js/utils.js') }}",
        });

        for (let i = 0; i < countryData.length; i++) {
            const country = countryData[i];
            const optionNode = document.createElement('option');
            optionNode.value = country.iso2;
            const textNode = document.createTextNode(country.name);
            optionNode.appendChild(textNode);
            countrySelect.appendChild(optionNode);
        }
        countrySelect.value = `{{ isset($shipping) ? $shipping->country : '${iti.getSelectedCountryData().iso2}' }}`;

        if (countrySelect.value !== 'id') {
            $('#province_id').prop('disabled', true);
            $('#city_id').prop('disabled', true);
        }

        input.addEventListener('countrychange', function() {
            countrySelect.value = iti.getSelectedCountryData().iso2;
            if (countrySelect.value !== 'id') {
                $('#province_id').prop('disabled', true);
                $('#city_id').prop('disabled', true);
            } else {
                $('#province_id').prop('disabled', false);
                $('#city_id').prop('disabled', false);
            }
            console.log(countrySelect.value);
        });

        countrySelect.addEventListener('change', function() {
            iti.setCountry(this.value);
        });

        document.querySelector('#form').addEventListener('submit', function (e) {
            e.preventDefault();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    input.value = iti.getNumber();
                    if (this.action === "{{ route('user.store-shipping') }}") {
                        axios.post(this.action, {
                            'address_name': document.querySelector('#address_name').value,
                            'receiver_name': document.querySelector('#receiver_name').value,
                            'country': document.querySelector('#country').value,
                            'address': document.querySelector('#address').value,
                            'province_id': document.querySelector('#province_id').value,
                            'city_id': document.querySelector('#city_id').value,
                            'postal_code': document.querySelector('#postal_code').value,
                            'phone_number': document.querySelector('#phone_number').value
                        })
                        .then((response) => {
                            clearErrors();
                            this.reset();
                            let timerInterval;
                            Swal.fire({
                                html: 'Adding ...',
                                timer: 2000,
                                timerProgressBar: true,
                                onBeforeOpen: () => {
                                    Swal.showLoading();
                                    timerInterval = setInterval(() => {
                                    Swal.getContent().querySelector('b')
                                        .textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                onClose: () => { clearInterval(timerInterval) }
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    Swal.fire({
                                        title: 'Great!',
                                        text: "You have added a new shipping address",
                                        icon: 'success',
                                        confirmButtonText: 'Okay'
                                    }).then((result) => {
                                        if (result.value) {
                                            window.location.href = "{{ url('/account/dashboard') }}"
                                        }
                                    });
                                }
                            });
                        })
                        .catch((error) => {
                            const errors = error.response.data.errors;
                            const firstItem = Object.keys(errors)[0];
                            const firstItemDOM = document.getElementById(firstItem);
                            const firstErrorMessage = errors[firstItem][0];

                            firstItemDOM.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
                            clearErrors();

                            firstItemDOM.insertAdjacentHTML('afterend', `<span class="invalid-feedback" role="alert"><strong>${firstErrorMessage}</strong></span>`);
                            firstItemDOM.classList.add('form-control', 'is-invalid');
                        });
                    } else {
                        axios.put(this.action, {
                            'address_name': document.querySelector('#address_name').value,
                            'receiver_name': document.querySelector('#receiver_name').value,
                            'country': document.querySelector('#country').value,
                            'address': document.querySelector('#address').value,
                            'province_id': document.querySelector('#province_id').value,
                            'city_id': document.querySelector('#city_id').value,
                            'postal_code': document.querySelector('#postal_code').value,
                            'phone_number': document.querySelector('#phone_number').value
                        })
                        .then((response) => {
                            clearErrors();
                            this.reset();
                            let timerInterval;
                            Swal.fire({
                                html: 'Updating ...',
                                timer: 2000,
                                timerProgressBar: true,
                                onBeforeOpen: () => {
                                    Swal.showLoading();
                                    timerInterval = setInterval(() => {
                                    Swal.getContent().querySelector('b')
                                        .textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                onClose: () => { clearInterval(timerInterval) }
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    Swal.fire({
                                        title: 'Great!',
                                        text: "Your shipping address has been updated successfully",
                                        icon: 'success',
                                        confirmButtonText: 'Okay'
                                    }).then((result) => {
                                        if (result.value) {
                                            window.location.href = "{{ url('/account/dashboard') }}"
                                        }
                                    });
                                }
                            });
                        })
                        .catch((error) => {
                            const errors = error.response.data.errors;
                            const firstItem = Object.keys(errors)[0];
                            const firstItemDOM = document.getElementById(firstItem);
                            const firstErrorMessage = errors[firstItem][0];

                            firstItemDOM.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
                            clearErrors();

                            firstItemDOM.insertAdjacentHTML('afterend', `<span class="invalid-feedback" role="alert"><strong>${firstErrorMessage}</strong></span>`);
                            firstItemDOM.classList.add('form-control', 'is-invalid');
                        });
                    }
                } else {
                    const error = iti.getValidationError();
                    const showError = errorMap[error];

                    input.scrollIntoView();
                    clearErrors();

                    input.insertAdjacentHTML('afterend', `<span class="invalid-feedback" role="alert"><strong>${showError}</strong></span>`);
                    input.classList.add('form-control', 'is-invalid');
                }
            }
        });
    });

    function clearErrors() {
        const errorMessages = document.querySelectorAll('.invalid-feedback');
        errorMessages.forEach((element) => element.textContent = '');

        const formControls = document.querySelectorAll('.form-control');
        formControls.forEach((element) => element.classList.remove('is-invalid'));
    }
</script>
@endsection
