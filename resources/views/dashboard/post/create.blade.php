<form action="{{ route("post.store") }}" method="post">
    
    @csrf
    
    <div class="form-group">
        <label for="title">titulo</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="url_clean">URL limpia</label>
        <input type="text" name="url_clean" id="url_clean">
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
