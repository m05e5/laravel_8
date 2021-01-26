<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
</head>
<body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card" style="margin: 2%;">
                            <div class="card-header">
                                 Post details
                            </div>
                            <div class="card-body">
                                @if(Session::has('post_updated'))
                                    <div class="alert allert-succes" role="alert">
                                        {{Session::get('post_updated')}}
                                    </div>
                                @endif
                                
                                <form method="POST" action="{{route('post.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$post->id}}"/>
                                    <div class="form-group">php
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" value ="{{$post->title}}" class="form-control" placeholder="Enter post Title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Post Description</label>
                                        <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
                                    </div>
                        
                                    <input type="submit" class="btn btn-success" value="Update">
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>