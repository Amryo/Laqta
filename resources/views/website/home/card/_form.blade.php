<div class="card-body">
    <div class="form-group mb-8">
     <div class="alert alert-custom alert-default" role="alert">
      <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
      <div class="alert-text">
       Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
      </div>
     </div>
    </div>
    
       <div class="form-group row">
        <label  class="col-2 col-form-label">Number</label>
        <div  class="col-10">
         <input id="kt_maxlength_1" name="number" class="form-control" type="text" maxlength="25" value="{{$card->number}}" id="example-text-input"/>
        </div>
       </div>
       <div class="form-group row">
        <label  class="col-2 col-form-label">First Paragraph</label>
        <div  class="col-10">
         <input id="kt_maxlength_1" name="paragraph1" class="form-control" type="text" maxlength="25" value="{{$card->paragraph1}}" id="example-text-input"/>
        </div>
       </div>
       
       <div class="form-group row">
           <label for="example-search-input" class="col-2 col-form-label">Second Paragraph</label>
           <div class="col-10" style="position: relative;">
            <textarea name="paragraph2" class="form-control" id="kt_maxlength_5_modal" maxlength="50" placeholder="" rows="6">{{$card->paragraph2}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-2 col-form-label">Thired Paragraph</label>
        <div  class="col-10">
            <input id="kt_maxlength_1" name="paragraph3" class="form-control" type="text" maxlength="25" value="{{$card->paragraph3}}" id="example-text-input"/>
        </div>
    </div>

       
    
   <div class="card-footer">
    <div class="row">
     <div class="col-2">
     </div>
     <div class="col-10">
      <button type="submit" class="btn btn-success mr-2">Submit</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </div>
   </div>