
<div class="back2">

<div class="container-fluid">
<form  method="post" action= "/submitans">
    @csrf

<div class="row" style="padding-top: 30vh; color: rgb(14, 1, 1);">

<div class="col-md-3"></div>

<div class="col-md-4">

<h4> #1:{{Session::get("nextq")}} :{{$question->question}}</h4>

<input value="a" name="ans" type="radio"> (A)<small>{{$question->a}}</small><br>
<input  value="b"name="ans" type="radio"> (B) <small>{{$question->b}}</small><br>
<input value="c"name="ans" type="radio">(C)<small>{{$question->c}}</small><br>
<input value="d"name="ans" type="radio"> (D)<small>{{$question->d}}</small><br>
<input value="{{$question->ans}}" style="visibility: hidden;" name="dbans">

</div>
<button type ="submit" style-float: right; class="btn btn-primary">Next</button>
</form>

<div class="col-md-5"></div>