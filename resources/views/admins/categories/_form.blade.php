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

        <label  class="col-2 col-form-label">Image</label>
         <div class="col-lg-9 col-xl-6">
            <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url({{asset('media/users/blank.png')}})">
                <div class="image-input-wrapper"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input name="image" type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
            <span class="form-text text-muted">Default empty input with blank image</span>
         </div>
        </div>
       <div class="form-group row">
        <label  class="col-2 col-form-label">Category Name</label>
        <div  class="col-10">
         <input id="kt_maxlength_1" name="name" class="form-control" type="text" maxlength="25" value="{{$category->name}}" id="example-text-input"/>
        </div>
       </div>
       
       <div class="form-group row">
           <label for="example-search-input" class="col-2 col-form-label">small descriptions</label>
           <div class="col-10" style="position: relative;">
               <textarea name="description" class="form-control" id="kt_maxlength_5_modal" maxlength="50" placeholder="" rows="6">{{$category->description}}</textarea>
           </div>
       </div>
    
    <div class="form-group row">
        <label class="col-2 col-form-label">State</label>
        <div class="col-10">
            <div class="radio-inline">
                <label class="radio radio-danger">
                    <input type="radio" value="Active" name="status" checked="checked"/>
                    <span></span>
                    Active
                </label>
                <label class="radio radio-danger">
                    <input type="radio" value="Draft" name="status"  />
                    <span></span>
                    Draft
                </label>
                
            </div>
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