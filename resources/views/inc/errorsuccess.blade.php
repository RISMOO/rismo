@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="card-alert card light-red lighten-5">
            <div class="card-content light-red-text center-align">
                {{ $error }}
            </div>

        </div>

    @endforeach

@endif

@if (session('success'))

    <div class="card-alert card light-green lighten-5">
        <div class="card-content1 light-green-text center-align">
            {{ session('success') }}
        </div>

    </div>


@endif

@if (session('error'))

    <div class="card-alert card light-red lighten-5">
        <div class="card-content light-red-text center-align">
            {{ session('error') }}
        </div>

    </div>



@endif
