@extends((\Illuminate\Support\Facades\Session::get('theme') ?: 'classic') . '.app')

@section('content')

    <div class="page-contact">
        <h1>Добро пожаловать на страницу контактов компании Classic</h1>
        <p class="mt-30">
            Далее идет рыба текст:
        </p>
        <hr>
        <p class="mt-20">
             <x-contact-text :text="$text" />
        </p>
    </div>

@endsection
