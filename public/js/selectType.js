$('#selectType').on('change', function(e){
    id = this.value;
    // console.log(`http://localhost:8000/home/main/${id}`);
    $.ajax({
        url:`http://localhost:8000/home/main/${id}`,
        type:'get',
        
        success: function(data){
        // console.log(data);
        $('#selectDiv').empty();
                item = data;
                console.log(item);
                $('#selectDiv').append(`
                <form method="POST" action="http://localhost:8000/home/main/${item.id}" enctype="multipart/form-data"> 
                <input type="hidden" name="_method" value="PUT">
                <div class="card-body">
                       <div class="form-group row">
                        <label  class="col-2 col-form-label">description</label>
                            <div  class="col-10">
                            <input id="kt_maxlength_1" name="description" class="form-control" type="text" maxlength="25" value="${item.description}" id="example-text-input"/>
                            </div>
                       </div>
                
                       
                   <div class="card-footer">
                    <div class="row">
                     <div class="col-2">
                     </div>
                     <div class="col-10">
                      <button type="submit" class="btn btn-success mr-2">Edit</button>
                      <button type="reset" class="btn btn-secondary">Cancel</button>
                     </div>
                    </div>
                   </div>
            </form>
            `);
            
 
        }
      });
    
})