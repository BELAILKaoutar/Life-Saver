<div id="updateModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Cin</label>
               <input type="cin" name="cin"  value="<?=$personne->cin?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Name</label>
               <input type="text" name="name" value="<?=$personne->name?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText"class="col-sm-2 col-form-label">Dateenter</label>
               <input type="date" name="Dateenter" value="<?=$personne->Dateenter?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
               <input type="address" name="address" value="<?=$personne->address?>"><br>
           </div>
           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Email</label>
               <input type="email" name="address" value="<?=$personne->email?>"><br>
           </div>           <div class="row mb-3">
             <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
               <input type="phone" name="phone" value="<?=$personne->phone?>"><br>
           </div>      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {
        // Trigger the modal when the "pen" link is clicked
        $('a[data-toggle="modal"]').on('click', function () {
            // You can customize this part to fetch and set values dynamically
            // For now, I'm just clearing the previous values in the modal fields
            $('#updateModal input').val('');
        });

        // Handle the "Save changes" button click
        $('#saveChangesBtn').on('click', function () {
            // Add your logic to handle the update here
            // You can get the values from the modal fields using $('#updateModal input[name="fieldName"]').val()
            // For example:
            var cinValue = $('#updateModal input[name="cin"]').val();
            var nameValue = $('#updateModal input[name="name"]').val();
            var dateEnterValue = $('#updateModal input[name="Dateenter"]').val();
            var addressValue = $('#updateModal input[name="address"]').val();
            var emailValue = $('#updateModal input[name="email"]').val();
            var phoneValue = $('#updateModal input[name="phone"]').val();

            // Perform your update logic with the values

            // Close the modal
            $('#updateModal').modal('hide');
        });
    });
</script>
