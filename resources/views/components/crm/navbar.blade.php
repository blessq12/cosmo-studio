<nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('root.index') }}" class="optima bold text-uppercase">
                    {{ $company->name }}
                </a>
            </div>
            <div class="col-6 text-end">
                Привет, {{ Auth::user()->name }}
            </div>
        </div>
    </div>
</nav>