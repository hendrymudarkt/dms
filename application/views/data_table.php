<div class="section-header">
  <h1>Data Table</h1>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Data Table</h4>
        <div class="card-header-action">
          <a href="<?php echo site_url('welcome/add') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add</a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>                                 
              <tr>
                <th class="text-center">#</th>
                <th>Task Name</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Create a mobile app</td>
                <td>2018-01-20</td>
                <td><div class="badge badge-success">Completed</div></td>
                <td class="text-center"><a href="#" class="btn btn-icon btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-times"></i> Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>