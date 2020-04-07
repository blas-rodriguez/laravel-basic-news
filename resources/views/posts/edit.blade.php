@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Articulo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ route('posts.update', $post)}}" method="POST">
                    
                        <div class="form-group">
                            <label >Titulo *</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $post->title)}}" requered>
                        </div>
                        <div class="form-group">
                            <label >Imagen</label>
                            <input type="file" name="file" value="{{ old('file', $post->image)}}">
                        </div>
                        <div class="form-group">
                            <label >Contenido *</label>
                            <textarea name="body"  rows="6" class="form-control"  >{{ old('body', $post->body)}}</textarea>
                        </div>
                        <div class="form-group">
                            <label >Contenido embebido</label>
                            <textarea name="iframe"  requered class="form-control" >{{ old('iframe', $post->iframe)}}</textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Grabar" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
