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
    <div class="image-input" id="kt_image_2">
        <div class="image-input-wrapper" style="background-image: url({{asset('media/users/blank.png')}})"></div>
       
        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
         <i class="fa fa-pen icon-sm text-muted"></i>
         <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
         <input type="hidden" name="profile_avatar_remove"/>
        </label>
    </div>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
         <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
       </div>
    <div class="form-group row">
     <label  class="col-2 col-form-label">Category Name</label>
     <div class="col-10">
      <input name="name" class="form-control" type="text" value="{{$category->name}}" id="example-text-input"/>
     </div>
    </div>
    <div class="form-group row">
     <label for="example-search-input" class="col-2 col-form-label">Small Description</label>
     <div class="col-10">
      <input name="description" class="form-control" type="search" value="{{$category->description}}" id="example-search-input"/>
     </div>
    </div>
    
    
    <div class="form-group row">
     <label for="example-url-input" class="col-2 col-form-label">URL</label>
     <div class="col-10">
      <input name="url" class="form-control" type="url" value="{{$category->url}}" id="example-url-input"/>
     </div>
    </div>
    
    <div class="form-group row">
        <label class="col-3 col-form-label">State</label>
        <div class="col-9 col-form-label">
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
            <span class="form-text text-muted">Some help text goes here</span>
        </div>
    </div>

    <div class="form-group row">
     <label for="example-color-input" class="col-2 col-form-label">Color</label>
     <div class="col-10">
      <input name="color" class="form-control" type="color" value="{{$category->url}}" id="example-color-input"/>
     </div>
    </div>
    <div class="form-group row">
     <label for="example-email-input" class="col-2 col-form-label">Range</label>
     <div class="col-10">
      <input name="range" class="form-control" type="range" value="{{$category->url}}" />
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