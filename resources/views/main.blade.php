@extends((\Illuminate\Support\Facades\Session::get('theme') ?: 'classic') . '.app')

@section('content')

    <div class="">

        <form action="/change-theme" method="post">

            @csrf

            <div class="group">
                <div class="label">Пожалуйста, выберите тему</div>
                <select name="theme" class="input-ui mt-20 w-300" id="">
                    <option value="classic" @if(session()->get('theme') === 'classic') selected @endif>Classic</option>
                    <option value="cuba" @if(session()->get('theme') === 'cuba') selected @endif>Cuba</option>
                </select>
            </div>

            <div class="group mt-20">
                <button class="button-ui" type="submit">Сохранить</button>
            </div>

        </form>

    </div>

@endsection
