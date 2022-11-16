<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
    @method('PUT')
    @endisset
    <div class="form-row d-flex">
        <div class="form-group col-md-5 my-3 mx-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" @isset($nome)value="{{$nome}}"@endisset class="form-control" required>
        </div>

        <div class="form-group col-md-3 my-3 mx-3">
            <label for="temporadas" class="form-label">Número de Temporadas:</label>
            <input type="number" id="temporadas" name="temporadas" @isset($temporadas)value="{{$temporadas}}"@endisset class="form-control" required>
        </div>

        <div class="form-group col-md-3 my-3 mx-3">
            <label for="episodios" class="form-label">Número de Episódios:</label>
            <input type="number" id="episodios" name="episodios" @isset($episodios)value="{{$episodios}}"@endisset class="form-control" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary m-2">Salvar</button>
</form>
