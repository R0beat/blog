@csrf 
  <label for="">
    Titulo del proyecto <br> 
  <input type="text" name="title" value="{{old('title', $project->title)}}">
  </label> 
  <br>
  <label for="">
    Url del proyecto <br>
  <input type="text" name="url" value="{{ old('url', $project->url) }}">
  </label> 
  <br>
  <label for="">
    Descripción del proyecto <br>
  <input type="text" name="description" value="{{ old('description', $project->description) }}">
  </label>
  <br>
  <button>@lang($btnText)</button>