 @extends('admin_folder/index')
         @section('content')
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Page</h3>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label>Page Title</label>
                    <input type="text" class="form-control" placeholder="Page Title" value="About">
                  </div>
                  <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="editor1" class="form-control" placeholder="Page Body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </textarea>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked> Published
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Meta Tags</label>
                    <input type="text" class="form-control" placeholder="Add Some Tags..." value="tag1, tag2">
                  </div>
                  <div class="form-group">
                    <label>Meta Description</label>
                    <input type="text" class="form-control" placeholder="Add Meta Description..." value="  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ">
                  </div>
                  <input type="submit" class="btn btn-default" value="Submit">
                </form>
              </div>
              </div>

          </div>
       @endsection
    
