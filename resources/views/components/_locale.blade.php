<form class="d-inline" action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn pe-0">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" class="" width="22" height="22">
    </button>
</form>