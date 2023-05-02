<h3 style="text-align: center;">f</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
                @foreach ($errors->all() as $error)
                    <h1>{{$error}}</h1>
                @endforeach
            </div>
            <div class = "col-md-4"></div>
        </div>
    </div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    
                    <tr>
                        <th>#</th>
                        <th>question></th>

                       <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($question as $q)
                <tr>
                    <td>{{$loop ->index}}</td>
                    <td>{{$q-> question}}</td>

                    <td>
                        <a href="#" class="text-warning" data-toggle="modal" data-target="#Modal_update{{$q->id}}">Update</a>
                        <a href="#" class="text-danger" data-toggle="modal" data-target="#Modal_delete{{$q->id}}">Update</a>
                    </td>
                </tr>

<!-- model update
            <div class="modal fade" id="Modal_update{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <form method="post" action="/add">
                              @csrf
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                              <label> question </label> 
                              <br>
                              <input name= "question" class ="form-control">
                          </div>
                          <div class = "row"> 
                              <div class="col-md-6"> <label>a:</label></div>
                              <div class="col-md-6"> <label>b:</label></div>
                              <div class="col-md-6"> <label>c:</label></div>
                              <div class="col-md-6"> <label>d:</label></div>
                  
                          </div>
                          <div class = "row"> 
                              <div class="col-md-6"><input name="a"></div>
                              <div class="col-md-6"><input name="b"></div>
                              <div class="col-md-6"><input name="c"></div>
                              <div class="col-md-6"><input name="d"></div>
                  
                          </div>
                          <div class="row">
                          <div class = "col-md-3"><label>Answer</label>
                              <select name="ans">
                                  <option value="a">A</option>
                                  <option value="b">B</option>
                                  <option value="c">C</option>
                                  <option value="d">D</option>
                              </select>
                  
                          </div>
                        <div class = "col-md-3"> </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add question </button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div> -->
<!-- model deleate -->
            <div class="modal fade" id="Modal_delete{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <form method="post" action="/delete">
                              @csrf
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                          <input style="visibility : hidden" name="id" value = "{{$q->id}}">
                          <h3> are you want to delete your question? </h3>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">cancle</button>
                          <button type="submit" class="btn btn-danger">delete</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div> 
                   @endforeach
    

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="/add">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <label> question </label> 
            <br>
            <input name= "question" class ="form-control">
        </div>
        <div class = "row"> 
            <div class="col-md-6"> <label>a:</label></div>
            <div class="col-md-6"> <label>b:</label></div>
            <div class="col-md-6"> <label>c:</label></div>
            <div class="col-md-6"> <label>d:</label></div>

        </div>
        <div class = "row"> 
            <div class="col-md-6"><input name="a"></div>
            <div class="col-md-6"><input name="b"></div>
            <div class="col-md-6"><input name="c"></div>
            <div class="col-md-6"><input name="d"></div>

        </div>
        <div class="row">
        <div class = "col-md-3"><label>Answer</label>
            <select name="ans">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>

        </div>
      <div class = "col-md-3"> </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add question </button>
      </div>
    </form>
    </div>
  </div>
</div>