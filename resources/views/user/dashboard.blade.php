@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="dashboard-collapse">
        <div class="row">
            <div class="col-md-3 offset-sm-1 mr-sm-n2">
                <div class="card" >
                <h5 class="card-header bg-primary font-weight-bold text-white">{{ __('Dashboard') }}</h5>

                        <div class="card-body">
                        <p>
                            <a class="btn mb-2 col-md-10 text-left"type="button" data-toggle="collapse" 
                            data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
                                <i class="fas fa-file-invoice col-md-3 ml-n3"></i> Orders
                            </a>
                            <button class="btn mb-2 col-md-10 text-left" type="button" data-toggle="collapse" data-target="#collapseAddress" aria-expanded="true" aria-controls="collapseAddress">
                                <i class="fas fa-map-marker-alt col-md-3 ml-n3"></i> Addresses
                            </button>
                            <button class="btn mb-2 col-md-10 text-left" type="button" data-toggle="collapse" data-target="#collapseAccountSettings" aria-expanded="true" aria-controls="collapseAccountSettings">
                                <i class="fas fa-user-cog col-md-3 ml-n3"></i> Account Settings
                            </button>
                            <!-- <button class="btn mb-2 col-md-10 text-left" type="button" data-toggle="collapse" data-target="#collapseSupportTicket" aria-expanded="false" aria-controls="collapseSupportTicket">
                                <i class="fas fa-question-circle col-md-3 ml-n3"></i> Support Ticket
                            </button> -->
                        </p>
                    </div>
                </div>    
            </div>
            <div class="col-md-7">
        
                <div class="card ml-sm-n2">
                    <!-- <h5 class="card-header bg-primary font-weight-bold text-white">{{ __('Dashboard') }}</h5> -->

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- {!! $greetings !!} -->
                        <!-- <hr> -->
                        You can view your recent orders, manage your addresses, account settings, and support ticket below:
                        <hr>
                        <!-- <p>
                            <a class="btn btn-light mb-2" href="#" role="button">
                                <i class="fas fa-file-invoice"></i> Orders
                            </a>
                            <button class="btn btn-light mb-2" type="button" data-toggle="collapse" data-target="#collapseAddress" aria-expanded="false" aria-controls="collapseAddress">
                                <i class="fas fa-map-marker-alt"></i> Addresses
                            </button>
                            <button class="btn btn-light mb-2" type="button" data-toggle="collapse" data-target="#collapseAccountSettings" aria-expanded="false" aria-controls="collapseAccountSettings">
                                <i class="fas fa-user-cog"></i> Account Settings
                            </button>
                            <button class="btn btn-light mb-2" type="button" data-toggle="collapse" data-target="#collapseSupportTicket" aria-expanded="false" aria-controls="collapseSupportTicket">
                                <i class="fas fa-question-circle"></i> Support Ticket
                            </button>
                        </p> -->

                        <div class="collapse" id="collapseOrders" data-parent="#dashboard-collapse">
                            &nbsp;
                            <div class="card card-body shadow-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">

                                        </div>
                                        <div class="card card-body col mb-2">
                                            <h5 class="font-weight-bold text-center">No Order</h5>
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapseAddress" data-parent="#dashboard-collapse">
                            &nbsp;
                            <div class="card card-body shadow-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">

                                        </div>
                                        <div class="card card-body col mb-2">
                                            <h5 class="font-weight-bold text-center">Billing Address</h5>
                                            @if ($user_billing_address->count() > 0)
                                                <hr>
                                                @foreach ($user_billing_address as $item)
                                                    <p>
                                                        <b>Name</b>:&nbsp;{{ $item->firstname }}&nbsp;{{ $item->lastname }}<br>
                                                        <b>Country</b>:&nbsp;<span class="flag-icon flag-icon-{{ $item->country }}"></span>&nbsp;<small>{{ $item->country }}</small><br>
                                                        <b>Address</b>:&nbsp;{{ $item->address }}<br>
                                                        @if (isset($item->raja_ongkir_provinces->code))
                                                            <b>Province</b>:&nbsp;{{ $item->raja_ongkir_provinces->name }}<br>
                                                        @endif
                                                        @if (isset($item->raja_ongkir_cities->code))
                                                            <b>City / Regency</b>:&nbsp;{{ $item->raja_ongkir_cities->type }}&nbsp;{{ $item->raja_ongkir_cities->name }}<br>
                                                        @endif
                                                        <b>Postal Code</b>:&nbsp;{{ $item->postal_code }}<br>
                                                        <b>Phone Number</b>:&nbsp;{{ $item->phone_number }}<br>
                                                        <b>Email</b>:&nbsp;{{ $item->email }}<br>
                                                        <small class="text-muted">Last updated on {{ \Carbon\Carbon::parse($item->updated_at)->isoFormat('LLLL') }}</small><br>
                                                    </p>
                                                    <a class="btn btn-primary" href="{{ route('user.edit-billing', $item->id) }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                @endforeach
                                            @else
                                                You haven't added billing address yet.<br>
                                                <a class="btn btn-primary" href="{{ route('user.billing-form') }}">
                                                    <i class="fas fa-plus-circle"></i> Add
                                                </a>
                                            @endif
                                        </div>
                                        <div class="card card-body col mb-2">
                                            <h5 class="font-weight-bold text-center">Shipping Address</h5>
                                            @if ($user_shipping_address->count() > 0)
                                                <hr>
                                                <div class="table-responsive">
                                                    <table id="shipping-address" class="table table-hover">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Address Name</th>
                                                                <th>Receiver Name</th>
                                                                <th>Phone Number</th>
                                                                <th>Updated At</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            @else
                                                You haven't added shipping address yet.
                                            @endif
                                            <br>
                                            <a class="btn btn-primary" href="{{ route('user.shipping-form') }}">
                                                <i class="fas fa-plus-circle"></i> Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapseAccountSettings" data-parent="#dashboard-collapse">
                            &nbsp;
                            <div class="card card-body shadow-sm">
                                <div class="container">
                                    <h5 class="font-weight-bold text-center">Account Settings</h5>
                                    <hr>
                                    <div class="row justify-content-center">
                                        <form method="PUT" action="{{ route('user.account-settings') }}" id="form">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="name"
                                                        type="text"
                                                        class="form-control"
                                                        name="name"
                                                        value="{{ isset($my_account->name) ? $my_account->name : '' }}"
                                                        required autocomplete="name"
                                                        autofocus
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="phone_number"
                                                        type="tel"
                                                        class="form-control"
                                                        name="phone_number"
                                                        value="{{ isset($my_account->phone_number) ? $my_account->phone_number : '' }}"
                                                        required autocomplete="phone_number"
                                                        autofocus
                                                        aria-describedby="phoneHelp"
                                                    >
                                                    @if (!isset($my_account->phone_number))
                                                        <small id="phoneHelp" class="form-text text-muted">
                                                            Please verify your phone number.
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="email"
                                                        type="email"
                                                        class="form-control"
                                                        name="email"
                                                        value="{{ isset($my_account->email) ? $my_account->email : '' }}"
                                                        required autocomplete="email"
                                                        autofocus
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="old_password"
                                                        type="password"
                                                        class="form-control"
                                                        name="old_password"
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="password"
                                                        type="password"
                                                        class="form-control"
                                                        name="password"
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                                                <div class="col-md-8">
                                                    <input
                                                        id="password-confirm"
                                                        type="password"
                                                        class="form-control"
                                                        name="password_confirmation"
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
                        <div class="collapse" id="collapseSupportTicket" data-parent="#dashboard-collapse">
                            &nbsp;
                            <div class="card card-body shadow-sm">
                                Support Ticket
                            </div>
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
    $(document).ready(function() {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $('#shipping-address').DataTable({
            processing: true,
            language: {
                processing: '<i class="fas fa-circle-notch fa-spin fa-2x"></i>'
            },
            serverSide: true,
            ajax: { url: "{{ route('user.dashboard') }}" },
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false, width: '3%' },
                { data: 'address_name', name: 'address_name', orderable: true, searchable: true },
                { data: 'receiver_name', name: 'receiver_name', orderable: true, searchable: true },
                { data: 'phone_number', name: 'phone_number', orderable: true, searchable: true },
                { data: 'updated_at', name: 'updated_at', orderable: true, searchable: true },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        const input = document.querySelector('#phone_number');
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
            initialCountry: "id",
            preferredCountries: ['id'],
            utilsScript: "{{ asset('js/utils.js') }}",
        });

        $(document).on('click', '.destroy', function() {
            const id = $(this).attr('id');
            console.log(id);
            $.ajax({
                url: "/account/delete/shipping/"+id,
                method: "DELETE",
                success: function(data)
                {
                    let timerInterval;
                    Swal.fire({
                        html: 'Deleting ...',
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
                                title: 'Deleted!',
                                text: 'Your shipping address has been deleted successfully',
                                icon: 'success',
                                confirmButtonText: 'Okay'
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            });
                            // $('#shipping-address').DataTable().ajax.reload();
                        }
                    });
                }
            });
        });

        document.querySelector('#form').addEventListener('submit', function (e) {
            e.preventDefault();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    input.value = iti.getNumber();
                    axios.put(this.action, {
                        'name': document.querySelector('#name').value,
                        'phone_number': document.querySelector('#phone_number').value,
                        'email': document.querySelector('#email').value,
                        'old_password': document.querySelector('#old_password').value,
                        'password': document.querySelector('#password').value,
                        'password_confirmation': document.querySelector('#password-confirm').value
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
                                    text: 'Your account settings have been updated successfully',
                                    icon: 'success',
                                    confirmButtonText: 'Okay'
                                }).then((result) => {
                                    if (result.value) {
                                        location.reload();
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
