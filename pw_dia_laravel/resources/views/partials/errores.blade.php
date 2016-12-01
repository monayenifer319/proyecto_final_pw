@if(count($errors)>0)
    <div class="alert-danger">
        <strong>Por favor corrige los siguientes errores</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif