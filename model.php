<div class="w-50 text-md-right" >
									<a href="" data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
  data-mdb-whatever="@mdo">Forgot Password</a>
								</div>




                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content" >
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel">Enter Email</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/enteremail.php" method="POST">
          <div class="mb-3" style="background-color: Lavender">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" />
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="enteremail" >Send message</button>
      </div>
	  </form>
    </div>
  </div>
</div>