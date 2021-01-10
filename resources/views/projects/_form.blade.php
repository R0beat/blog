@csrf 
  <div class="form-group">
    <label for="title">
      Titulo del proyecto
    </label>
    <input  class="form-control border-0 bg-light shadow-sm" type="text" name="title" value="{{old('title', $project->title)}}">
  </div>
  <div class="form-group">
    <label for="url">
      Url del proyecto
    </label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" value="{{ old('url', $project->url) }}">
  </div>
  <div class="form-group">
    <label for="">
      Descripción del proyecto
    </label>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="description" value="{{ old('description', $project->description) }}">
  </div>
  <button class="btn btn-primary btn-lg btn-block">@lang($btnText)</button>

  