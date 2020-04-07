@extends('layouts.app')

@section('title', $problems->name)

@section('main')
    <div class="box">
        @php echo $problems->text; @endphp
        <form method="post" enctype="multipart/form-data">
            <div>
                <input type="file" id="file" name="file" multiple>
            </div>
            <div>
                <button class="primary">enviar</button>
            </div>
        </form>
    </div>
@endsection



