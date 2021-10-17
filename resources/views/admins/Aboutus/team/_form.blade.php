<div class="card-body">
    <div class="form-group mb-8">
        <div class="alert alert-custom alert-default" role="alert">
            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
            <div class="alert-text">
                Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <label class="col-lg-1 col-form-label text-lg-right">Name</label>
        <div class="col-lg-3">
            <input name="name" type="text" class="form-control" value="{{$team->name ?? ''}}" placeholder="Ex: nationals" />
            <span class="form-text text-muted">Please enter percantge of NATIONALS</span>
        </div>
        <label class="col-lg-2 col-form-label text-lg-right">Percantage</label>
        <div class="col-lg-3">
            <input name="per" type="number" class="form-control" value="{{$team->per ?? ''}}" placeholder="Ex: 85" />
            <span class="form-text text-muted">Please enter percantge of YOUTH</span>
        </div>
      
    </div>


</div>
<div class="card-footer">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <button type="submit" class="btn btn-success mr-2">{{$button}}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</div>