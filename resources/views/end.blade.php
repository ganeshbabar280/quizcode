<div class="container-fluid">
    <div class="row">
        <div class="col-md-4" ></div>
    </div>
    <div class="col-md-4" ></div>
    <label>correct: <small>{{Session::get('correctans')}}</small></label>
    <br>
    <label>incorrect: <small>{{Session::get('wrongans')}}</small></label>
    <br>
    <label>result: <small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small></label>
    <a href="/student/dashboard"><button class ="btn btn-primary">finish Quiz</button></a>
    
    </div>
    <div class="col-md-4" ></div>
    </div>
    </div>
    
    </div>