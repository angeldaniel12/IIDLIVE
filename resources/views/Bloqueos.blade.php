<form action="{{ route('posts.like', $poste->id) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" 
                class="btn btn-{{ $poste->likedBy(auth()->user()) ? 'secondary' : 'primary' }}">
                {{ $poste->likedBy(auth()->user()) ? 'Unlike' : 'Like' }}
            </button>
        </form>
        <!-- Agregar botón para quitar like -->
        @if ($poste->likedBy(auth()->user()))
            <form action="{{ route('posts.unlike', $poste->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Unlike</button>
            </form>
        @endif

        <form action="{{route('creador.posts.nuevo')}}" method="POST" class="formulario-editar">
      @csrf
        <div class="modal-body">
      <!-- post-->
      <!-- <h6 class="heading-small text-muted mb-4"></h6> -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-20">
                      <div class="form-group" {{$errors ->has('title')? 'has-error' : ''}}>
                        <label class="form-control-label" for="input-username"></label>
                        <input type="text" name='title' class="form-control form-control-alternative" placeholder="Ingrese titulo">
                        {!! $errors->first('title','<span class="help-block">:message</span>')!!}
                      </div>
                    </div>
                    <div class="col-lg-20">
                      <div class="form-group" {{$errors ->has('excerpt')? 'has-error' : ''}}>
                        <label class="form-control-label" for="input-first-name"></label>
                        <textarea name="excerpt"class="form-control form-control-alternative" id="" cols="60" rows="5" placeholder="Ingresa el contenido.." required></textarea>
                        {!! $errors->first('excerpt','<span class="help-block">:message</span>')!!}
                      </div>
                    </div>
                 <div class="col-lg-20">
                      <div class="form-group"{{$errors ->has('body')? 'has-error' : ''}}>
                        <label class="form-control-label" for="input-last-name"> </label>
                        <textarea   name="body" id="editor" class="form-control form-control-alternative" cols="80" rows="5" placeholder="Ingresa el contenido.." required></textarea>
                        {!! $errors->first('body','<span class="help-block">:message</span>')!!}
                      </div>
                    </div>
                    <div class="col-lg-5">
    <div class="form-group">
        <label for="categoria">Categorías</label>
        <select class="form-select" id="categoria" name="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nameCategoria }}</option>
            @endforeach
        </select>
        {!! $errors->first('category', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="col-lg-10">
    <div class="form-group" id="etiquetas">
        <label for="etiquetas">Etiquetas</label>
        <!-- Las etiquetas se llenarán dinámicamente con JavaScript -->
    </div>
    {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
</div>
<!-- <div class="col-lg-10">
    <div class="form-group">
        <label for="etiquetas">Etiquetas</label>
        <select class="form-select" id="etiquetas" name="tags[]" multiple>
           
        </select>
        {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
    </div>
</div> -->

                    <!-- <div class="col-lg-5">
                            <div class="form-group" >
                                <label>Categorias</label>
                                <select class="form-select" name="category" id="categoria">
                           
                            @foreach ($categories as $category)
                                <option class="form-control form-control-alternative" value="{{$category->id}}" required>{{$category->nameCategoria}}</option>
                            @endforeach
                                </select> 
                                {!! $errors->first('category','<span class="help-block">:message</span>')!!}
                            
                        </div>
                        
                      </div> -->
                      <!-- <div class="col-lg-10">
                    <div class="form-group">
                                <label for="">Etiquetas: </label>
                                @foreach ($tagss as $tag)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="tags[]" value="{{ $tag->id }}" >
                        <label class="form-check-label" for="inlineCheckbox1">{{ $tag->name }}</label>
                      </div>
                      @endforeach
                  </div>
                   </div> -->
                 </div>
                </div>        
             <!-- fin -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal"><i class="fa fa-x"></i> Cerrar</button>
            <button type="submit" class="btn bg-gradient-success"><i class="bi bi-person-fill-dash"></i> Postear</button>
          </div>
      </form>
       <!-- <div class="col-lg-5">
                            <div class="form-group" >
                                <label>Categorias</label>
                                <select class="form-select" name="category" id="categoria">
                           
                            @foreach ($categories as $category)
                                <option class="form-control form-control-alternative" value="{{$category->id}}" required>{{$category->nameCategoria}}</option>
                            @endforeach
                                </select> 
                                {!! $errors->first('category','<span class="help-block">:message</span>')!!}
                            
                        </div>
                      </div>
                  <div class="col-lg-10">
                    <div class="form-group">
                                <label for="">Etiquetas: </label>
                               
                       @foreach ($tags as $tag)
                       
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="tags[]" value="{{ $tag->id }}" >
                        <label class="form-check-label" for="inlineCheckbox1">{{ $tag->name }}</label>
                      </div>  
                                    
                        @endforeach  -->